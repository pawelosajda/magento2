<?php

namespace Training\Basic\Model\ResourceModel\Post;

/**
 * Description of Collection
 *
 * @author pawel
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = \Training\Basic\Api\Data\PostInterface::ID;
    
    protected function _construct()
    {
        $this->_init(\Training\Basic\Model\Post::class, \Training\Basic\Model\ResourceModel\Post::class);
    }
}
