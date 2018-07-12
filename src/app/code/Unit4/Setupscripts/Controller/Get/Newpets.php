<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit4\Setupscripts\Controller\Get;

use Magento\Framework\Controller\ResultFactory;

class Newpets extends \Magento\Framework\App\Action\Action
{
    
    private $petCollectionFactory;
    
    public function __construct(\Magento\Framework\App\Action\Context $context,
                    \Unit4\Setupscripts\Model\ResourceModel\Pet\CollectionFactory $petCollectionFactory
                    ) {
        $this->petCollectionFactory = $petCollectionFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        
        $collection = $this->petCollectionFactory->create();
        
        $collection->setOrder('created_at', 'desc');
        
        $collection->setPageSize(5);
        $collection->setCurPage(0);
        
        foreach ($collection as $pet) {
            echo "<p>";
            echo $pet->getPetName() . " - " . $pet->getCreatedAt();
            echo "</p>";
        }
        
        exit;
        
    }
    
}


