<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit4\Setupscripts\Api\Data;

/**
 * Customer interface.
 * @api
 * @since 100.0.2
 */
interface PetInterface //extends \Magento\Framework\Api\CustomAttributesDataInterface
{

    const PET_ID = 'pet_id';
    const PET_NAME = 'pet_name';
    const CUSTOMER_ID = 'customer_id';
    const PET_TYPE = 'pet_type';
    
    /**
     * Get pet id
     *
     * @return int|null
     */
    public function getPetId();

    /**
     * Set pet id
     *
     * @param int $id
     * @return $this
     */
    public function setPetId($id);

  
    /**
     * Get pet name
     *
     * @return string
     */
    public function getPetName();

    /**
     * Set pet name
     *
     * @param string $name
     * @return $this
     */
    public function setPetName($name);
    
    
    /**
     * Get customer ID
     *
     * @return int
     */
    public function getCustomerId();

    /**
     * Set customer ID
     *
     * @param int $customerId
     * @return $this
     */
    public function setCustomerId($customerId);
    
    
    /**
     * Get customer ID
     *
     * @return string
     */
    public function getPetType();

    /**
     * Set customer ID
     *
     * @param string $petType
     * @return $this
     */
    public function setPetType($petType);

}

