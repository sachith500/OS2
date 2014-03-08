<?php

namespace OneStopShop\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsrContacts
 */
class PsrContacts
{
    /**
     * @var string
     */
    private $contactNo;

    /**
     * @var \OneStopShop\DatabaseBundle\Entity\Psrs
     */
    private $emp;


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
     * Set emp
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Psrs $emp
     * @return PsrContacts
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

    /**
     * Set contactNo
     *
     * @param string $contactNo
     * @return PsrContacts
     */
    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;
    
        return $this;
    }
}