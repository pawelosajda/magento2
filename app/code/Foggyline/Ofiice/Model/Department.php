<?php

namespace Foggyline\Office\Model;

/**
 * Description of Department
 *
 * @author pawel
 */
class Department extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Foggyline\Office\Model\ResourceModel\Department');
    }
}
