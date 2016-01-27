<?php
namespace Sdz\BlogBundle\Beta;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;


class BetaListener
{
    // la date de fin de la version beta
    //-Avant cette date on affichera un compte a rebours (J-3 par exemple)
    //- Apres cette date, on n'affichera plus le <<beta>>
    
    protected $dateFin;
    
    public function __construct($dateFin)
    {
        $this->dateFin = new \DateTime($dateFin);
    }
    
    
    public function onKernelResponse(FilterResponseEvent $event)
    {
        //On test si la requete est bien la requete princpale
        if(HttpKernelInterface::MASTER_REQUEST !== $event->getRequestType())
        {
            return;
        }
        
        // on récupere la réponse que le noyau a inserré dans l'évenement
        $response  = $event->getresponse();
        
        // Ici on modifie comme on veut la réponse
        $joursRestant = $this->dateFin->diff(new \DateTime())->days;
        
        if($joursRestant > 0 ){
            //On utilise notre methode <<reine>>
            $response = $this->displayBeta($event->getResponse(), $joursRestant);
        }
        
        //Puis on insere la réponse modifieé danss l'évenement
        $event->setResponse($response);
        
    }
    
    // Methode pour ajouter beta a une réponse
    
    protected function displayBeta(Response $response, $joursRestant)
    {
        $content = $response->getContent();
        
        //Code à rajouter
         $html = '<span style="color: red; font-size: 0.5em;"> - Beta J-'.(int) $joursRestant.' !</span>';
    
    // Insertion du code dans la page, dans le <h1> du header
    
    $content = preg_replace('#<h1>(.*?)</h1>#iU',
                            '<h1>$1'.$html.'</h1>',
                             $content,
                             1);
    
    // Modification du contenu dans la réponse
    $response->setContent($content);
    
    
    return $response;
    
    }
    
    
}

