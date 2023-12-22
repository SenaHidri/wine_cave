<?php

namespace App\DataFixtures;

use App\Entity\ProductionYear;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;;

class ProductionYearFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $year2015 = new ProductionYear('2015');
        $manager->persist($year2015);

        $year2016 = new ProductionYear('2016');
        $manager->persist($year2016);

        $year2017 = new ProductionYear('2017');
        $manager->persist($year2017);

        $year2018 = new ProductionYear('2018');
        $manager->persist($year2018);

        $year2019 = new ProductionYear('2019');
        $manager->persist($year2019);

        $year2020 = new ProductionYear('2020');
        $manager->persist($year2020);

        $year2021 = new ProductionYear('2021');
        $manager->persist($year2021);

        $year2022 = new ProductionYear('2022');
        $manager->persist($year2022);

        $year2023 = new ProductionYear('2023');
        $manager->persist($year2023);

        $manager->flush();
    }
}
