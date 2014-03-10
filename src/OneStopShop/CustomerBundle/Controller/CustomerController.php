<?php

namespace OneStopShop\CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use OneStopShop\DatabaseBundle\Entity\Customers;
//use OneStopShop\DatabaseBundle\Entity\ItemPrices;

class CustomerController extends Controller
{
    public function addCustomerAction(Request $request)
    {
        $customer  = new Customers();
        $form = $this->createForm('customer',$customer);
        $form->handleRequest($request);
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();
            
            return $this->redirect($this->generateUrl('index'));
        }
        
        return $this->render('OneStopShopCustomerBundle:Customer:addCustomer.html.twig',array('form'=>$form->createView()));
    }
}
