<?php

namespace Unit4\Setupscripts\Controller\Repositoryexample;

use Magento\Framework\Controller\ResultFactory;

class Load extends \Magento\Framework\App\Action\Action
{
    
    private $petInterface;
    
    public function __construct(\Magento\Framework\App\Action\Context $context,
                    \Unit4\Setupscripts\Api\PetRepositoryInterface $petInterface) {
        $this->petInterface = $petInterface;
        parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        
        $petName = $this->petInterface->getByPetId($id)->getPetName();
        
        echo $petName;
        
    }
    
}


