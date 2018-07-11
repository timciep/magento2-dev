<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit2\Pageexample\Controller\Redirect;

use Magento\Framework\Controller\ResultFactory;

class Raw extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $result->setPath('pageexample/display/raw');
        return $result;
    }
    
}


