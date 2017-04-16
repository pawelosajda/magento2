<?php

namespace Foggyline\Office\Model\ResourceModel;

/**
 * Description of Department
 *
 * @author pawel
 */
class Department extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('foggyline_office_department', 'entity_id');
    }
}
