<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace OneStopShop\CustomerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CustomerType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder->add('cid', 'text', array('label' => 'ID', 'max_length' => 50))
                ->add('firstName', 'text', array('label' => 'First Name', 'max_length' => 50))
                ->add('middleName', 'text', array('label' => 'Middle Name', 'max_length' => 50))
                ->add('lastName', 'text', array('label' => 'Last Name', 'max_length' => 50))
                ->add('poBox', 'text', array('label' => 'P.O. Box', 'max_length' => 50))
                ->add('street', 'text', array('label' => 'Street', 'max_length' => 50))
                ->add('city', 'text', array('label' => 'City', 'max_length' => 50))
                ->add('submit', 'submit')
                ->add('reset', 'reset');
    }

    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver) {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array(
            'data_class' => 'OneStopShop\DatabaseBundle\Entity\Customers',
            'cascade_validation' => true
        ));
    }

public function getName(){
    return 'customer';
}
    

}
