<?php

namespace Osajda\Blog\Controller\Adminhtml\Post;

use Osajda\Blog\Api\Data\PostInterface;

/**
 * Description of Index
 *
 * @author pawel
 */
class Save extends \Osajda\Blog\Controller\Adminhtml\Post
{
    /**
     * @var \Osajda\Blog\Model\PostFactory
     */
    protected $_postFactory;
    
    /**
     * @var \Osajda\Blog\Api\PostRepositoryInterface
     */
    protected $_postRepository;
    
    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Osajda\Blog\Model\PostFactory $postFactory
     * @param \Osajda\Blog\Api\PostRepositoryInterface $postRepository
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Osajda\Blog\Model\PostFactory $postFactory,
        \Osajda\Blog\Api\PostRepositoryInterface $postRepository
    ) {
        $this->_postFactory = $postFactory;
        $this->_postRepository = $postRepository;
        parent::__construct($context);
    }
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        try {
            if (true === empty($data[PostInterface::POST_ID])) {
                unset($data[PostInterface::POST_ID]);
            }
            if (true === isset($data[PostInterface::POST_ID])) {
                $post = $this->_postRepository->getById($data[PostInterface::POST_ID]);
            } else {
                $post = $this->_postFactory->create();
            }
            $post->addData($data);
            $this->_postRepository->save($post);
            $this->messageManager->addSuccessMessage(__('Post saved.'));
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $this->messageManager->addErrorMessage(__($e->getMessage()));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__($e->getMessage()));
        }
        return $resultRedirect->setPath('*/*/index');
    }
}
