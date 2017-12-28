<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\CVFormation;

class LoadCVFormation implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $cvformation = new CVFormation();
        $cvformation->setDiplome('Brevet des Collèges');
        $cvformation->setParticularite('Mention AB');
        $cvformation->setPeriode('2008');
        $cvformation->setVille('Tarbes, Hautes-Pyrénées');
        $manager->persist($cvformation);

        $cvformation = new CVFormation();
        $cvformation->setDiplome('Baccalauréat ES');
        $cvformation->setParticularite('Mention AB, Spécialité Anglais, Option Rugby');
        $cvformation->setPeriode('2012');
        $cvformation->setVille('Tarbes, Hautes-Pyrénées');
        $manager->persist($cvformation);

        $cvformation = new CVFormation();
        $cvformation->setDiplome('École d\'Ingénieurie Informatique');
        $cvformation->setParticularite('Bachelor 2');
        $cvformation->setPeriode('Actuel');
        $cvformation->setVille('Bordeaux, Gironde');
        $manager->persist($cvformation);


        $manager->flush();
    }
}