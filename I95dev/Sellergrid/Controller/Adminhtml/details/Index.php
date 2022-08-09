<?php

namespace I95dev\Sellergrid\Controller\Adminhtml\details;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Index extends Action implements HttpGetActionInterface
{
    
    private $pageFactory;

   
    public function __construct(
        Context $context,
        PageFactory $rawFactory
    ) {
        $this->pageFactory = $rawFactory;

        parent::__construct($context);
    }

   
    public function execute(): Page
    {
        $resultPage = $this->pageFactory->create();
        $resultPage->setActiveMenu('I95dev_Sellergrid::Seller_details');
        $resultPage->getConfig()->getTitle()->prepend(__('Admin Grid '));

        return $resultPage;
    }
}
