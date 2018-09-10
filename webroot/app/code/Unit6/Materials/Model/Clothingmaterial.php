<?php

namespace Unit6\Materials\Model;

class Clothingmaterial extends \Magento\Framework\Model\AbstractModel {
    
    
    protected function _construct()
    {
        $this->_init(\Unit6\Materials\Model\ResourceModel\Clothingmaterial::class);
    }

}
