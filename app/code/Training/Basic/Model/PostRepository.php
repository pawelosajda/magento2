<?php

namespace Training\Basic\Model;

use Magento\Framework\Exception;

/**
 * Description of PostRepository
 *
 * @author pawel
 */
class PostRepository implements \Training\Basic\Api\PostRepositoryInterface
{
    /**
     * @var \Training\Basic\Api\Data\PostInterfaceFactory
     */
    private $postFactory;
    
    /**
     * @var \Training\Basic\Model\ResourceModel\Post\CollectionFactory
     */
    private $postCollectionFactory;
    
    /**
     * @var \Training\Basic\Model\ResourceModel\Post
     */
    private $resource;
    
    /**
     * @var \Training\Basic\Api\Data\PostSearchResultInterfaceFactory
     */
    private $postSearchResultsFactory;
    
    /**
     * @var \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface
     */
    private $collectionProcessor;
    
    /**
     * @param \Training\Basic\Api\Data\PostInterfaceFactory $postFactory
     * @param \Training\Basic\Model\ResourceModel\Post\CollectionFactory $postCollectionFactory
     * @param \Training\Basic\Model\ResourceModel\Post $resource
     * @param \Training\Basic\Api\Data\PostSearchResultsInterfaceFactory $postSearchResultsFactory
     * @param \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        \Training\Basic\Api\Data\PostInterfaceFactory $postFactory,
        \Training\Basic\Model\ResourceModel\Post\CollectionFactory $postCollectionFactory,
        \Training\Basic\Model\ResourceModel\Post $resource,
        \Training\Basic\Api\Data\PostSearchResultsInterfaceFactory $postSearchResultsFactory,
        \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor = null
    ) {
        $this->postFactory = $postFactory;
        $this->postCollectionFactory = $postCollectionFactory;
        $this->resource = $resource;
        $this->postSearchResultsFactory = $postSearchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }
    
    public function save(\Training\Basic\Api\Data\PostInterface $post)
    {
        try {
            $this->resource->save($post);
        } catch (\Exception $e) {
            throw new Exception\CouldNotSaveException(__(
                'Could not save the post: %1', 
                $e->getMessage()
            ));
        }
    }
    
    public function getById($postId)
    {
        $post = $this->postFactory->create();
        $this->resource->load($post, $postId);
        if (null === $post->getId()) {
            throw new Exception\NoSuchEntityException(__('Post with id "%1" does not exists.', $postId));
        }
        
        return $post;
    }
    
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->postCollectionFactory->create();
        $this->collectionProcessor->process($searchCriteria, $collection);
        $searchResults = $this->postSearchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        
        return $searchResults;
    }
    
    public function delete(\Training\Basic\Api\Data\PostInterface $post)
    {
        try {
            $this->resource->delete($post);
        } catch (\Exception $e) {
            throw new Exception\CouldNotDeleteException(__(
                'Could not delete the post: %1', 
                $e->getMessage()
            ));
        }
        return true;
    }

    public function deleteById($postId)
    {
        $this->delete($this->getById($postId));
    }    
}
