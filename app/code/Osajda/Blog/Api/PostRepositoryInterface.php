<?php

namespace Osajda\Blog\Api;

/**
 *
 * @author pawel
 */
interface PostRepositoryInterface
{
    public function save(Data\PostInterface $post);
    public function getById($postId);
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
    public function delete(Data\PostInterface $post);
    public function deleteById($postId);
}
