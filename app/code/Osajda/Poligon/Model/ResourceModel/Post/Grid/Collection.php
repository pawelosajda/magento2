<?php

namespace Osajda\Poligon\Model\ResourceModel\Post\Grid;

use Magento\Framework\Api\Search\SearchResultInterface;
use Osajda\Poligon\Model\ResourceModel\Post\Collection as PostCollection;

/**
 * Description of Collection
 *
 * @author pawel
 */
class Collection extends PostCollection implements SearchResultInterface
{
    /**
     * @var \Magento\Framework\Api\Search\AggregationInterface
     */
    protected $_aggregations;
    
    /**
     * @param \Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy
     * @param \Magento\Framework\Event\ManagerInterface $eventManager
     * @param \Magento\Framework\DB\Adapter\AdapterInterface $connection
     * @param \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource
     */
    public function __construct(
        \Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, 
        \Psr\Log\LoggerInterface $logger, 
        \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, 
        \Magento\Framework\Event\ManagerInterface $eventManager, 
        \Magento\Framework\DB\Adapter\AdapterInterface $connection = null, 
        \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null
    ) {
        parent::__construct(
            $entityFactory, 
            $logger, 
            $fetchStrategy, 
            $eventManager, 
            $connection, 
            $resource
        );
    }
    
    public function getAggregations(): \Magento\Framework\Api\Search\AggregationInterface
    {
        return $this->_aggregations;
    }

    public function getSearchCriteria()
    {
        
    }

    public function getTotalCount(): int
    {
        return $this->getSize();
    }

    public function setAggregations($aggregations)
    {
        
    }

    public function setItems(array $items = null)
    {
        
    }

    public function setSearchCriteria(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        
    }

    public function setTotalCount($totalCount): \this
    {
        
    }
}
