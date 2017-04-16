<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Advox\Allegro\Block\Adminhtml\Tab\Bar\Edit;

/**
 * Adminhtml edit admin user account form
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Form extends \Magento\Backend\Block\Widget\Form\Generic
{
    /**
     * {@inheritdoc}
     */
    protected function _prepareForm()
    {
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create();
        

        $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('Account Information')]);


        $fieldset->addField(
            'second',
            'text',
            ['name' => 'second', 'label' => __('Second'), 'title' => __('First Name'), 'required' => true]
        );

        $form->setAction($this->getUrl('adminhtml/system_account/save'));
        $form->setMethod('post');
        $form->setUseContainer(true);
        $form->setId('edit_form');

        $this->setForm($form);

        return parent::_prepareForm();
    }
}
