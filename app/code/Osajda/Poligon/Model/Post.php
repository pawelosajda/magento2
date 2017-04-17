<?php

namespace Osajda\Poligon\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;
use Osajda\Poligon\Api\Data\PostInterface;

/**
 * Description of Post
 *
 * @author pawel
 */
class Post extends AbstractModel implements PostInterface, IdentityInterface
{
    const CACHE_TAG = 'osajda_poligon_post';
    
    /**
     * @var string
     */
    protected $_cacheTag = self::CACHE_TAG;
    
    /**
     * @var string
     */
    protected $_eventPrefix = self::CACHE_TAG;
    
    /**
     * 
     */
    protected function _construct()
    {
        $this->_init('Osajda\Poligon\Model\ResourceModel\Post');
    }
    
    /**
     * @return array
     */
    public function getIdentities(): array
    {
        return [
            self::CACHE_TAG . '_' . $this->getId(), 
            self::CACHE_TAG . '_' . $this->getTitle()
        ];
    }

    public function getContent(): string
    {
        return $this->getData(self::CONTENT);
    }

    public function getCreationTime(): string
    {
        return $this->getData(self::CREATION_TIME);
    }

    public function getSlug(): string
    {
        return $this->getData(self::SLUG);
    }

    public function getTitle(): string
    {
        return $this->getData(self::TITLE);
    }

    public function getUpdateTime(): string
    {
        return $this->getData(self::UPDATE_TIME);
    }

    public function setContent(string $content): PostInterface
    {
        $this->setData(self::CONTENT, $content);
        return $this;
    }

    public function setCreationTime(string $creationTime): PostInterface
    {
        $this->setData(self::CREATION_TIME, $creationTime);
        return $this;
    }

    public function setSlug(string $slug): PostInterface
    {
        $this->setData(self::SLUG, $slug);
        return $this;
    }

    public function setTitle(string $title): PostInterface
    {
        $this->setData(self::TITLE, $title);
        return $this;
    }

    public function setUpdateTime(string $updateTime): PostInterface
    {
        $this->setData(self::UPDATE_TIME, $updateTime);
        return $this;
    }

    public function getUserId()
    {
        return $this->getData(self::USER_ID);
    }

    public function setUserId(int $userId)
    {
        $this->setData(self::USER_ID, $userId);
        return $this;
    }
}
