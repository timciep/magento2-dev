<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit6\Materials\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class UpgradeData implements UpgradeDataInterface
{
    
    private $eavSetupFactory;
    
    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.0.10', '<')) {

            $setup->getConnection()->insert($setup->getTable('clothing_materials'), ['material' => 'cotton']);
            $setup->getConnection()->insert($setup->getTable('clothing_materials'), ['material' => 'wool']);
            $setup->getConnection()->insert($setup->getTable('clothing_materials'), ['material' => 'linen']);
            $setup->getConnection()->insert($setup->getTable('clothing_materials'), ['material' => 'viscose']);

        }
        
        
        
        if (version_compare($context->getVersion(), '1.0.13', '<')) {
            
            /** @var EavSetup $eavSetup */
            $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
            
            $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'clothing_material',
            [
                'type' => 'int',
                'input' => 'select',
                'backend' => \Unit6\Materials\Model\Attribute\Backend\Clothingmaterial::class,
                'frontend' => '',
                'source' => \Unit6\Materials\Model\Attribute\Source\Clothingmaterial::class,
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => true,
                'user_defined' => false,
                'default' => '',
                'searchable' => false,
                'filterable' => true,
            ]
        );
            
        }

        $setup->endSetup();
    }

    
}
