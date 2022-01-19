<?php

namespace App\DataFixtures;

use App\Entity\Planet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 50; $i++) {
            $types = ['stone', 'gas', 'ice'];
            $prefixes = ['A', 'UT', 'KP', 'X'];

            $planet = new Planet();
            $planet->setName('Planet ' . $prefixes[array_rand($prefixes)] . '-' . $i);
            $planet->setType($types[array_rand($types)]);
            $planet->setDiameter(random_int(10_000, 10_000_000));
            $manager->persist($planet);
        }

        $manager->flush();
    }
}
