<?php

namespace Training\Basic\Api;

/**
 * @author pawel
 */
interface PostRepositoryInterface
{
    /**
     * @param \Training\Basic\Api\Data\PostInterface $post
     * @return \Training\Basic\Api\Data\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\PostInterface $post);
    
    /**
     * @param int $postId
     * @return \Training\Basic\Api\Data\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($postId);
    
    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return Data\PostSearchResultInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
    
    /**
     * @param \Training\Basic\Api\Data\PostInterface $post
     * @return bool
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\PostInterface $post);
    
    /**
     * @param int $postId
     * @return bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($postId);
}
