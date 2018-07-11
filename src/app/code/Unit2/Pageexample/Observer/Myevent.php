<?php

namespace Unit2\Pageexample\Observer;

use Magento\Framework\Event\ObserverInterface;

class Myevent implements ObserverInterface{
    
    public function execute(\Magento\Framework\Event\Observer $observer) {
        echo "caught event"; exit;
    }
}
