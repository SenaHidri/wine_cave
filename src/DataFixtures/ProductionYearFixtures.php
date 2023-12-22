<?php

namespace App\DataFixtures;

use App\Entity\ProductionYear;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;;

class ProductionYearFixtures extends Fixture
{
    public const PRODUCTION_YEAR_2022 = 2022;

    public function load(ObjectManager $manager): void
    {
        $year2015 = new ProductionYear();
        $year2015->setYear(2015);
        $manager->persist($year2015);

        $year2016 = new ProductionYear();
        $year2016->setYear(2016);
        $manager->persist($year2016);

        $year2017 = new ProductionYear();
        $year2017->setYear(2017);
        $manager->persist($year2017);

        $year2018 = new ProductionYear();
        $year2018->setYear(2018);
        $manager->persist($year2018);

        $year2019 = new ProductionYear();
        $year2019->setYear(2019);
        $manager->persist($year2019);

        $year2020 = new ProductionYear();
        $year2020->setYear(2020);
        $manager->persist($year2020);

        $year2021 = new ProductionYear();
        $year2021->setYear(2021);
        $manager->persist($year2021);

        $year2022 = new ProductionYear();
        $year2022->setYear(2022);
        $manager->persist($year2022);
        $this->addReference(self::PRODUCTION_YEAR_2022, $year2022);

        $year2023 = new ProductionYear();
        $year2023->setYear(2023);
        $manager->persist($year2023);

        $manager->flush();
    }
}
