<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit4\Setupscripts\Controller\Create;

use Magento\Framework\Controller\ResultFactory;

class Newpet extends \Magento\Framework\App\Action\Action
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
        $customer = $this->getRequest()->getParam('customer');
        $name = $this->getRequest()->getParam('name');
        $type = $this->getRequest()->getParam('type');
        
        if (!$customer || !$name || !$type) {
            echo "must include all params"; exit;
        }
        
        $pet = $this->petFactory->create();
        
        $pet->setCustomerId($customer);
        $pet->setPetName($name);
        $pet->setPetType($type);
        
        if ($pet->isSaveAllowed()) {
            $this->petResource->save($pet);
            echo "created new pet: " . $name; exit;
        } else {
            echo "cannot save new pet!"; exit;
        }
        
        
    }
    
}



