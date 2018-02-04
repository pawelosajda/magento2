<?php

namespace Training\Basic\Controller\Adminhtml\Post;

/**
 * Description of Edit
 *
 * @author pawel
 */
class Edit extends \Training\Basic\Controller\Adminhtml\Post
{
    const ADMIN_RESOURCE = 'Training_Basic::save';
    
    public function execute()
    {
        $resultPage = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
        return $resultPage;
    }
}
