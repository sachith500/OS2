<?php

namespace OneStopShop\BusinessBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OneStopShop\DatabaseBundle\Businesses;
use Symfony\Component\HttpFoundation\Request;

class BusinessController extends Controller {

    public function addBusinessAction(Request $request) {
        $business = new \OneStopShop\DatabaseBundle\Entity\Businesses();

        $form = $this->createFormBuilder($business)
                ->add('brn', 'text')
                ->add('name', 'text')
                ->add('add', 'submit')
                ->getForm();
 $form->handleRequest($request);
        if ($form->isValid()) {
            $business = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($business);
            $em->flush();

            return $this->redirect($this->generateUrl('index'));
        }

        return $this->render('OneStopShopBusinessBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

}
