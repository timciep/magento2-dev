<?php

namespace Unit4\Setupscripts\Model;

class PetRepository implements \Unit4\Setupscripts\Api\PetRepositoryInterface {
    
    private $petFactory;
    private $petResource;
    
    public function __construct(\Unit4\Setupscripts\Model\PetFactory $petFactory,
                    \Unit4\Setupscripts\Model\ResourceModel\Pet $petResource) 
    {
        $this->petFactory = $petFactory;
        $this->petResource = $petResource;
    }
    
    /**
     * Get pet by pet id.
     * 
     * @param int $petId
     * @return \Unit4\Setupscripts\Api\Data\PetInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If customer with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getByPetId($petId) {
        $pet = $this->petFactory->create();
        $this->petResource->load($pet, $petId);
        return $pet;
    }
    
    
}
