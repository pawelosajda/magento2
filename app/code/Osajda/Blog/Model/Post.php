<?php

namespace Osajda\Blog\Model;

/**
 * Description of Post
 *
 * @author pawel
 */
class Post extends \Magento\Framework\Model\AbstractModel 
    implements \Osajda\Blog\Api\Data\PostInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'blog_post';
    
    /**
     * @var string
     */
    protected $_cacheTag = self::CACHE_TAG;
    
    /**
     * @var string
     */
    protected $_eventPrefix = 'blog_post';
    
    /**
     * 
     */
    protected function _construct()
    {
        $this->_init('Osajda\Blog\Model\ResourceModel\Post');
    }
    
    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * @return string
     */
    public function getCreationTime(): string
    {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->getData(self::SLUG);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->getData(self::TITLE);
    }

    /**
     * @return string
     */
    public function getUpdateTime(): string
    {
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * @param string $content
     * @return \Osajda\Blog\Api\Data\PostInterface
     */
    public function setContent($content): \Osajda\Blog\Api\Data\PostInterface
    {
        $this->setData(self::CONTENT, $content);
        return $this;
    }

    /**
     * @param string $creationTime
     * @return \Osajda\Blog\Api\Data\PostInterface
     */
    public function setCreationTime($creationTime): \Osajda\Blog\Api\Data\PostInterface
    {
        $this->setData(self::CREATION_TIME, $creationTime);
        return $this;
    }

    /**
     * @param string $slug
     * @return \Osajda\Blog\Api\Data\PostInterface
     */
    public function setSlug($slug): \Osajda\Blog\Api\Data\PostInterface
    {
        $this->setData(self::SLUG, $slug);
        return $this;
    }

    /**
     * @param string $title
     * @return \Osajda\Blog\Api\Data\PostInterface
     */
    public function setTitle($title): \Osajda\Blog\Api\Data\PostInterface
    {
        $this->setData(self::TITLE, $title);
        return $this;
    }

    /**
     * @param string $updateTime
     * @return \Osajda\Blog\Api\Data\PostInterface
     */
    public function setUpdateTime($updateTime): \Osajda\Blog\Api\Data\PostInterface
    {
        $this->setData(self::UPDATE_TIME, $updateTime);
        return $this;
    }

    /**
     * @return array
     */
    public function getIdentities() 
    {
        return [
            self::CACHE_TAG . '_' . $this->getId(), 
            self::CACHE_TAG . '_' . $this->getTitle(),
        ];
    }
}
