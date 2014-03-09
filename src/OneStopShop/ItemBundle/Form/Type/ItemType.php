<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace OneStopShop\ItemBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class ItemType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder->add('itemNo', 'integer', array('label'=>'Item Number'))
                ->add('name', 'text', array('label'=>'Item Name','max_length'=>30))
                ->add('description', 'textarea',array('label'=>'Description','max_length'=>300))
                ->add('itemPrice',new ItemPriceType())
                ->add('submit', 'submit')
                ->add('reset', 'reset');
    }

    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver) {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array(
            'data_class' => 'OneStopShop\DatabaseBundle\Entity\Items',
            'cascade_validation'=>true
        ));
    }

    public function getName() {
        return 'item';
    }

}
