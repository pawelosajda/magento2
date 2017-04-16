<?php

namespace Osajda\Poligon\Controller\Adminhtml\Post;

use Osajda\Poligon\Controller\Adminhtml\Post;

/**
 * Description of Edit
 *
 * @author pawel
 */
class Edit extends Post
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_resultPageFactory;
    
    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    
    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        
        return $resultPage;
    }
}
