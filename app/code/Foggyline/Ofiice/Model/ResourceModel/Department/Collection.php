<?php

namespace Foggyline\Office\Model\ResourceModel\Department;

/**
 * Description of Collection
 *
 * @author pawel
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Foggyline\Office\Model\Department',
            'Foggyline\Office\Model\ResourceModel\Department'    
        );
    }
}
