<?php

namespace OneStopShop\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerContacts
 */
class CustomerContacts
{
    /**
     * @var string
     */
    private $contactNo;

    /**
     * @var \OneStopShop\DatabaseBundle\Entity\Customers
     */
    private $cid;


    /**
     * Get contactNo
     *
     * @return string 
     */
    public function getContactNo()
    {
        return $this->contactNo;
    }

    /**
     * Set cid
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Customers $cid
     * @return CustomerContacts
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
