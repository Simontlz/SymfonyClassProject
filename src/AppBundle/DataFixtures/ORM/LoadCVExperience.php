<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\CVExperience;

class LoadCVExperience implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $CVExperience = new CVExperience();
        $CVExperience->setAnnee(2014);
        $CVExperience->setPeriode('Juin - Septembre');
        $CVExperience->setIntitule('Commerçant Ambulant');
        $CVExperience->setVille('Biscarosse Plage');
        $manager->persist($CVExperience);

        $CVExperience = new CVExperience();
        $CVExperience->setAnnee(2015);
        $CVExperience->setPeriode('Juin - Septembre');
        $CVExperience->setIntitule('ASCT à SNCF');
        $CVExperience->setVille('Bordeaux');
        $manager->persist($CVExperience);

        $CVExperience = new CVExperience();
        $CVExperience->setAnnee(2016);
        $CVExperience->setPeriode('Juin - Septembre');
        $CVExperience->setIntitule('Commerçant Ambulant');
        $CVExperience->setVille('Biscarosse Plage');
        $manager->persist($CVExperience);

        $CVExperience = new CVExperience();
        $CVExperience->setAnnee(2017);
        $CVExperience->setPeriode('Juin - Septembre');
        $CVExperience->setIntitule('ASCT à SNCF');
        $CVExperience->setVille('Bordeaux');
        $manager->persist($CVExperience);

        $CVExperience = new CVExperience();
        $CVExperience->setAnnee(2017);
        $CVExperience->setPeriode('Février');
        $CVExperience->setIntitule('Stage d\'Intégration Web');
        $CVExperience->setVille('Bordeaux');
        $manager->persist($CVExperience);


        $manager->flush();
    }
}