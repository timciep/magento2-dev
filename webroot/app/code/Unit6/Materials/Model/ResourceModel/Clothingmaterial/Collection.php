<?php

namespace Unit6\Materials\Model\ResourceModel\Clothingmaterial;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    
    protected function _construct()
    {
        $this->_init(
                \Unit6\Materials\Model\Clothingmaterial::class,
                \Unit6\Materials\Model\ResourceModel\Clothingmaterial::class
        );
    }
    
    
}
