<?php

namespace Training\Basic\Model\ResourceModel;

/**
 * Description of Post
 *
 * @author pawel
 */
class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    const MAIN_TABLE = 'training_basic_post';
    
    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, \Training\Basic\Api\Data\PostInterface::ID);
    }
}
