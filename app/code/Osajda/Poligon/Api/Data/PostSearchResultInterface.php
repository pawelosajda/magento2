<?php

namespace Osajda\Poligon\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 *
 * @author pawel
 */
interface PostSearchResultInterface extends SearchResultsInterface
{
    public function getItems();
    public function setItems(array $items);
}
