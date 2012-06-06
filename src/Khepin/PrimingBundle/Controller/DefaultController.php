<?php

namespace Khepin\PrimingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/posts")
     * @Template()
     */
    public function indexAction()
    {
        $dm = $this->get('doctrine.odm.mongodb.document_manager');
        $qb = $dm->createQueryBuilder('KhepinPrimingBundle:BlogPost')
                ->field('comments')->prime(true)->limit(200)
            ;
        $posts = $qb->getQuery()->execute();

        return array('posts' => $posts);
    }
}
