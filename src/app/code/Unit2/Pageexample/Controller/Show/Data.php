<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit2\Pageexample\Controller\Show;

use Magento\Framework\Controller\ResultFactory;
//use Magento\Framework\App\RequestInterface;

class Data extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
        $name = $this->getRequest()->getParam('name');
        
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents("your name: " . $name);
        return $result;
    }
    
}


