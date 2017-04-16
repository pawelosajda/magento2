<?php

namespace Osajda\Poligon\Model;

use Osajda\Poligon\Api\PostRepositoryInterface;

/**
 * Description of PostRepository
 *
 * @author pawel
 */
class PostRepository implements PostRepositoryInterface
{
    
    public function delete(\Osajda\Poligon\Api\Data\PostInterface $post)
    {
        
    }

    public function deleteById(int $postId)
    {
        
    }

    public function getById(int $postId): \Osajda\Poligon\Api\Data\PostInterface
    {
        
    }

    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        
    }

    public function save(\Osajda\Poligon\Api\Data\PostInterface $post): \Osajda\Poligon\Api\Data\PostInterface
    {
        
    }
}
