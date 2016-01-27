<?php

namespace Sdz\BlogBundle\Bigbrother;
use Symfony\Component\EventDispatcher\Event;

class MessagePostEvent extends Event
{
  protected $message;
  protected $user;
  protected $autorise;
  
  public function __construct($message, UserInterface $user)
  {
    $this->message = $message;
    $this->user    = $user; 
  }
  
  
  //Le listener doit avoir acces aux message
  public function getMessage()
  {
    return $this->message;
  }
  
  //Le listener doit pouvoir modifier le message
  public function setMessage($message)
  {
    return $this->message = $message;
  }
  
  // Le listener doit avoir acces à l'utilisateur
  public function getUser()
  {
    return $this->user;
  }
  
  // Pas de setUser, le listener ne peut pas modifier l'auteur du message
  
  
  

}