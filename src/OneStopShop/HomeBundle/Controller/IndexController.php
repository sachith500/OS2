<?php

namespace OneStopShop\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('OneStopShopHomeBundle:Index:index.html.twig');
    }

    public function loginAction()
    {
    }

}
