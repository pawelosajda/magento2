<?php

namespace Training\Basic\Api\Data;

/**
 * @author pawel
 */
interface PostSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get items list.
     *
     * @return \Training\Basic\Api\Data\PostInterface[]
     */
    public function getItems();

    /**
     * Set items list.
     *
     * @param \Training\Basic\Api\Data\PostInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
