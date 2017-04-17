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

    /**
     * @var array
     */
    protected $loadedData;
    
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
    
    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $items = $this->collection->getItems();
        /** @var \Magento\Cms\Model\Block $block */
        foreach ($items as $block) {
            $this->loadedData[$block->getId()] = $block->getData();
        }

        $data = $this->dataPersistor->get('cms_block');
        if (!empty($data)) {
            $block = $this->collection->getNewEmptyItem();
            $block->setData($data);
            $this->loadedData[$block->getId()] = $block->getData();
            $this->dataPersistor->clear('cms_block');
        }

        return $this->loadedData;
    }
}
