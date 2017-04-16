<?php

namespace Osajda\Poligon\Model\Post;

use Magento\Ui\DataProvider\AbstractDataProvider;
use Magento\Framework\App\Request\DataPersistorInterface;
use Osajda\Poligon\Model\ResourceModel\Post\CollectionFactory;

/**
 * Description of DataProvider
 *
 * @author pawel
 */
class DataProvider extends AbstractDataProvider
{
    /**
     * @var \Osajda\Poligon\Model\ResourceModel\Post\Collection
     */
    protected $collection;
    
    /**
     * @var \Magento\Framework\App\Request\DataPersistorInterface
     */
    protected $dataPersistor;
    
    public function __construct(
        $name, 
        $primaryFieldName, 
        $requestFieldName, 
        CollectionFactory $collectionFactory,
        DataPersistorInterface $dataPersistor,
        array $meta = array(), 
        array $data = array()
    ) {
        $this->collection = $collectionFactory->create();
        $this->dataPersistor = $dataPersistor;
        parent::__construct(
            $name, 
            $primaryFieldName, 
            $requestFieldName, 
            $meta, 
            $data
        );
    }
    
    
}
