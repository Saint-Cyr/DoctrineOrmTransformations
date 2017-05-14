<?php

namespace SaintCyr\DoctrineOrmTransformationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SaintCyrDoctrineOrmTransformationsBundle:Default:index.html.twig');
    }
}
