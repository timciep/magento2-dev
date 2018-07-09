<?php

namespace Unit1\Eventlogger\Observer;

use Magento\Framework\Event\ObserverInterface;

class Myevent implements ObserverInterface{
    
    /**
     * @var LoggerInterface
     */
    private $logger;
    
    public function __construct(\Psr\Log\LoggerInterface $logger) {
        $this->logger = $logger;
    }

    public function execute(\Magento\Framework\Event\Observer $observer) {
        $request = $observer['request'];
        
        $this->logger->info("Event logging Action Name:");
        $this->logger->info($request->getFullActionName());
    }
}
