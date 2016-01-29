<?php

namespace Sdz\BlogBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sdz\BlogBundle\Entity\Categorie;

class Categories implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        // Liste des noms de catégorie à ajouté
        $noms = array('Symfony2', 'Doctrine2', 'Tutoriel', 'Evenement');
        foreach($noms as $i => $nom)
        {
            // On crée la catégorie
            $liste_categories[$i] = new Categorie();
            $liste_categories[$i]->setNom($nom);
            
            // On persiste
            $manager->persist($liste_categories[$i]);
        }
        //On déclenche l'enrégistrement
        $manager->flush();
    }
}
