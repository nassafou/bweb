<?php

namespace Sdz\BlogBundle\Antispam;


class SdzAntispam
{
    /**
    * Vérifie si le texte est un spam ou non
    * Un texte est considéré comme spam à partir de 3 liens
    * ou adresses e-mail dans son contenu
    *
    * @param string $text
    */

    public function isSpam($text)
    {
        return ($this->countLinks($text) + $this->countMails($text)) >= 3;
    
    }
}