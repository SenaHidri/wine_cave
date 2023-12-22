<?php

namespace App\DataFixtures;

use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;;

class TypeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $red = new Type('Rouge');
        $manager->persist($red);

        $red = new Type('Rosé');
        $manager->persist($red);

        $red = new Type('Blanc');
        $manager->persist($red);

        $manager->flush();
    }
}
