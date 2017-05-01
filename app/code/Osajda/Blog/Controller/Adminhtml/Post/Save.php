<?php

namespace Osajda\Blog\Controller\Adminhtml\Post;

/**
 * Description of Index
 *
 * @author pawel
 */
class Save extends \Osajda\Blog\Controller\Adminhtml\Post
{    
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        return $resultRedirect->setPath('*/*/index');
    }
}
