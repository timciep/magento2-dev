<?php
namespace Unit4\Setupscripts\Api;

/**
 * Customer CRUD interface.
 * @api
 * @since 1.0.0
 */
interface PetRepositoryInterface
{

    /**
     * Get pet by pet id.
     * 
     * @param int $petId
     * @return \Unit4\Setupscripts\Api\Data\PetInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If customer with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getByPetId($petId);
        
}

