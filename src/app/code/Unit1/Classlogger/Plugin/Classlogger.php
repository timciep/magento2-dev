<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit1\Classlogger\Plugin;

class Classlogger
{
    /**
     * @var LoggerInterface
     */
    private $logger;
    
    public function __construct(\Psr\Log\LoggerInterface $logger) {
        $this->logger = $logger;
    }

    public function afterDispatch($subject, $result)
    {
        $this->logger->info("Plugin logging action name:");
        $this->logger->info($subject->getRequest()->getFullActionName());
        return $result;
    }
    
}
