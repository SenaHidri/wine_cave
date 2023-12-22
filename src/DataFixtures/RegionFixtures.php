<?php

namespace App\DataFixtures;

use App\Entity\Region;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;;

class RegionFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $alsace = new Region('Alsace');
        $manager->persist($alsace);

        $bordeaux = new Region('Bordeaux');
        $manager->persist($bordeaux);

        $bourgogne = new Region('Bourgogne');
        $manager->persist($bourgogne);

        $valleeDuRhone = new Region('Vallée du Rhone');
        $manager->persist($valleeDuRhone);

        $valléeDeLaLoire = new Region('Vallée de la Loire');
        $manager->persist($valléeDeLaLoire);

        $provence = new Region('Provence');
        $manager->persist($provence);

        $manager->flush();
    }
}
