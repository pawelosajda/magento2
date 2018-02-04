<?php

namespace Training\Basic\Model;

/**
 * Description of Post
 *
 * @author pawel
 */
class Post extends \Magento\Framework\Model\AbstractModel implements \Training\Basic\Api\Data\PostInterface
{
    protected function _construct()
    {
        parent::_construct(\Training\Basic\Model\ResourceModel\Post::class);
    }
}
