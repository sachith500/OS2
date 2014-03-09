<?php

namespace OneStopShop\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VipOrders
 */
class VipOrders
{
    /**
     * @var \OneStopShop\DatabaseBundle\Entity\Orders
     */
    private $orderNo;

    /**
     * @var \OneStopShop\DatabaseBundle\Entity\VipCustomers
     */
    private $cid;


    /**
     * Set orderNo
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Orders $orderNo
     * @return VipOrders
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
     * Set cid
     *
     * @param \OneStopShop\DatabaseBundle\Entity\VipCustomers $cid
     * @return VipOrders
     */
    public function setCid(\OneStopShop\DatabaseBundle\Entity\VipCustomers $cid = null)
    {
        $this->cid = $cid;
    
        return $this;
    }

    /**
     * Get cid
     *
     * @return \OneStopShop\DatabaseBundle\Entity\VipCustomers 
     */
    public function getCid()
    {
        return $this->cid;
    }
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}