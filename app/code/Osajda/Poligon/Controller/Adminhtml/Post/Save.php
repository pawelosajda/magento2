<?php

namespace Osajda\Poligon\Controller\Adminhtml\Post;

use Osajda\Poligon\Controller\Adminhtml\Post;
use Osajda\Poligon\Api\Data\PostInterface;
use Osajda\Poligon\Api\PostRepositoryInterface;
use Magento\Framework\Exception\LocalizedException;

/**
 * Description of Save
 *
 * @author pawel
 */
class Save extends Post
{
    /**
     * @var \Osajda\Poligon\Api\PostRepositoryInterface
     */
    protected $_postRepository;
    
    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        PostRepositoryInterface $postRepository
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        $this->_postRepository = $postRepository;
        parent::__construct($context);
    }
    
    /**
     * Index Action
     * 
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        $id = (int) $this->getRequest()->getParam(PostInterface::POST_ID);
        
        try {
            if (empty($data['post_id'])) {
                $data['post_id'] = null;
            }
            $post = $this->_postRepository->getById($id);
            $post->addData($data);
            $this->_postRepository->save($post);
            $this->messageManager->addSuccessMessage(__('Success Message'));
        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        } catch (\Exception $e) {
            $this->messageManager->addExceptionMessage($e, __('Something went wrong when saving the post.'));
        }

        return $resultRedirect->setPath('*/*/');
    }
}
