<?php

namespace Training\Basic\Model\ResourceModel\Post\Grid;

/**
 * Description of Collection
 *
 * @author pawel
 */
class Collection 
    extends \Training\Basic\Model\ResourceModel\Post\Collection 
    implements \Magento\Framework\Api\Search\SearchResultInterface
{
    /**
     * @var \Magento\Framework\Api\Search\AggregationInterface
     */
    private $aggregations;
    
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
    
    public function getAggregations()
    {
        return $this->aggregations;
    }
    
    public function setAggregations($aggregations)
    {
        $this->aggregations = $aggregations;
    }
    
    public function getSearchCriteria()
    {
        return null;
    }
    
    public function setSearchCriteria(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null)
    {
        return $this;
    }
    
    public function getTotalCount()
    {
        return $this->getSize();
    }
    
    public function setTotalCount($totalCount)
    {
        return $this;
    }
    
    public function setItems(array $items = null)
    {
        return $this;
    }
}
