<?php

namespace Osajda\Poligon\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Osajda\Poligon\Api\Data\PostInterface;

/**
 * Description of Collection
 *
 * @author pawel
 */
class Collection extends AbstractCollection
{
    protected $_idFieldName = PostInterface::POST_ID;
    
    protected function _construct()
    {
        $this->_init(
            'Osajda\Poligon\Model\Post', 
            'Osajda\Poligon\Model\ResourceModel\Post'
        );
    }
}
