<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ItemPriority extends AbstractModel
{
    /**
     * The unique identifier of an item in eBay RESTful format. An example would be
     * v1|1********2|4********2.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * EPN (eBay Partner Network) publishers append this value to their affiliate
     * tracking URL when using an EPN tracking link to track changes that occur to
     * Priority Listing items.
     * Example:_trkparms=ispr%3D1&amp;amdata=enc%3AAQAFAAAAkB1DmsmXf%2BqZ%2BCEMGdebW6oR75GCMdBmc4MCQ%2FCEPqgKHbT0jdWhPwfY5LdUs6HTaP0eBlwKE7Smy2eDslewF7l3xjwWxjqwzNAnsYgxn2PiGkTKbiQSQytFUiymdtANpk1qOnBOoMGMK%2BWsji7jYlvySSs9o9s24TxD6RqWZpNrltzOU7mfnv3H40SZ3YESzg%3D%3D
     * See Creating an EPN Tracking Link for information on EPN tracking links.
     *
     * @var string
     */
    public $priorityListingPayload = null;

    /**
     * Status change indicator of the listing. Values: ADDED_TO_CAMPAIGN
     * REMOVED_FROM_CAMPAIGN TRACKING_PAYLOAD_REFRESHEDNote: When a listing is removed
     * from the campaign, PriorityListingPayload will be empty. When multiple status
     * changes are returned for a listing, the changeMetadata value will be a
     * pipe-separated string (e.g., ADDED_TO_CAMPAIGN|TRACKING_PAYLOAD_REFRESHED). To
     * use the returned value, you will need to separate the string by pipe (|).
     *
     * @var string
     */
    public $changeMetadata = null;
}
