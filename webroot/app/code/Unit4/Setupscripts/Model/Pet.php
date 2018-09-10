<?php

namespace Unit4\Setupscripts\Model;

class Pet extends \Magento\Framework\Model\AbstractModel implements \Unit4\Setupscripts\Api\Data\PetInterface {
    
    
    protected function _construct()
    {
        $this->_init(\Unit4\Setupscripts\Model\ResourceModel\Pet::class);
    }
    
    public function getPetId() {
        return $this->getData(self::PET_ID);
    }

    public function getCustomerId(): int {
        return $this->getData(self::CUSTOMER_ID);
    }

    public function getPetName(): string {
        return $this->getData(self::PET_NAME);
    }

    public function getPetType(): string {
        return $this->getData(self::PET_TYPE);
    }


    public function setCustomerId($customerId): \this {
        return $this->setData(self::CUSTOMER_ID, $customerId);
    }

    public function setPetId($id): \this {
        return $this->setData(self::PET_ID, $id);
    }

    public function setPetName($name): \this {
        return $this->setData(self::PET_NAME, $name);
    }

    public function setPetType($petType): \this {
        return $this->setData(self::PET_NAME, $petType);
    }

}
