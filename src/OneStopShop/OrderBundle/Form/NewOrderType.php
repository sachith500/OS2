<?php

namespace OneStopShop\OrderBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use OneStopShop\DatabaseBundle\Form\OrdersType;

class NewOrderType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('order', new OrdersType())
            ->add('orderType', 'choice', array(
                'choices'   => array('Large Order'=>'Large Order', 'Mail Order'=>'Mail Order',  'Retail Order'=>  'Retail Order'),
                'required'  => true,))
            ->add('paymentType','choice', array(
                'choices'   => array(
                    'Cash'=>'Cash', 
                    'Credit'=>'Credit'),
                'required'  => true,
                'expanded'=>true
                ))
            ->add('cid');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OneStopShop\OrderBundle\Entity\NewOrder'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'onestopshop_orderbundle_newordertype';
    }
}


?>

