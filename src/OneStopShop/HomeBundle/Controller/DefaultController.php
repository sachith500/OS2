<?php

namespace OneStopShop\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OneStopShopHomeBundle:Default:index.html.twig', array('name' => $name));
    }
}
