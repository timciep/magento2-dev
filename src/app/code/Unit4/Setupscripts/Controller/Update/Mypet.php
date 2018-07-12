<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit4\Setupscripts\Controller\Update;

use Magento\Framework\Controller\ResultFactory;

class Mypet extends \Magento\Framework\App\Action\Action
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
        $name = $this->getRequest()->getParam('name');
        
        $pet = $this->petFactory->create();
        
        $this->petResource->load($pet, $id);
        
        if (!$pet->getPetId()) {
            echo 'pet with that ID does not exist'; exit;
        }
        
        $oldName = $pet->getPetName();

        $pet->setPetName($name);
        
        $this->petResource->save($pet);
        
        echo 'changed pet ' . $oldName . ' to ' . $name; exit;

    }
    
}


