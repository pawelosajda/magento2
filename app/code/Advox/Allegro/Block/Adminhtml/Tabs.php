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
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @var string
     */
    protected $_template = 'Magento_Backend::widget/tabshoriz.phtml';

    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('form_tabs');
        $this->setDestElementId('form_container');
    }

    /**
     * Prepare layout for dashboard bottom tabs
     *
     * To load block statically:
     *     1) content must be generated
     *     2) url should not be specified
     *     3) class should not be 'ajax'
     * To load with ajax:
     *     1) do not load content
     *     2) specify url (BE CAREFUL)
     *     3) specify class 'ajax'
     *
     * @return $this
     */
    protected function _prepareLayout()
    {
        // load this active tab statically
        $this->addTab(
            'bar',
            [
                'label' => __('Bar'),
                'content' => $this->getLayout()->createBlock(
                    'Advox\Allegro\Block\Adminhtml\Tab\Bar\Edit'
                )->toHtml(),
                'active' => true
            ]
        );
        
        $this->addTab(
            'foo',
            [
                'label' => __('Foo'),
                'content' => $this->getLayout()->createBlock(
                    'Advox\Allegro\Block\Adminhtml\Tab\Foo\Edit'
                )->toHtml(),
            ]
        );

        return parent::_prepareLayout();
    }
}
