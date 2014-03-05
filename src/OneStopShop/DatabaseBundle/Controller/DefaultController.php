<?php

namespace OneStopShop\DatabaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OneStopShopDatabaseBundle:Default:index.html.twig', array('name' => $name));
    }
}
