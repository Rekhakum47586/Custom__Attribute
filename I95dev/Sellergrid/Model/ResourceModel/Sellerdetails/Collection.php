<?php


namespace I95dev\Sellergrid\Model\ResourceModel\Sellerdetails;
use I95dev\Sellergrid\Model\Sellerdetails;
use I95dev\Sellergrid\Model\ResourceModel\Sellerdetails as Sellerdetailsresource;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
   
    protected $_idFieldName = 'id';
    protected $_previewFlag;
    
    protected function __construct()
    {
    parent::_construct();
    
    $this->_init(Sellerdetails::class, Sellerdetailsresource::class);
    $this->_map['fields']['id'] = 'main_table.id';
       
    }
}


