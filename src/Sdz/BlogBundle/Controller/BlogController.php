<?php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sdz\BlogBundle\Form\ArticleType;
use Sdz\BlogBundle\Entity\Image;
use Sdz\BlogBundle\Entity\Article;
use Sdz\BlogBundle\Entity\Categorie;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function indexAction($page)
    {
        if($page < 1)
        
        throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
        //entity
        $em = $this->getDoctrine()->getManager();   
        //$article = new Article();
        $article  = $em->getRepository('BlogBundle:Article')
                       ->getArticles(3, $page);
        return $this->render('BlogBundle:Blog:index.html.twig', array( 'article' => $article,
                                                                        'page'   => $page,
                                                                    'nombrePage' => ceil(count($article)/3)
                                                                      
                                                                      ));
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
        if($id === null )
        {
            throw NotFoundHttpException('Article non trouvé ');
        }
        $message = '';
        // entity
        $em = $this->getDoctrine()->getManager();
        // objet
         $article = $em->getRepository('BlogBundle:Article')->find($id);
        //$article = new Article();   
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
                return $this->redirect(generateUrl('BlogBundle:Blog:ajouter.html.twig', array('message' => $message,
                                                                                'form' => $form->createView(),
                                                                                'article' => $article)));
            }
        }
        return $this->render('BlogBundle:Blog:modifier.html.twig', array('article' => $article,
                                                                         'form' => $form->createView(),
                                                                         ));
    }
    public function voirAction($id)
    {
       //entity
        $em = $this->getDoctrine()->getManager();    
        // objet
        //$article = new Article();
        //repository
        $article = $em->getRepository('BlogBundle:Article')->find($id);
        if($article === null  )
        {
            throw NotFoundHttpException('Article non retrouvé ');
        }
        return $this->render('BlogBundle:Blog:voir.html.twig', array('article' => $article
                                                                      ));    
    }
    
    public function formulaireAction()
    {
        $article = new Article();   
        $form = $this->createForm(new ArticleType(), $article );
        return $this->render('BlogBundle:Blog:formulaire.html.twig', array('form' => $form->createView()));
        
        
    }
    
    public function supprimerAction()
    {
        
    }
    
    public function menuAction($nombre)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('BlogBundle:Article')->rfind();
        return $this->render('BlogBundle:Blog:menu.html.twig', array('listes_articles' => $article));
    }
    
    public function traductionAction($name)
    {
        return $this->render('BlogBundle:Blog:traduction.html.twig', array('name' => $name ));
    }
    
}