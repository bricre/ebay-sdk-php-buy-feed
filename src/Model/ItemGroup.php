<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the columns returned in the Item Group feed file.
 */
class ItemGroup extends AbstractModel
{
    /**
     * The unique identifier for the item group. This ID is returned in the
     * primaryItemGroupId column of the Item Feed file.
     *
     * @var string
     */
    public $itemGroupId = null;

    /**
     * The item group type. For example: SELLER_DEFINED_VARIATIONS, indicates that the
     * item group was created by the seller. Code so that your app gracefully handles
     * any future changes to this list.
     *
     * @var string
     */
    public $itemGroupType = null;

    /**
     * A pipe separated (|) list of the aspect (variation) names for this item group.
     * The aspect name is BASE64 encoded. Note: This column can contain multiple
     * values. &nbsp;&nbsp; Encoded Format: &nbsp;&nbsp;&nbsp;aspectName|aspectName
     * &nbsp;&nbsp; Encoded Example (The delimiters are emphasized):
     * &nbsp;&nbsp;&nbsp;Q29sb3I=|U2l6ZQ== &nbsp;&nbsp; Decoded:
     * &nbsp;&nbsp;&nbsp;Color|Size.
     *
     * @var string
     */
    public $variesByLocalizedAspects = null;

    /**
     * The URL to the primary image of the item. The other images of the item group are
     * returned in the additionalImageUrls column.
     *
     * @var string
     */
    public $imageUrl = null;

    /**
     * A pipe separated (|) list of URLs for the additional images for the item group.
     * These images are in addition to the primary image, which is returned in the
     * imageUrl column. Note: This column can contain multiple values.
     *
     * @var string
     */
    public $additionalImageUrls = null;

    /**
     * A boolean that indicates whether the images can be altered. If the value is
     * true, you cannot modify the image. Note: Due to image licensing agreements and
     * other legal concerns, modification (including resizing) of some images is
     * strictly prohibited. These images are for display as-is only.
     *
     * @var bool
     */
    public $imageAlteringProhibited = null;
}
