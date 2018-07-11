<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit2\Pageexample\Controller\Json;

use Magento\Framework\Controller\ResultFactory;

class Forward extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_FORWARD);
        
        $result->forward('index');
        
        return $result;
    }
    
}



