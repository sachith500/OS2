<?php

namespace OneStopShop\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LOCustomers
 */
class LOCustomers
{
    /**
     * @var integer
     */
    private $creditLimit;

    /**
     * @var string
     */
    private $brn;

    /**
     * @var \OneStopShop\DatabaseBundle\Entity\Customers
     */
    private $cid;


    /**
     * Set creditLimit
     *
     * @param integer $creditLimit
     * @return LOCustomers
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
     * Set brn
     *
     * @param string $brn
     * @return LOCustomers
     */
    public function setBrn($brn)
    {
        $this->brn = $brn;
    
        return $this;
    }

    /**
     * Get brn
     *
     * @return string 
     */
    public function getBrn()
    {
        return $this->brn;
    }

    /**
     * Set cid
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Customers $cid
     * @return LOCustomers
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
     * @return LOCustomers
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
    /**
     * @var \OneStopShop\DatabaseBundle\Entity\Psrs
     */
    private $emp;


    /**
     * Set emp
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Psrs $emp
     * @return LOCustomers
     */
    public function setEmp(\OneStopShop\DatabaseBundle\Entity\Psrs $emp = null)
    {
        $this->emp = $emp;
    
        return $this;
    }

    /**
     * Get emp
     *
     * @return \OneStopShop\DatabaseBundle\Entity\Psrs 
     */
    public function getEmp()
    {
        return $this->emp;
    }
}