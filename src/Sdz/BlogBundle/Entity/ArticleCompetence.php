<?php
namespace Sdz\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


class ArticleCompetence
{
    /**
     *@ORM\Id
     *@ORM\ManyToOne(targetEntity="Sdz\BlogBundle\Entity\Article")
     */
    private $article;
}
