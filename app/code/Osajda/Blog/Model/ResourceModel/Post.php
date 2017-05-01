<?php

namespace Osajda\Blog\Model\ResourceModel;

/**
 * Description of Post
 *
 * @author pawel
 */
class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('osajda_blog_post', \Osajda\Blog\Api\Data\PostInterface::POST_ID);
    }
}
