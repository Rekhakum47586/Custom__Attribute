<?php

namespace I95dev\Sellergrid\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;

class Sellerdetails extends Template
{
    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function getFormAction()
    {
        return $this->getUrl('seller/index/save', ['_secure' => true]);
    }
}
