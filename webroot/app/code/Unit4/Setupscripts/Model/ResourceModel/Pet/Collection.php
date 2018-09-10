<?php

namespace Unit4\Setupscripts\Model\ResourceModel\Pet;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    
    protected function _construct()
    {
        $this->_init(
                \Unit4\Setupscripts\Model\Pet::class,
                \Unit4\Setupscripts\Model\ResourceModel\Pet::class
        );
    }
    
    
}
