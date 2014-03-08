<?php

namespace OneStopShop\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 */
class Items
{
    /**
     * @var string
     */
    private $itemNo;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orderNo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderNo = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get itemNo
     *
     * @return string 
     */
    public function getItemNo()
    {
        return $this->itemNo;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Items
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add orderNo
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Orders $orderNo
     * @return Items
     */
    public function addOrderNo(\OneStopShop\DatabaseBundle\Entity\Orders $orderNo)
    {
        $this->orderNo[] = $orderNo;
    
        return $this;
    }

    /**
     * Remove orderNo
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Orders $orderNo
     */
    public function removeOrderNo(\OneStopShop\DatabaseBundle\Entity\Orders $orderNo)
    {
        $this->orderNo->removeElement($orderNo);
    }

    /**
     * Get orderNo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }
    /**
     * @var string
     */
    private $name;


    /**
     * Set name
     *
     * @param string $name
     * @return Items
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
     * Set itemNo
     *
     * @param integer $itemNo
     * @return Items
     */
    public function setItemNo($itemNo)
    {
        $this->itemNo = $itemNo;
    
        return $this;
    }
}