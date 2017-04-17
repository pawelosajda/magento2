<?php

namespace Osajda\Poligon\Model;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use Osajda\Poligon\Api\PostRepositoryInterface;
use Osajda\Poligon\Api\Data\PostInterface;
use Osajda\Poligon\Model\ResourceModel\Post as ResourcePost;

/**
 * Description of PostRepository
 *
 * @author pawel
 */
class PostRepository implements PostRepositoryInterface
{
    /**
     * @var \Osajda\Poligon\Model\PostFactory 
     */
    protected $_postFactory;
    
    /**
     * @var \Osajda\Poligon\Model\ResourceModel\Post
     */
    protected $_resource;
    
    public function __construct(
        PostFactory $postFactory,
        ResourcePost $resourcePost
    ) {
        $this->_postFactory = $postFactory;
        $this->_resource = $resourcePost;
    }
    
    public function delete(PostInterface $post)
    {
        
    }

    public function deleteById(int $postId)
    {
        
    }

    /**
     * @param int $postId
     * @return PostInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $postId): PostInterface
    {
        $post = $this->_postFactory->create();
        $this->_resource->load($post, $postId);
//        if (null === $post->getId()) {
//            throw new NoSuchEntityException(__('Post with id %1 does not exists.', $postId));
//        }
        return $post;
    }

    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        
    }

    /**
     * @param PostInterface $post
     * @return PostInterface
     * @throws CouldNotSaveException
     */
    public function save(PostInterface $post): PostInterface
    {
        try {
            $this->_resource->save($post);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }
        return $post;
    }
}
