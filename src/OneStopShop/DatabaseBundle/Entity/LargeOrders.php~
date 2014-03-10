<?php

namespace OneStopShop\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LargeOrders
 */
class LargeOrders
{
    /**
     * @var \OneStopShop\DatabaseBundle\Entity\Orders
     */
    private $orderNo;

    /**
     * @var \OneStopShop\DatabaseBundle\Entity\LOCustomers
     */
    private $cid;


    /**
     * Set orderNo
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Orders $orderNo
     * @return LargeOrders
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
     * @param \OneStopShop\DatabaseBundle\Entity\LOCustomers $cid
     * @return LargeOrders
     */
    public function setCid(\OneStopShop\DatabaseBundle\Entity\LOCustomers $cid = null)
    {
        $this->cid = $cid;
    
        return $this;
    }

    /**
     * Get cid
     *
     * @return \OneStopShop\DatabaseBundle\Entity\LOCustomers 
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