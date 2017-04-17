<?php

namespace Osajda\Poligon\Ui\Component;

use Osajda\Poligon\Model\ResourceModel\Post\CollectionFactory;

/**
 * Description of DataProvider
 *
 * @author pawel
 */
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    public function __construct(
        $name, 
        $primaryFieldName, 
        $requestFieldName, 
        CollectionFactory $collectionFactory,
        array $meta = [], 
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct(
            $name, 
            $primaryFieldName, 
            $requestFieldName, 
            $meta, 
            $data
        );
    }
}
