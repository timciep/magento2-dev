<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit6\Materials\Model\Attribute\Source;

class Clothingmaterial extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource {
    
    private $materialFactory;
    
    public function __construct(\Unit6\Materials\Model\ResourceModel\Clothingmaterial\CollectionFactory $materialFactory) {
        $this->materialFactory = $materialFactory;
    }
    
    public function getAllOptions()
    {
        
        $collection = $this->materialFactory->create();
        $optArray = array();
        
        $optArray[] = ['label' => '--- Select a material ---', 'value' => '0'];
        
        foreach ($collection as $_mat) {
            $optArray[] = ['label' => $_mat->getMaterial(), 'value' => $_mat->getMaterialId()];
        }
        
        return $optArray;
    }

}
