<?php

namespace Osajda\Poligon\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Osajda\Poligon\Api\Data\PostInterface;

/**
 * Description of Post
 *
 * @author pawel
 */
class Post extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('osajda_poligon_post', PostInterface::POST_ID);
    }
}
