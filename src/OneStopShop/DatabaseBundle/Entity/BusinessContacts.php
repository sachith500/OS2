<?php

namespace OneStopShop\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BusinessContacts
 */
class BusinessContacts
{
    /**
     * @var string
     */
    private $contactNo;

    /**
     * @var \OneStopShop\DatabaseBundle\Entity\Businesses
     */
    private $brn;


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
     * Set brn
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Businesses $brn
     * @return BusinessContacts
     */
    public function setBrn(\OneStopShop\DatabaseBundle\Entity\Businesses $brn = null)
    {
        $this->brn = $brn;
    
        return $this;
    }

    /**
     * Get brn
     *
     * @return \OneStopShop\DatabaseBundle\Entity\Businesses 
     */
    public function getBrn()
    {
        return $this->brn;
    }
}
