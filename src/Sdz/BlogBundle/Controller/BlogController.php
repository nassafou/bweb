<?php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BlogBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function voirAction()
    {
        
        
        
        return $this->render('BlogBundle:Blog:index.html.twig', array('articles' => $articles));
        
    }
    public function  ajouterAction()
    {
        
    }
    public function modifierAction()
    {
        
    }
    public function supprimerAction()
    {
        
    }
    
    
    
    
    
}
