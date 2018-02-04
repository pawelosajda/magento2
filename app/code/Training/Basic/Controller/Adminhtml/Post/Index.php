<?php

namespace Training\Basic\Controller\Adminhtml\Post;

/**
 * Description of Index
 *
 * @author pawel
 */
class Index extends \Training\Basic\Controller\Adminhtml\Post
{
    const ADMIN_RESOURCE = 'Training_Basic::post';
    
    public function execute()
    {
        $resultPage = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Training_Basic::basic_post');
        $resultPage->addBreadcrumb(__('Basic'), __('Basic'));
        $resultPage->addBreadcrumb(__('Manage Posts'), __('Manage Posts'));
        $resultPage->getConfig()->getTitle()->prepend(__('Posts'));
        return $resultPage;
    }
}
