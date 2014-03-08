<?php

namespace OneStopShop\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VipCustomers
 */
class VipCustomers
{
    /**
     * @var string
     */
    private $trn;

    /**
     * @var integer
     */
    private $creditLimit;

    /**
     * @var \OneStopShop\DatabaseBundle\Entity\Customers
     */
    private $cid;


    /**
     * Set trn
     *
     * @param string $trn
     * @return VipCustomers
     */
    public function setTrn($trn)
    {
        $this->trn = $trn;
    
        return $this;
    }

    /**
     * Get trn
     *
     * @return string 
     */
    public function getTrn()
    {
        return $this->trn;
    }

    /**
     * Set creditLimit
     *
     * @param integer $creditLimit
     * @return VipCustomers
     */
    public function setCreditLimit($creditLimit)
    {
        $this->creditLimit = $creditLimit;
    
        return $this;
    }

    /**
     * Get creditLimit
     *
     * @return integer 
     */
    public function getCreditLimit()
    {
        return $this->creditLimit;
    }

    /**
     * Set cid
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Customers $cid
     * @return VipCustomers
     */
    public function setCid(\OneStopShop\DatabaseBundle\Entity\Customers $cid = null)
    {
        $this->cid = $cid;
    
        return $this;
    }

    /**
     * Get cid
     *
     * @return \OneStopShop\DatabaseBundle\Entity\Customers 
     */
    public function getCid()
    {
        return $this->cid;
    }
    /**
     * @var integer
     */
    private $creditBalance;


    /**
     * Set creditBalance
     *
     * @param integer $creditBalance
     * @return VipCustomers
     */
    public function setCreditBalance($creditBalance)
    {
        $this->creditBalance = $creditBalance;
    
        return $this;
    }

    /**
     * Get creditBalance
     *
     * @return integer 
     */
    public function getCreditBalance()
    {
        return $this->creditBalance;
    }
}