<?php

namespace App\DataFixtures;

use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;;

class TypeFixtures extends Fixture
{
    public const TYPE_WHITE = 'TYPE_WHITE';
    public function load(ObjectManager $manager): void
    {
        $red = new Type();
        $red->setName('Rouge');
        $manager->persist($red);

        $pink = new Type();
        $pink->setName('Rosé');
        $manager->persist($pink);

        $white = new Type();
        $white->setName('Blanc');
        $manager->persist($white);
        $this->addReference(self::TYPE_WHITE, $white);

        $manager->flush();
    }
}
