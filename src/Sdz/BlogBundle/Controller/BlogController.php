<?php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    { 
        $message  = ' Le test est bon ';
        $text = ' abalo et afi http://yahoo.fr; https://gmail.fr';
        $antispam = $this->container->get('sdz_blog.antispam');
        
        //Je pars du princpe que $text contient le text d'un message quelconque
        
        if ($antispam->isSpam($text))
        {
            throw new \Exception('Votre message a été détecté comme spam!  ');
        }
        
        
        return $this->render('BlogBundle:Blog:index.html.twig', array('message' => $message ));
        
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
