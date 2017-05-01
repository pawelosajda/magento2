<?php

namespace Osajda\Blog\Controller\Adminhtml\Post;

/**
 * Description of Index
 *
 * @author pawel
 */
class NewAction extends \Osajda\Blog\Controller\Adminhtml\Post
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;
    
    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }
    
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $page = $this->_pageFactory->create();
        return $page;
    }
}
