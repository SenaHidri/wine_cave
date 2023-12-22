<?php

namespace App\DataFixtures;

use App\Entity\Wine;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;;

class WineFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $vieuxCarion = new Wine();
        $vieuxCarion->setName('Vieux Carion');
        $vieuxCarion->setType('Rouge');
        $vieuxCarion->setProductionYear(2021);
        $vieuxCarion->setShelf(5);
        $vieuxCarion->setQuantity(20);
        $manager->persist($vieuxCarion);

        $cotesDuRhone = new Wine();
        $cotesDuRhone->setName('Côtes du Rhone');
        $cotesDuRhone->setType('Blanc');
        $cotesDuRhone->setProductionYear(2022);
        $cotesDuRhone->setShelf(10);
        $cotesDuRhone->setQuantity(20);
        $manager->persist($cotesDuRhone);

        $paysDoc = new Wine();
        $paysDoc->setName("Pays d'Oc");
        $paysDoc->setType('Rosé');
        $paysDoc->setProductionYear(2020);
        $paysDoc->setShelf(15);
        $paysDoc->setQuantity(20);
        $manager->persist($paysDoc);

        $manager->flush();
    }
}
