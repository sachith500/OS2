<?php

namespace OneStopShop\ItemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OneStopShopItemBundle:Default:index.html.twig', array('name' => $name));
    }
}
