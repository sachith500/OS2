<?php

namespace OneStopShop\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemOrders
 */
class ItemOrders
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var \OneStopShop\DatabaseBundle\Entity\Orders
     */
    private $orderNo;

    /**
     * @var \OneStopShop\DatabaseBundle\Entity\Items
     */
    private $itemNo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return ItemOrders
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set orderNo
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Orders $orderNo
     * @return ItemOrders
     */
    public function setOrderNo(\OneStopShop\DatabaseBundle\Entity\Orders $orderNo = null)
    {
        $this->orderNo = $orderNo;
    
        return $this;
    }

    /**
     * Get orderNo
     *
     * @return \OneStopShop\DatabaseBundle\Entity\Orders 
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Set itemNo
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Items $itemNo
     * @return ItemOrders
     */
    public function setItemNo(\OneStopShop\DatabaseBundle\Entity\Items $itemNo = null)
    {
        $this->itemNo = $itemNo;
    
        return $this;
    }

    /**
     * Get itemNo
     *
     * @return \OneStopShop\DatabaseBundle\Entity\Items 
     */
    public function getItemNo()
    {
        return $this->itemNo;
    }
}