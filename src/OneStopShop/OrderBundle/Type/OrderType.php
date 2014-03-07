<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Composite model for Form combining Order, Item and Customer Entities 
 *
 * @author Sachini
 */
class OrderType {
  /* @var OneStopShop\DatabaseBundle\Entity\Customers */
  public $customer;
 
  /* @var OneStopShop\DatabaseBundle\Entity\Orders */
  public $order;
  
  /**
    * @var string
    */
  public $cid;
  
  /**
   * @Assert\Choice(choices = {"Large Order", "Mail Order", "Retail Order"}, message = "Choose a valid category.")
   */
  public $type;
  
  
  
}

?>
