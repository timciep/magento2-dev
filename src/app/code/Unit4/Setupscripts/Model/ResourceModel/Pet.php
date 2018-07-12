<?php

namespace Unit4\Setupscripts\Model\ResourceModel;

class Pet extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    
    protected function _construct()
    {
        $this->_init('pets', 'pet_id');
    }
    
}
