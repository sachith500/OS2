<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace OneStopShop\ItemBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ItemPriceType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder->add('price', 'money', array('currency' => 'LKR'))
                ->add('startDate', 'date', array(
                    'years'=>  range(2000, 9999)
                    ));
   
    }

    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver) {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array(
            'data_class' => 'OneStopShop\DatabaseBundle\Entity\ItemPrices'
        ));
    }

    public function getName() {
        return 'itemPrice';
    }

}
