<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ItemPriorityResponse extends AbstractModel
{
    /**
     * The container for the array of items returned by the getItemPriorityFeed method.
     * The data in the file is tab separated and the first row is the header, which
     * labels the columns and indicates the order of the values on each line. The
     * header labels match the fields that are described in the Response fields
     * section.
     *
     * @var \Ebay\Buy\Feed\Model\ItemPriority[]
     */
    public $itemDelta = null;
}
