<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the array for the items returned in the Item Group feed
 * file.
 */
class ItemGroupResponse extends AbstractModel
{
    /**
     * The container for the array of items groups returned by the getItemGroupFeed
     * method. The data in the file is tab separated and the first row is the header,
     * which labels the columns and indicates the order of the values for each item.
     * The header labels match the fields that are described in the Response fields
     * section.
     *
     * @var \Ebay\Buy\Feed\Model\ItemGroup[]
     */
    public $itemGroups = null;
}
