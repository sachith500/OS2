<?php

namespace OneStopShop\BusinessBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OneStopShopBusinessBundle:Default:index.html.twig', array('name' => $name));
    }
}
