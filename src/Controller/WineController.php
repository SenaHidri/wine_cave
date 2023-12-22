<?php

namespace App\Controller;

use App\Entity\Wine;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function show(EntityManagerInterface $entityManager, int $id): Response
    {
        $wineById = $entityManager->getRepository(Wine::class)->find($id);

        if (!$wineById) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }
        return $this->render('wine/getWineById.html.twig', [
            'wines' => $wineById
        ]);
    }
}
