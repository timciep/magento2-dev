<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit3\Textblock\Controller\Textblock;

use Magento\Framework\Controller\ResultFactory;

class Display extends \Magento\Framework\App\Action\Action
{
    
    private $pageFactory;
    
    public function __construct(\Magento\Framework\App\Action\Context $context,
                    \Magento\Framework\View\Result\PageFactory $pageFactory) {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $block = $this->pageFactory->create()->getLayout()->createBlock('Magento\Framework\View\Element\Text');
        $block->setText('My Unit3 text!');
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents($block->toHtml());
        return $result;
    }
    
}

