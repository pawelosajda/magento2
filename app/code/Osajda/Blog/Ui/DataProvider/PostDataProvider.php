<?php

namespace Osajda\Blog\Ui\DataProvider;

use Osajda\Blog\Model\ResourceModel\Post\CollectionFactory;

/**
 * Description of PostDataProvider
 *
 * @author pawel
 */
class PostDataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
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
