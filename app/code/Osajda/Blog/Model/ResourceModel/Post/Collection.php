<?php

namespace Osajda\Blog\Model\ResourceModel\Post;

/**
 * Description of Collection
 *
 * @author pawel
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Osajda\Blog\Model\Post', 'Osajda\Blog\Model\ResourceModel\Post');
    }
}
