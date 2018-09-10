<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit2\Pageexample\Controller\Display;

use Magento\Framework\Controller\ResultFactory;

class Raw extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
      //  echo "hello"; exit;
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents("This is my RAW text");
        return $result;
    }
    
}

