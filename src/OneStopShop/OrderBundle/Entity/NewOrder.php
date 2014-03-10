<?php

namespace OneStopShop\OrderBundle\Entity;

use OneStopShop\DatabaseBundle\Entity\Orders;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * NewOrder
 */
class NewOrder
{
    /**
     * @var OneStopShop\DatabaseBundle\Entity\Orders
     */
    private $order;

    /**
     * @var string
     * @Assert\Choice(choices = {"Large Order", "Mail Order",  "Retail Order"}, message = "Choose a valid order type")
     */
    private $orderType;

    /**
     * @var string
     * @Assert\Choice(choices = {"Cash",  "Credit"}, message = "Choose a valid payment method")
     */
    private $paymentType;

    /**
     * @var int
     */
    private $cid;

    /**
     * Get Order
     *
     * @return OneStopShop\DatabaseBundle\Entity\Orders;
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set order
     *
     * @param OneStopShop\DatabaseBundle\Entity\Orders $order
     * @return NewOrder
     */
    public function setOrder($order)
    {
        $this->order = $order;
    
        return $this;
    }

    /**
     * Get orderType
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Set orderType
     *
     * @param string $orderType
     * @return NewOrder
     */
    public function setOrderType($orderType)
    {
        $this->order = $orderType;
    
        return $this;
    }

    
    /**
     * Get paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set paymentType
     *
     * @param string $paymentType
     * @return NewOrder
     */
    public function setPaymentType($paymentType)
    {
        $this->payment= $paymentType;
    
        return $this;
    }
    
    
    /**
     * Get cid
     *
     * @return int
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set cid
     *
     * @param int $cid
     * @return NewOrder
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
    
        return $this;
    }
}
