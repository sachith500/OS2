<?php

namespace OneStopShop\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MoCustomers
 */
class MoCustomers
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $trn;

    /**
     * @var \OneStopShop\DatabaseBundle\Entity\Customers
     */
    private $cid;


    /**
     * Set email
     *
     * @param string $email
     * @return MoCustomers
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set trn
     *
     * @param string $trn
     * @return MoCustomers
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
     * Set cid
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Customers $cid
     * @return MoCustomers
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
}
