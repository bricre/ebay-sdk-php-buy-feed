<?php

namespace Ebay\Buy\Feed\Api;

use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class ItemPriority extends AbstractAPI
{
    /**
     * Using this method, you can download a TSV_GZIP (tab separated value gzip) Item
     * Priority feed file, which allows you to track changes (deltas) in the status of
     * your priority items, such as when an item is added or removed from a campaign.
     * The delta feed tracks the changes to the status of items within a category you
     * specify in the input URI. You can also specify a specific date for the feed you
     * want returned. Important: You must consume the daily feeds (Item, Item Group)
     * before consuming the Item Priority feed. This ensures that your inventory is up
     * to date. URLs for this method Production URL:
     * https://api.ebay.com/buy/feed/v1_beta/item_priority? Sandbox URL:
     * https://api.sandbox.ebay.com/buy/feed/v1_beta/item_priority? Downloading feed
     * files Note: Filters are applied to the feed files. For details, see Feed File
     * Filters. When curating the items returned, be sure to code as if these filters
     * are not applied as they can be changed or removed in the future. Priority Item
     * feed files are binary gzip files. If the file is larger than 100 MB, the
     * download must be streamed in chunks. You specify the size of the chunks in bytes
     * using the Range request header. The Content-range response header indicates
     * where in the full resource this partial chunk of data belongs and the total
     * number of bytes in the file. For more information about using these headers, see
     * Retrieving a gzip feed file. In addition to the API, there is an open source
     * Feed SDK written in Java that downloads, combines files into a single file when
     * needed, and unzips the entire feed file. It also lets you specify field filters
     * to curate the items in the file. Note: The response is always a TSV_GZIP file.
     * However for documentation purposes, the response is shown as JSON fields so that
     * the value returned in each column can be explained. The order of the response
     * fields, shows you the order of the columns in the feed file. Restrictions For a
     * list of supported sites and other restrictions, see API Restrictions.
     *
     * @param array $queries options:
     *                       'category_id'	string	An eBay top-level category ID of the items to be returned
     *                       in the feed file. The list of eBay category IDs changes over time and category
     *                       IDs are not the same across all the eBay marketplaces. To get a list of the
     *                       top-level categories for a marketplaces, you can use the Taxonomy API
     *                       getCategoryTree method. This method retrieves the complete category tree for the
     *                       marketplace. The top-level categories are identified by the
     *                       categoryTreeNodeLevel field. For example:
     *                       &nbsp;&nbsp;&quot;categoryTreeNodeLevel&quot;: 1 For details see Get the eBay
     *                       categories of a marketplace. Restriction: Must be a top-level category
     *                       'date'	string	The date of the feed you want returned. This can be up to 14 days
     *                       in the past but cannot be set to a date in the future. Format: yyyyMMdd Note:
     *                       The daily Item feed files are available each day after 9AM MST (US Mountain
     *                       Standard Time), which is -7 hours UTC time. There is a 48 hour latency when
     *                       generating the Item feed files. This means you can download the file for July
     *                       10th on July 12 after 9AM MST. Note: For categories with a large number of
     *                       items, the latency can be up to 72 hours.
     *
     * @return mixed
     */
    public function getFeed(array $queries = [])
    {
        return $this->client->request('getItemPriorityFeed', 'GET', 'item_priority',
            [
                'query' => $queries,
            ]
        );
    }
}
