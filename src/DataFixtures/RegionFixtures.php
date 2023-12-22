<?php

namespace App\DataFixtures;

use App\Entity\Region;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;;

class RegionFixtures extends Fixture
{
    public const REGION_ALSACE = 'REGION_ALSACE';

    public function load(ObjectManager $manager): void
    {
        $alsace = new Region();
        $alsace->setName('Alsace');
        $manager->persist($alsace);
        $this->addReference(self::REGION_ALSACE, $alsace);

        $bordeaux = new Region();
        $bordeaux->setName('Bordeaux');
        $manager->persist($bordeaux);

        $bourgogne = new Region();
        $bourgogne->setName('Bourgogne');
        $manager->persist($bourgogne);

        $valleeDuRhone = new Region();
        $valleeDuRhone->setName('Vallée du Rhone');
        $manager->persist($valleeDuRhone);

        $valléeDeLaLoire = new Region();
        $valléeDeLaLoire->setName('Vallée de la Loire');
        $manager->persist($valléeDeLaLoire);

        $provence = new Region();
        $provence->setName('Provence');
        $manager->persist($provence);

        $manager->flush();
    }
}
