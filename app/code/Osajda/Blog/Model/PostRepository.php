<?php

namespace Osajda\Blog\Model;

use Magento\Framework\Exception;

/**
 * Description of Post
 *
 * @author pawel
 */
class PostRepository implements \Osajda\Blog\Api\PostRepositoryInterface
{
    /**
     * @var \Osajda\Blog\Model\ResourceModel\Post 
     */
    protected $_resource;
    
    public function __construct(\Osajda\Blog\Model\ResourceModel\Post $resource)
    {
        $this->_resource = $resource;
    }
    
    public function delete(\Osajda\Blog\Api\Data\PostInterface $post)
    {
        
    }

    public function deleteById($postId)
    {
        
    }

    public function getById($postId)
    {
        
    }

    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        
    }

    public function save(\Osajda\Blog\Api\Data\PostInterface $post)
    {
        try {
            $this->_resource->save($post);
        } catch (\Exception $e) {
            throw new Exception\CouldNotSaveException(__($e->getMessage()));
        }
    }
}
