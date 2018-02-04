<?php

namespace Training\Basic\Controller\Adminhtml\Post;

/**
 * Description of NewAction
 *
 * @author pawel
 */
class NewAction extends \Training\Basic\Controller\Adminhtml\Post
{
    const ADMIN_RESOURCE = 'Training_Basic::save';
    
    /**
     * @var \Magento\Backend\Model\View\Result\Forward
     */
    protected $resultForwardFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory
    ) {
        $this->resultForwardFactory = $resultForwardFactory;
        parent::__construct($context);
    }
    
    public function execute()
    {
        $resultForward = $this->resultForwardFactory->create();
        return $resultForward->forward('edit');
    }
}
