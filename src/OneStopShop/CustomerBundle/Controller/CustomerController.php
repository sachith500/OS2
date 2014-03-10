<?php

namespace OneStopShop\CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CustomerController extends Controller
{
    public function addCustomerAction(Request $request)
    {
        $customer  = new Customers();
        //$type = new ItemPrices();
        $form = $this->createForm('customer',$customer);
        $form->handleRequest($request);
        
        if($form->isValid()){
            $em->persist($customer);
           // $em->persist($price);
            $em->flush();
            
            return $this->redirect($this->generateUrl('index'));
        }
        
        return $this->render('OneStopShopItemBundle:Item:addItem.html.twig',array('form'=>$form->createView()));
    }
}
