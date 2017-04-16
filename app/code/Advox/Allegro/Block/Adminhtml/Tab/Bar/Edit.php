<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Advox\Allegro\Block\Adminhtml\Tab\Bar;

/**
 * Adminhtml dashboard bottom tabs
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Edit extends \Magento\Backend\Block\Widget\Form\Container
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();

        $this->_blockGroup = 'Advox_Allegro';
        $this->_controller = 'adminhtml_tab_bar';
        $this->buttonList->update('save', 'label', __('Save Account'));
        $this->buttonList->remove('delete');
        $this->buttonList->remove('back');
    }

    /**
     * @return \Magento\Framework\Phrase
     */
    public function getHeaderText()
    {
        return __('My Account');
    }
}
