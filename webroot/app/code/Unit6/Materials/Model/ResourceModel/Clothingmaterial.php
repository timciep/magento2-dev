<?php

namespace Unit6\Materials\Model\ResourceModel;

class Clothingmaterial extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    
    protected function _construct()
    {
        $this->_init('clothing_materials', 'material_id');
    }
    
}
