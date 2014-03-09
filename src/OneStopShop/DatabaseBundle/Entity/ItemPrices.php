<?php

namespace OneStopShop\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * ItemPrices
 */
class ItemPrices
{

    /**
     * @var integer
     */
    private $price;

    /**
     * @var \OneStopShop\DatabaseBundle\Entity\Items
     */
    private $itemNo;



    /**
     * Set price
     *
     * @param integer $price
     * @return ItemPrices
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set itemNo
     *
     * @param \OneStopShop\DatabaseBundle\Entity\Items $itemNo
     * @return ItemPrices
     */
    public function setItemNo(\OneStopShop\DatabaseBundle\Entity\Items $itemNo = null)
    {
        $this->itemNo = $itemNo;
    
        return $this;
    }

    /**
     * Get itemNo
     *
     * @return \OneStopShop\DatabaseBundle\Entity\Items 
     */
    public function getItemNo()
    {
        return $this->itemNo;
    }
    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return ItemPrices
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
    
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return ItemPrices
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
    
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
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
}