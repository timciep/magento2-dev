<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit2\Pageexample\Controller\Display;

use Magento\Framework\Controller\ResultFactory;

class Page extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
      //  echo "hello"; exit;
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
    
}

