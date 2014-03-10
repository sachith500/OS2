<?php

namespace OneStopShop\ItemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use OneStopShop\DatabaseBundle\Entity\Items;
use OneStopShop\DatabaseBundle\Entity\ItemPrices;


class ItemController extends Controller
{
    public function addItemAction(Request $request)
    {
        $item  = new Items();
        $price = new ItemPrices();
        $form = $this->createForm('item',$item);
        $form->handleRequest($request);
        
        if($form->isValid()){
            $price = $item->getItemPrice();
            $price->setStartDate(new \DateTime());
            $price->setEndDate(new \DateTime("9999-12-31"));
            $price->setItemNo($item);
            $em = $this->getDoctrine()->getManager();
            $em->persist($item);
            $em->persist($price);
            $em->flush();
            
            return $this->redirect($this->generateUrl('index'));
        }
        
        return $this->render('OneStopShopItemBundle:Item:addItem.html.twig',array('form'=>$form->createView()));
    }

    public function removeItemAction()
    {
    }

    public function indexAction()
    {
    }
    
    public function searchItemAction(Request $request){
       
        
        $form = $this->createFormBuilder()
                ->add('itemName','text')
                ->add('find','submit');
        
        return $this->render('OneStopShopItemBundle:Item:searchItem.html.twig');
    }
}
