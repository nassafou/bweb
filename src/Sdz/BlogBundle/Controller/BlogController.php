<?php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sdz\BlogBundle\Form\ArticleType;

use Sdz\BlogBundle\Entity\Article;

class BlogController extends Controller
{
    public function indexAction()
    {
        
    }
    
    public function ajouterAction()
    {
        
        $message = '';
        // entity
        $em = $this->getDoctrine()->getManager();
        
        // objet
        $article = new Article();
        
        
        //form
        $form = $this->createForm(new ArticleType, $article );
        
        $request = $this->get('request');
        
        // condition de validation
        
        if($request->getMethod() == 'POST')
        {
            // lier le formulaire et la requete
            $form->bind($request);
            
            // vérification de la validité des données
            
            if($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                $em->flush();
                
                $message = 'Article bien enrégistré';
                
                return $this->render('BlogBundle:Blog:ajouter.html.twig', array('message' => $message,
                                                                                'form' => $form->createView()));
                
            }
            
        }
        
        return $this->render('BlogBundle:Blog:ajouter.html.twig', array('form' => $form->createView(),
                                                                        'message' => $message));
        
        
        
        
        
        
    }
    
    public function modifierAction($id)
    {
        $message = '';
        // entity
        $em = $this->getDoctrine()->getManager();
        
        // objet
        $article = new Article();
        
        
        //form
        $form = $this->createForm(new ArticleType, $article );
        
        $repository = $this->getRepository('BlogBundle:Article')
                           ->find($i);
        
        // condition de validation
        
        if($request->getMethod() == 'POST')
        {
            // lier le formulaire et la requete
            $form->bind($request);
            
            // vérification de la validité des données
            
            if($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                $em->flush();
                
                $message = 'Article bien enrégistré';
                
                return $this->render('BlogBundle:Blog:ajouter.html.twig', array('message' => $message,
                                                                                'form' => $form->createView()));
                
            }
            
        }
        
        return $this->render('BlogBundle:Blog:ajouter.html.twig', array('form' => $form->createView(),
        
        
        
    }
    
    public function voirAction($id)
    {
        
        
    }
    
    public function supprimerAction()
    {
        
    }
    
    
    
    
}