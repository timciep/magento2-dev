<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit3\Layoutblock\ViewModel;

use Magento\Framework\DataObject;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Product breadcrumbs view model.
 */
class Myviewmodel extends DataObject implements ArgumentInterface
{
   
    public function getViewmodelText()
    {
        return "This text comes from Viewmodel";
    }
}
