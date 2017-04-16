<?php

namespace Foggyline\Office\Controller\Test;

/**
 * Description of Crud
 *
 * @author pawel
 */
class Crud extends \Foggyline\Office\Controller\Test
{
    protected $employeeFactory;
    protected $departmentFactory;
    
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Foggyline\Office\Model\EmployeeFactory $employeeFactory,
        \Foggyline\Office\Model\DepartmentFactory $departmentFactory
    ) {
        $this->employeeFactory = $employeeFactory;
        $this->departmentFactory = $departmentFactory;
        return parent::__construct($context);
    }
    
    public function execute()
    {
        
    }

}
