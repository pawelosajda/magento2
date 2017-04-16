<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Advox\Allegro\Block\Adminhtml;

/**
 * Adminhtml dashboard bottom tabs
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Container extends \Magento\Backend\Block\Template
{
    protected function _toHtml()
    {
        return '<div id="form_container"></div>';
    }
}
