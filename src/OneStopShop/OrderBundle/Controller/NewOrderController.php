<?php
namespace OneStopShop\OrderBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OneStopShop\OrderBundle\Entity\NewOrder;
use OneStopShop\OrderBundle\Form\NewOrderType;

/**
 * NewOrder controller.
 *
 */
class NewOrderController extends Controller
{

    /**
     * Displays a form to create a new Order entity.
     *
     */
    public function indexAction()
    {
        $entity = new NewOrder();
        $form   = $this->createForm(new NewOrderType(), $entity);

        return $this->render('OneStopShopOrderBundle:NewOrder:index.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));    
     
    }
    /**
     * Creates a new Order entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new NewOrder();
        $form = $this->createForm(new NewOrderType(), $entity);
        $form->submit($request);

        if ($form->isValid()) {
            echo 'valid form';
            return $this->render('OneStopShopOrderBundle:Default:index.html.twig');
        }

        echo 'invalid';
        return $this->render('OneStopShopOrderBundle:NewOrder:index.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }



    /**
     * Finds and displays a Grades entity.
     *
     */
   /* public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeDemoBundle:Grades')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Grades entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeDemoBundle:Grades:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Grades entity.
     *
     */
    /*public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeDemoBundle:Grades')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Grades entity.');
        }

        $editForm = $this->createForm(new GradesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeDemoBundle:Grades:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Grades entity.
     *
     */
    /*public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeDemoBundle:Grades')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Grades entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new GradesType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('grades_edit', array('id' => $id)));
        }

        return $this->render('AcmeDemoBundle:Grades:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Grades entity.
     *
     */
    /*public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeDemoBundle:Grades')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Grades entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('grades'));
    }

    /**
     * Creates a form to delete a Grades entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /*private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }*/
}
?>
