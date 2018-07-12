<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit4\Setupscripts\Setup;

use Magento\Framework\App\ObjectManager;
use Magento\Framework\Indexer\IndexerRegistry;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\DB\FieldDataConverterFactory;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class UpgradeData implements UpgradeDataInterface
{
    /**
     * @var FieldDataConverterFactory
     */
    private $fieldDataConverterFactory;

    /**
     * @param CustomerSetupFactory $customerSetupFactory
     * @param IndexerRegistry $indexerRegistry
     * @param \Magento\Eav\Model\Config $eavConfig
     * @param FieldDataConverterFactory|null $fieldDataConverterFactory
     */
    public function __construct(
        FieldDataConverterFactory $fieldDataConverterFactory = null
    ) {
        $this->fieldDataConverterFactory = $fieldDataConverterFactory ?: ObjectManager::getInstance()->get(
            FieldDataConverterFactory::class
        );
    }

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.0.6', '<')) {
            $bind = [
                'pet_id' => '1',
                'customer_id' => '1',
                'pet_name' => 'rover',
                'pet_type' => 'dog'
            ];
            $setup->getConnection()->insert($setup->getTable('pets'), $bind);
        }

        if (version_compare($context->getVersion(), '1.0.7', '<')) {
            $bind = [
                'pet_id' => '2',
                'customer_id' => '1',
                'pet_name' => 'sparky',
                'pet_type' => 'dog'
            ];
            $setup->getConnection()->insert($setup->getTable('pets'), $bind);
            $bind = [
                'pet_id' => '3',
                'customer_id' => '2',
                'pet_name' => 'felix',
                'pet_type' => 'cat'
            ];
            $setup->getConnection()->insert($setup->getTable('pets'), $bind);
            $bind = [
                'pet_id' => '4',
                'customer_id' => '3',
                'pet_name' => 'smoky',
                'pet_type' => 'cat'
            ];
            $setup->getConnection()->insert($setup->getTable('pets'), $bind);
            $bind = [
                'pet_id' => '5',
                'customer_id' => '1',
                'pet_name' => 'jim',
                'pet_type' => 'dog'
            ];
            $setup->getConnection()->insert($setup->getTable('pets'), $bind);
        }
      

        $setup->endSetup();
    }

    
}
