<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit4\Setupscripts\Controller\Get;

use Magento\Framework\Controller\ResultFactory;

class Name extends \Magento\Framework\App\Action\Action
{
    
    private $pageFactory;
    private $petFactory;
    private $petResource;
    
    public function __construct(\Magento\Framework\App\Action\Context $context,
                    \Magento\Framework\View\Result\PageFactory $pageFactory,
                    \Unit4\Setupscripts\Model\PetFactory $petFactory,
                    \Unit4\Setupscripts\Model\ResourceModel\Pet $petResource) {
        $this->pageFactory = $pageFactory;
        $this->petFactory = $petFactory;
        $this->petResource = $petResource;
        parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        
        $pet = $this->petFactory->create();
        
        $this->petResource->load($pet, $id);
        
        $name = $pet->getPetName();
        
        
        $block = $this->pageFactory->create()->getLayout()->createBlock('Magento\Framework\View\Element\Text');
        $block->setText('Name is: ' . $name);
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents($block->toHtml());
        return $result;
    }
    
}

