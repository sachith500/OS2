<?php

namespace OneStopShop\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 */
class Orders
{
    /**
     * @var string
     */
    private $orderNo;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $itemNo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->itemNo = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get orderNo
     *
     * @return string 
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Orders
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Add itemNo
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Items $itemNo
     * @return Orders
     */
    public function addItemNo(\OneStopShop\DatabaseBundle\Entity\Items $itemNo)
    {
        $this->itemNo[] = $itemNo;
    
        return $this;
    }

    /**
     * Remove itemNo
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Items $itemNo
     */
    public function removeItemNo(\OneStopShop\DatabaseBundle\Entity\Items $itemNo)
    {
        $this->itemNo->removeElement($itemNo);
    }

    /**
     * Get itemNo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItemNo()
    {
        return $this->itemNo;
    }
}