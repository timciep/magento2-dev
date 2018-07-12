<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Newsletter subscribe block
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
namespace Unit3\Layoutblock\Block;

/**
 * @api
 * @since 100.0.2
 */
class Layoutblock extends \Magento\Framework\View\Element\Template
{

    public function getCustomText() {
        return "from Block function.";
    }
    
}
