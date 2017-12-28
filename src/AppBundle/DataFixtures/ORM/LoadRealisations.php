<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Realisations;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadRealisations implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $Realisations = new Realisations();
        $Realisations->setName('Plugin Meteo');
        $Realisations->setLangage('JavaScript');
        $Realisations->setDescription('Plugin météo réalisé en JavaScript avec récupération de données JSON
            pour un projet de cours.');
        $Realisations->setAnnee(2016);
        $manager->persist($Realisations);

        $Realisations = new Realisations();
        $Realisations->setName('OLVoyage');
        $Realisations->setLangage('SQL');
        $Realisations->setDescription('Le projet Olvoyage consistait à simuler la gestion d\'une base de 
            données pour une entreprise de transport ferroviaire.
            Il nous fallait plus exactement trouver les requêtes SQL adequates afin de répondre à des 
            problèmes donnés. Ensuite, nous devions générer automatiquement un fichier html 
            correspondant à la solution du problème.');
        $Realisations->setAnnee(2017);
        $manager->persist($Realisations);

        $Realisations = new Realisations();
        $Realisations->setName('OLibrary');
        $Realisations->setLangage('HTML/CSS, JavaScript, PHP, SQL');
        $Realisations->setDescription('Olibrary est le projet de groupe (par 5) "fil rouge" que nous avons 
            eu à réaliser en cette première année. Le terme "fil rouge" signifie qu\'il regroupe les 
            compétences acquises dans chaque matière étudiée afin de les réunir dans un seul et même 
            gros projet.
            Celui-ci consiste à créer un système de librairie en ligne où les clients pourront 
            rechercher et réserver un livre en ligne pour ensuite venir le retirer en librairie, 
            accompagné de son SIGB (Système Intégré de Gestion de Bibliothèque) d\'où les employés 
            pourront gérer l\'ajout de livres, leurs modifications, leur suppression, la gesion des abonnés, 
            des locations, etc.');
        $Realisations->setAnnee(2017);
        $manager->persist($Realisations);

        $Realisations = new Realisations();
        $Realisations->setName('TheDandyGirl');
        $Realisations->setLangage('HTML/CSS, JavaScript, PHP, SQL');
        $Realisations->setDescription('Le blog thedandygirl et mon projet personnel principal de cette année. 
            C\'est un blog que j\'ai réalisé conjointement avec ma copine (elle avait des idées très arrêtées 
            quant à son design) et ce, sans framework CSS ni PHP. J\'ai également créé pour elle de toutes 
            pièces un CRUD (Create, Read, Update, Delete) ergonomique. http://www.thedandygirl.com');
        $Realisations->setAnnee(2016);
        $manager->persist($Realisations);

        $Realisations = new Realisations();
        $Realisations->setName('Abiflizera');
        $Realisations->setLangage('Wordpress');
        $Realisations->setDescription('Abiflizera est le projet SEO (référencement) principal de l\'année 
            2016-2017. Nous devions, à l\'aide d\'un mot jusqu\'alors inconnu de Google, créer un site Web 
            et se positionner le plus haut possible dans les résultats de recherche à l\'aide de techniques 
            de SEO enseignées par l\'intervenant.');
        $Realisations->setAnnee(2016);
        $manager->persist($Realisations);

        $Realisations = new Realisations();
        $Realisations->setName('Jeu Canvas');
        $Realisations->setLangage('HTML/CSS');
        $Realisations->setDescription('Projet dans lequel nous avons dû par groupe de 3 créer un petit jeu dans
            une balise Canvas. Pour se faire, nous nous sommes appuyé sur la librairie "Phaser".');
        $Realisations->setAnnee(2016);
        $manager->persist($Realisations);

        $Realisations = new Realisations();
        $Realisations->setName('Blogfolio de Simon');
        $Realisations->setLangage('HTML/CSS, PHP, MaterializeCSS, JavaScript, SQL');
        $Realisations->setDescription('Projet personnel visant à rassembler un blog et un portfolio en un seul
            et même site. J\'ai fait le côté PHP et le SQL en découlant manuellement mais me suis aidé pour 
            la première fois d\'un framework CSS (MaterializeCSS) pour le design. http://www.blogfolio-de-simon.com');
        $Realisations->setAnnee(2017);
        $manager->persist($Realisations);

        $manager->flush();
    }
}