<?php

namespace I95dev\Sellergrid\Model;

use I95dev\Sellergrid\Api\Data\SellerdetailsInterface;
use I95dev\Sellergrid\Model\ResourceModel\Sellerdetails as Sellerdetailsresource;

class Sellerdetails extends \Magento\Framework\Model\AbstractModel implements SellerdetailsInterface
{

    const CACHE_TAG = 'Seller_details';


    protected $_cacheTag = 'Seller_details';

    protected $_idFieldName = 'id';


    protected $_eventPrefix = 'Seller_details';


    protected function _construct()
    {
        $this->_init(Sellerdetailsresource::class);
    }

    public function getId()
    {
        return $this->getData(self::ENTITY_ID);
    }


    public function setId($Id)
    {
        return $this->setData(self::ENTITY_ID, $Id);
    }

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getFirst_name()
    {
        return $this->getData(self::FIRST_NAME);
    }

    /**
     * Set Title.
     */
    public function setFirst_name($first_name)
    {
        return $this->setData(self::FIRST_NAME, $first_name);
    }

    /**
     * Get getContent.
     *
     * @return varchar
     */
    public function getLast_name()
    {
        return $this->getData(self::LAST_NAME);
    }


    public function setLast_name($last_name)
    {
        return $this->setData(self::LAST_NAME, $last_name);
    }


    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }


    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }


    public function getPhone()
    {
        return $this->getData(self::PHONE);
    }


    public function setPhone($phone)
    {
        return $this->setData(self::PHONE, $phone);
    }


}

