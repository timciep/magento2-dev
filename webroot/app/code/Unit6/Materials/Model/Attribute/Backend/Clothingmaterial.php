<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit6\Materials\Model\Attribute\Backend;


class Clothingmaterial extends \Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend {
    
    private $materialFactory;
    private $materialResource;
    
    public function __construct(\Unit6\Materials\Model\ClothingmaterialFactory $materialFactory,
                                                    \Unit6\Materials\Model\ResourceModel\Clothingmaterial $materialResource) {
        $this->materialFactory = $materialFactory;
        $this->materialResource = $materialResource;
    }
    
    
    /**
     * Before save method
     *
     * @param \Magento\Framework\DataObject $object
     * @return $this
     */
    public function beforeSave($object)
    {
        
        $code = $this->getAttribute()->getAttributeCode();
        
        $oldValue = $object->getOrigData($code);
        $newValue = $object->getData($code);
        
        //echo 'old: ' . $oldValue . ', new: ' . $newValue; exit;
        
        $oldMaterial = $this->materialFactory->create();
        $this->materialResource->load($oldMaterial, $oldValue);
        
        $newMaterial = $this->materialFactory->create();
        $this->materialResource->load($newMaterial, $newValue);
        
        if ($oldValue != $newValue) {
            if ($oldValue && $oldMaterial->getCount() >0) {
                $oldMaterial->setCount($oldMaterial->getCount() -1);
                $this->materialResource->save($oldMaterial);
            }
            if ($newValue) {
                $newMaterial->setCount($newMaterial->getCount() +1);
                $this->materialResource->save($newMaterial);
            }
        }

        return parent::beforeSave($object);
    }
    

}

