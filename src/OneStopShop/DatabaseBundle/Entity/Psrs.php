<?php

namespace OneStopShop\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Psrs
 */
class Psrs
{
    /**
     * @var integer
     */
    private $empId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $poBox;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $city;


    /**
     * Get empId
     *
     * @return integer 
     */
    public function getEmpId()
    {
        return $this->empId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Psrs
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set poBox
     *
     * @param string $poBox
     * @return Psrs
     */
    public function setPoBox($poBox)
    {
        $this->poBox = $poBox;
    
        return $this;
    }

    /**
     * Get poBox
     *
     * @return string 
     */
    public function getPoBox()
    {
        return $this->poBox;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Psrs
     */
    public function setStreet($street)
    {
        $this->street = $street;
    
        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Psrs
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }
}
