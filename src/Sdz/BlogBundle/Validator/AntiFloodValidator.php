<?php
namespace Sdz\BlogBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;

class AntiFloodValidator extends ConstraintValidator
{
    private $request;
    private $em;
    
    // Les arguments déclarés dans la définition du service arrivent au controleur
    // on doit les enregistrer dans l'objet pour pouvoir s'enreservir dans la methode validate()
    public function __construct(Request $request, EntityManager $em )
    {
        $this->request = $request;
        $this->em      = $em;
    }
    public function validate($value, Constraint $constraint )
    {
        // On requere l'Ip de celui qui poste
        $ip = $this->request->server->get('REMOTE_ADDR');
        
        // On vérifie si cette IP a déja posté un message il y a moins de 15 secondes
        
        $isFlood = $this->em->getRepository('BlogBundle:Commentaire')
                            ->isFlood($ip, 15); // Bien entendu, il faudrait écrire cette methode isFlood, c'est pour l'exemple
                            
        
        // Pour l'instant on considere comme flood tout message moins de 3 caractères
        if(strlen($value) < 3 && isFlood)
        {
            // c'est cette ligne qui déclenche l'erreur pour le formulaire, avec en argument le message
            
            $this->context->addViolation($constraint->message);
        }
    }
    
    public function isFlood($ip, $nbseconde)
    {
        
    }
    
}


