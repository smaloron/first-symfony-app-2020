<?php

namespace App\DataFixtures;

use App\Entity\Person;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //Création d'une instance de Person
        $person = new Person();
        $person->setFirstName("Ada")
            ->setName("Lovelace")
            ->setGender("F")
            ->setNationality("Anglaise")
            ->setDateOfBirth(new \DateTime("1830-11-21"));

        $manager->persist($person);

        $person = new Person();
        $person->setFirstName("Hopper")
            ->setName("Grace")
            ->setGender("F")
            ->setNationality("Américaine")
            ->setDateOfBirth(new \DateTime("1905-11-21"));

        $manager->persist($person);

        $person = new Person();
        $person
            ->setName("Coluche")
            ->setGender("M")
            ->setNationality("Française")
            ->setDateOfBirth(new \DateTime("1948-11-21"));

        $manager->persist($person);



        $manager->flush();
    }
}
