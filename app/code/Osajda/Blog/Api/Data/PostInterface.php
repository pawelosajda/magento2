<?php

namespace Osajda\Blog\Api\Data;

/**
 *
 * @author pawel
 */
interface PostInterface
{
    const POST_ID = 'post_id';
    const TITLE = 'title';
    const SLUG = 'slug';
    const CONTENT = 'content';
    const CREATION_TIME = 'cration_time';
    const UPDATE_TIME = 'update_time';
    
    /**
     * @return int
     */
    public function getId();
    
    /**
     * @return string
     */
    public function getTitle();
    
    /**
     * @return string
     */
    public function getSlug();
    
    /**
     * @return string
     */
    public function getContent();
    
    /**
     * @return string
     */
    public function getCreationTime();
    
    /**
     * @return string
     */
    public function getUpdateTime();
    
    /**
     * @param int $postId
     * @return \Osajda\Blog\Api\Data\PostInterface
     */
    public function setId($postId);
    
    /**
     * @param string $title
     * @return \Osajda\Blog\Api\Data\PostInterface
     */
    public function setTitle($title);
    
    /**
     * @param string $slug
     * @return \Osajda\Blog\Api\Data\PostInterface
     */
    public function setSlug($slug);
    
    /**
     * @param string $content
     * @return \Osajda\Blog\Api\Data\PostInterface
     */
    public function setContent($content);
    
    /**
     * @param string $creationTime
     * @return \Osajda\Blog\Api\Data\PostInterface
     */
    public function setCreationTime($creationTime);
    
    /**
     * @param string $updateTime
     * @return \Osajda\Blog\Api\Data\PostInterface
     */
    public function setUpdateTime($updateTime);
}
