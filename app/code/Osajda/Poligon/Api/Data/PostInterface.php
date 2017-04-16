<?php

namespace Osajda\Poligon\Api\Data;

/**
 * @author pawel
 */
interface PostInterface
{
    const POST_ID = 'post_id';
    const TITLE = 'title';
    const SLUG = 'slug';
    const CONTENT = 'content';
    const CREATION_TIME = 'creation_time';
    const UPDATE_TIME = 'update_time';
    
    public function getId();
    public function getTitle(): string;
    public function getSlug(): string;
    public function getContent(): string;
    public function getCreationTime(): string;
    public function getUpdateTime(): string;
    
    public function setId($postId);
    public function setTitle(string $title): PostInterface;
    public function setSlug(string $slug): PostInterface;
    public function setContent(string $content): PostInterface;
    public function setCreationTime(string $creationTime): PostInterface;
    public function setUpdateTime(string $updateTime): PostInterface;
}
