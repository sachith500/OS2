<?php

namespace OneStopShop\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Businesses
 */
class Businesses
{
    /**
     * @var string
     */
    private $brn;

    /**
     * @var string
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     * @return Businesses
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
}
