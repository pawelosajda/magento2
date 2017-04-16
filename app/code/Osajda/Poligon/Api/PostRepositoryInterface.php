<?php

namespace Osajda\Poligon\Api;

/**
 *
 * @author pawel
 */
interface PostRepositoryInterface
{
    public function save(Data\PostInterface $post): Data\PostInterface;
    public function getById(int $postId): Data\PostInterface;
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
    public function delete(Data\PostInterface $post);
    public function deleteById(int $postId);
}
