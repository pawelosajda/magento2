<?php

namespace Training\Basic\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

/**
 * Description of Index
 *
 * @author pawel
 */
class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $result;
    }
}
