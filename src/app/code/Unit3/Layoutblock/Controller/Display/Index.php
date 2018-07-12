<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit3\Layoutblock\Controller\Display;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    
    private $pageFactory;
    
    public function __construct(\Magento\Framework\App\Action\Context $context,
                    \Magento\Framework\View\Result\PageFactory $pageFactory) {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $result;
    }
    
}


