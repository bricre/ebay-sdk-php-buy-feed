<?php

namespace Ebay\Buy\Feed\Api;

use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class ItemSnapshot extends AbstractAPI
{
    /**
     * The Hourly Snapshot feed file is generated each hour every day for most
     * categories. This method lets you download an Hourly Snapshot TSV_GZIP
     * (tab-separated value gzip) feed file containing the details of all the items
     * that have changed within the specified day and hour for a specific category.
     * This means to generate the 8AM file of items that have changed from 8AM and
     * 8:59AM, the service starts at 9AM. You can retrieve the 8AM snapshot file at
     * 10AM. Snapshot feeds now include new listings. You can check itemCreationDate to
     * identify listings that were newly created within the specified hour. Note:
     * Filters are applied to the feed files. For details, see Feed File Filters. When
     * curating the items returned, be sure to code as if these filters are not applied
     * as they can be changed or removed in the future. You can use the response from
     * this method to update the item details of items stored in your database. By
     * looking at the value of itemSnapshotDate for a given item, you will be able to
     * tell which information is the latest. Important: When the value of the
     * availability column is UNAVAILABLE, only the itemId and availability columns are
     * populated. URLs for this method Production URL:
     * https://api.ebay.com/buy/feed/v1_beta/item_snapshot? Sandbox URL:
     * https://api.sandbox.ebay.com/buy/feed/v1_beta/item_snapshot? Downloading feed
     * files Hourly snapshot feed files are binary gzip files. If the file is larger
     * than 100 MB, the download must be streamed in chunks. You specify the size of
     * the chunks in bytes using the Range request header. The Content-range response
     * header indicates where in the full resource this partial chunk of data belongs
     * and the total number of bytes in the file. For more information about using
     * these headers, see Retrieving a gzip feed file. Note: The response is always a
     * TSV_GZIP file. However for documentation purposes, the response is shown as JSON
     * fields so that the value returned in each column can be explained. The order of
     * the response fields, shows you the order of the columns in the feed file.
     * Restrictions For a list of supported sites and other restrictions, see API
     * Restrictions.
     *
     * @param array $queries options:
     *                       'category_id'	string	An eBay top-level category ID of the items to be returned
     *                       in the feed file. The list of eBay category IDs changes over time and category
     *                       IDs are not the same across all the eBay marketplaces. To get a list of the
     *                       top-level categories for a marketplace, you can use the Taxonomy API
     *                       getCategoryTree method. This method retrieves the complete category tree for the
     *                       marketplace. The top-level categories are identified by the
     *                       categoryTreeNodeLevel field. For example:
     *                       &nbsp;&nbsp;&quot;categoryTreeNodeLevel&quot;: 1 For details see Get Categories
     *                       for Buy APIs. Restriction: Must be a top-level category
     *                       'snapshot_date'	string	The date and hour of the snapshot feed file you want.
     *                       Each file contains the items that changed within the hour in the specified
     *                       category. So, the 9AM file contains the items that changed between 9AM and
     *                       9:59AM on the day specified. It takes 2 hours to generate a snapshot file, which
     *                       means to get the file for 9AM the earliest you could submit the call is at 11AM.
     *                       There are 7 days of Hourly Snapshot feed files available. Note: The Feed API
     *                       uses GMT, so you must convert your local time to GMT. For example, if you lived
     *                       in California and wanted the September 15th 7pm file, you would submit the
     *                       following call:
     *                       item_snapshot?category_id=625&amp;snapshot_date=2017-09-16T02:00:00.000Z Format:
     *                       UTC format (yyyy-MM-ddThh:00:00.000Z) Files are generated on the hour, so
     *                       minutes and seconds are always zeros.
     *
     * @return mixed
     */
    public function getFeed(array $queries = [])
    {
        return $this->client->request('getItemSnapshotFeed', 'GET', 'item_snapshot',
            [
                'query' => $queries,
            ]
        );
    }
}
