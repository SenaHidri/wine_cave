<?php

namespace App\DataFixtures;

use App\Entity\Wine;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;


class WineFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $muscat = new Wine();
        $muscat->setName('Muscat');
        $muscat->setShelf(5);
        $muscat->setQuantity(20);
        $muscat->setRegion($this->getReference(RegionFixtures::REGION_ALSACE));
        $muscat->setType($this->getReference(TypeFixtures::TYPE_WHITE));
        //$muscat->setProductionYear(ProductionYearFixtures::PRODUCTION_YEAR_2022);
        $manager->persist($muscat);

        $manager->flush();
    }
    public function getDependencies(): array
    {
        return [
            RegionFixtures::class,
            TypeFixtures::class,
            ProductionYearFixtures::class
        ];
    }
}
