<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit5\Systemconfig\Controller\Get;

class Pword extends \Magento\Framework\App\Action\Action
{
    
    protected $scopeConfig;
    
    /**
     * @var \Magento\Framework\Encryption\EncryptorInterface
     */
    protected $encryptor;


    public function __construct(\Magento\Framework\App\Action\Context $context,
            \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
            \Magento\Framework\Encryption\EncryptorInterface $encryptor) {
        $this->scopeConfig = $scopeConfig;
        $this->encryptor = $encryptor;
        parent::__construct($context);
    }
    

    public function execute()
    {
       $pass = $this->scopeConfig->getValue('customer/unit5/password', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        
        echo $this->encryptor->decrypt($pass); exit;
    }
    
}

