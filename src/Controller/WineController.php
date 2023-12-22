<?php

namespace App\Controller;

use App\Entity\Wine;
use App\Form\AddWineType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WineController extends AbstractController
{
    #[Route('/wines', name: 'app_wines')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $allWines = $entityManager->getRepository(Wine::class)->findAll();
        return $this->render('wine/index.html.twig', [
            'wines' => $allWines
        ]);
    }

    #[Route('/wines/{id<^\d+$>}', name: 'wine_by_id')]
    public function show(Wine $wine): Response
    {
        return $this->render('wine/getWineById.html.twig', [
            'wines' => $wine
        ]);
    }

    #[Route('/wines/addWine', name: 'add_wine')]
    public function addWine(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AddWineType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $entityManager->persist($data);
            $entityManager->flush();
            return $this->redirectToRoute('app_wines');
        }
        return $this->render('wine/addWine.html.twig', [
            'form' => $form
        ]);
    }

    
}
