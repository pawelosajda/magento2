<?php

namespace Training\Basic\Model\Post;

/**
 * Class DataProvider
 */
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @var \Training\Basic\Model\ResourceModel\Post\Collection
     */
    protected $collection;

    /**
     * @var \Magento\Framework\App\Request\DataPersistorInterface
     */
    private $dataPersistor;

    /**
     * @var array
     */
    private $loadedData;

    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param \Training\Basic\Model\ResourceModel\Post\CollectionFactory $postCollectionFactory
     * @param \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Training\Basic\Model\ResourceModel\Post\CollectionFactory $postCollectionFactory,
        \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $postCollectionFactory->create();
        $this->dataPersistor = $dataPersistor;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->meta = $this->prepareMeta($this->meta);
    }

    /**
     * Prepares Meta
     *
     * @param array $meta
     * @return array
     */
    public function prepareMeta(array $meta)
    {
        return $meta;
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
        foreach ($items as $post) {
            /* @var $post \Training\Basic\Api\Data\PostInterface */
            $this->loadedData[$post->getId()] = $post->getData();
        }

        $data = $this->dataPersistor->get('basic_post');
        if (!empty($data)) {
            $post = $this->collection->getNewEmptyItem();
            $post->setData($data);
            $this->loadedData[$post->getId()] = $post->getData();
            $this->dataPersistor->clear('basic_post');
        }

        return $this->loadedData;
    }
}
