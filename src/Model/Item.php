<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the columns returned in the Item feed file.
 */
class Item extends AbstractModel
{
    /**
     * The unique identifier of an item in eBay RESTful format. An example would be
     * v1|1**********2|4**********2.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * The URL to the primary image of the item. This is the URL of the largest image
     * available based on what the seller submitted.
     *
     * @var string
     */
    public $imageUrl = null;

    /**
     * The label of the category. For example: Toys &amp; Hobbies|Action Figures|Comic
     * Book Heroes.
     *
     * @var string
     */
    public $category = null;

    /**
     * The ID of the category of the item. For example: The ID for Toys &amp;
     * Hobbies|Action Figures|Comic Book Heroes is 158671.
     *
     * @var string
     */
    public $categoryId = null;

    /**
     * A comma separated list of the purchase options available for the item. Currently
     * the only supported option is FIXED_PRICE.
     *
     * @var string
     */
    public $buyingOptions = null;

    /**
     * The seller's eBay user name.
     *
     * @var string
     */
    public $sellerUsername = null;

    /**
     * The percentage of the seller's total positive feedback.
     *
     * @var string
     */
    public $sellerFeedbackPercentage = null;

    /**
     * The feedback score of the seller. This value is based on the ratings from eBay
     * members that bought items from this seller.
     *
     * @var string
     */
    public $sellerFeedbackScore = null;

    /**
     * The unique Global Trade Item Number of the item as defined by
     * https://www.gtin.info. This can be a UPC (Universal Product Code), EAN (European
     * Article Number), or an ISBN (International Standard Book Number) value.
     *
     * @var string
     */
    public $gtin = null;

    /**
     * The name brand of the item, such as Nike, Apple, etc.
     *
     * @var string
     */
    public $brand = null;

    /**
     * The manufacturer part number, which is a number that is used in combination with
     * brand to identify a product.
     *
     * @var string
     */
    public $mpn = null;

    /**
     * The eBay product identifier of a product from the eBay product catalog. You can
     * use this value in the Browse API search method to retrieve items for this
     * product and in the Marketing API methods to retrieve 'also viewed' and 'also
     * bought' products to encourage up-selling and cross-selling.
     *
     * @var string
     */
    public $epid = null;

    /**
     * The identifier of the condition of the item. For example, 1000 is the identifier
     * for NEW. For a list of condition names and IDs, see Item Condition IDs and
     * Names. Note: In all eBay marketplaces, Condition ID 2000 now maps to an item
     * condition of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To
     * list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay
     * for this feature. Code so that your app gracefully handles any future changes to
     * this list.
     *
     * @var string
     */
    public $conditionId = null;

    /**
     * The text describing the condition of the item. For a list of condition names,
     * see Item Condition IDs and Names. Note: In all eBay marketplaces, Condition ID
     * 2000 now maps to an item condition of 'Certified Refurbished', and not
     * 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished', a seller
     * must be pre-qualified by eBay for this feature. Code so that your app gracefully
     * handles any future changes to this list.
     *
     * @var string
     */
    public $condition = null;

    /**
     * The price of the item, which can be a discounted price. If it is discounted,
     * information about the discount is returned in the originalPriceValue,
     * originalPriceCurrency, discountAmount, and discountPercentage columns. Note: The
     * price includes the value-added tax (VAT) for applicable jurisdictions when
     * requested from supported marketplaces. In this case, users must pass the
     * X-EBAY-C-MARKETPLACE-ID request header specifying the supported marketplace
     * (such as EBAY_GB) to see the VAT-inclusive pricing. For more information on VAT,
     * refer to VAT Obligations in the EU.
     *
     * @var string
     */
    public $priceValue = null;

    /**
     * The currency used for the price of the item. Generally, this is the currency
     * used by the country of the eBay site offering the item. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/bas:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $priceCurrency = null;

    /**
     * The unique identifier for the item group that contains this item. An item group
     * is an item that has various aspect differences, such as color, size, storage
     * capacity, etc.
     *
     * @var string
     */
    public $primaryItemGroupId = null;

    /**
     * The item group type. Supported value: SELLER_DEFINED_VARIATIONS, indicates that
     * the item group was created by the seller. Code so that your app gracefully
     * handles any future changes to this list.
     *
     * @var string
     */
    public $primaryItemGroupType = null;

    /**
     * A timestamp indicating when the item's sale period will end based on its start
     * date and duration. For Good 'Til Cancelled items, no value is returned in this
     * column. Format: UTC (yyyy-MM-ddThh:mm:ss.sssZ).
     *
     * @var string
     */
    public $itemEndDate = null;

    /**
     * An identifier generated/incremented when a seller revises the item. There are
     * two types of item revisions: Seller changes, such as changing the title eBay
     * system changes, such as changing the quantity when an item is purchased This ID
     * is changed only when the seller makes a change to the item.
     *
     * @var string
     */
    public $sellerItemRevision = null;

    /**
     * The country where the item is physically located.
     *
     * @var string
     */
    public $itemLocationCountry = null;

    /**
     * A semicolon separated list of the name/value pairs for the aspects of the item,
     * which are BASE64 encoded. The aspect label is separated by a pipe (|), the
     * aspect name and value are separated by a colon (:) and the name/value pairs are
     * separated by a semicolon (;). Example without Label &nbsp;&nbsp; Encoded Format:
     * &nbsp;&nbsp;&nbsp;encodedName:encodedValue;encodedName:encodedValue;encodedName:encodedValue
     * &nbsp;&nbsp; Encoded Example (The delimiters are emphasized):
     * &nbsp;&nbsp;&nbsp;U2l6ZQ==:WEw=;Q29sb3I=:UmVk;U2xlZXZlcw==:TG9uZw== &nbsp;&nbsp;
     * Decoded: &nbsp;&nbsp;&nbsp;Size:XL;Color:Red;Sleeves:Long Example with Label
     * &nbsp;&nbsp; Encoded Format:
     * &nbsp;&nbsp;&nbsp;encodedLabel|encodedName:encodedValue;encodedName:encodedValue;encodedLabel|
     * &nbsp;&nbsp; Encoded Example (The delimiters are emphasized):
     * &nbsp;&nbsp;&nbsp;UHJvZHVjdCBJZGVudGlmaWVycw==|R1RJTg==:MDE5MDE5ODA2NjYzMw==;QlJBTkQ=:QXBwbGU=;UHJvZHVjdCBLZXkgRmVhdHVyZXM=|TW9kZWw=:aVBob25lIDc=
     * &nbsp;&nbsp; Decoded: &nbsp;&nbsp;&nbsp;Product
     * Identifiers|GTIN:0190198066633;BRAND:Apple;Product Key Features|Model:iPhone 7
     * Note: The separators ( | : ; ) are not encoded. You must decode each label,
     * name, and value separately. You cannot decode the entire string. For more
     * information, see Encoded Aspects in the Buying Integration Guide.
     *
     * @var string
     */
    public $localizedAspects = null;

    /**
     * An enumeration value representing the eBay status of the seller. Valid Values:
     * TOP_RATED, ABOVE_STANDARD, or an empty value. An empty value indicates a return
     * of anything other than TOP_RATED or ABOVE_STANDARD. Code so that your app
     * gracefully handles any future changes to this list. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/api:SellerTrustLevelEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $sellerTrustLevel = null;

    /**
     * An enumeration value representing the item's availability (possibility of being
     * purchased). Values: AVAILABLE TEMPORARILY_UNAVAILABLE UNAVAILABLE Code so that
     * your app gracefully handles any future changes to this list. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/api:AvailabilityEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $availability = null;

    /**
     * A boolean that indicates whether the images can be altered. If the value is
     * true, you cannot modify the image. Note: Due to image licensing agreements and
     * other legal concerns, modification (including resizing) of some images is
     * strictly prohibited. These images are for display as-is only.
     *
     * @var bool
     */
    public $imageAlteringProhibited = null;

    /**
     * The estimated number of this item that are available for purchase. Because the
     * quantity of an item can change several times within a second, it is impossible
     * to return the exact quantity. So instead of returning quantity, the estimated
     * availability of the item is returned.
     *
     * @var int
     */
    public $estimatedAvailableQuantity = null;

    /**
     * This column has a value only when the seller sets their Display Item Quantity
     * preference to Display &quot;More than 10 available&quot; in your listing (if
     * applicable). The value of this column will be MORE_THAN. This indicates that the
     * seller has more than the 'Display Item Quantity', which is 10, in stock for this
     * item. The following are the Display Item Quantity preferences the seller can
     * set. Display &quot;More than 10 available&quot; in your listing (if applicable)
     * If the seller enables this preference, this column will have a value as long as
     * there are more than 10 of this item in inventory. If the quantity is equal to 10
     * or drops below 10, this column will be null and the estimated quantity of the
     * item is returned in the estimatedAvailableQuantity column. Display the exact
     * quantity in your items If the seller enables this preference, the
     * availabilityThresholdType and availabilityThreshold columns will be null and the
     * estimated quantity of the item is returned in the estimatedAvailableQuantity
     * column. Note: Because the quantity of an item can change several times within a
     * second, it is impossible to return the exact quantity. Code so that your app
     * gracefully handles any future changes to these preferences. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/api:AvailabilityThresholdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $availabilityThresholdType = null;

    /**
     * This column has a value only when the seller sets their 'display item quantity'
     * preference to Display &quot;More than 10 available&quot; in your listing (if
     * applicable). The value of this column will be &quot;10&quot;, which is the
     * threshold value. Code so that your app gracefully handles any future changes to
     * this value.
     *
     * @var int
     */
    public $availabilityThreshold = null;

    /**
     * Indicates whether the seller accepts returns for the item.
     *
     * @var bool
     */
    public $returnsAccepted = null;

    /**
     * The amount of days that the buyer has to return the item after the purchase
     * date. For example, if this value is '30', the return period is 30 days.
     *
     * @var int
     */
    public $returnPeriodValue = null;

    /**
     * An enumeration value that indicates the period of time being used to measure the
     * duration, such as business days, months, or years. TimeDurationUnitEnum is a
     * common type shared by multiple eBay APIs and fields to express the time unit,
     * but for return period duration, this value will always be DAY. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/bas:TimeDurationUnitEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnPeriodUnit = null;

    /**
     * An enumeration value that indicates how a buyer is refunded when an item is
     * returned. Code so that your app gracefully handles any future changes to this
     * list. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/api:RefundMethodEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $refundMethod = null;

    /**
     * An enumeration value that indicates the alternative methods for a full refund
     * when an item is returned. This column will have data if the seller offers the
     * buyer an item replacement or exchange instead of a monetary refund. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/api:ReturnMethodEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnMethod = null;

    /**
     * The party responsible for the return shipping costs when an item is returned.
     * Valid Values: BUYER or SELLER Code so that your app gracefully handles any
     * future changes to this list. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/api:ReturnShippingCostPayerEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnShippingCostPayer = null;

    /**
     * Indicates the credit card service that will be used to process the transaction.
     * If this column contains PAYPAL, you can use the Buy Order API to checkout and
     * purchase the item. If this column is empty, you must use another method for
     * checkout.
     *
     * @var string
     */
    public $acceptedPaymentMethods = null;

    /**
     * A comma-separated list of available delivery options. This column lets you
     * filter out items than cannot be shipped to the buyer. Valid Values:
     * SHIP_TO_HOME, SELLER_ARRANGED_LOCAL_PICKUP, IN_STORE_PICKUP, and
     * PICKUP_DROP_OFF. Code so that your app gracefully handles any future changes to
     * this list. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/api:DeliveryOptionsEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $deliveryOptions = null;

    /**
     * A pipe (|) separated alphabetical list of the geographic countries and regions
     * where the seller will ship the item. If a region is specified, you will need to
     * subtract any countries and regions returned in the shipToExcludedRegions column
     * to fully understand where the seller will ship. The COUNTRY: list is separated
     * from the REGION: list with a semicolon (;). Format Example:
     * COUNTRY:US|BM|GL|MX|PM;REGION:AFRICA|ASIA|CENTRAL_AMERICA_AND_CARIBBEAN|EUROPE|MIDDLE_EAST|OCEANIA|SOUTH_AMERICA|SOUTHEAST_ASIA;
     * Country Values: The two-letter ISO 3166 standard code of the country. Region
     * Values: AFRICA, AMERICAS, ANTARCTIC, ARCTIC, ASIA, AUSTRALIA,
     * CENTRAL_AMERICA_AND_CARIBBEAN, EUROPE, EURO_UNION, GREATER_CHINA, MIDDLE_EAST,
     * NORTH_AMERICA, OCEANIA, REST_OF_ASIA, SOUTHEAST_ASIA, SOUTH_AMERICA, WORLDWIDE
     * Code so that your app gracefully handles any future changes to this list.
     *
     * @var string
     */
    public $shipToIncludedRegions = null;

    /**
     * A pipe (|) separated alphabetical list of the geographic countries and regions
     * where the item cannot be shipped. These countries and regions refine (restrict)
     * the shipToIncludedRegions list. The COUNTRY: list is separated from the REGION:
     * list with a semicolon (;). Format Example:
     * COUNTRY:US|BM|GL|MX|PM;REGION:AFRICA|ASIA|CENTRAL_AMERICA_AND_CARIBBEAN|EUROPE|MIDDLE_EAST|OCEANIA|SOUTH_AMERICA|SOUTHEAST_ASIA;
     * Country Values: The two-letter ISO 3166 standard code of the country. Region
     * Values: AFRICA, AMERICAS, ANTARCTIC, ARCTIC, ASIA, AUSTRALIA,
     * CENTRAL_AMERICA_AND_CARIBBEAN, EUROPE, EURO_UNION, GREATER_CHINA, MIDDLE_EAST,
     * NORTH_AMERICA, OCEANIA, REST_OF_ASIA, SOUTHEAST_ASIA, SOUTH_AMERICA, WORLDWIDE
     * Code so that your app gracefully handles any future changes to this list.
     *
     * @var string
     */
    public $shipToExcludedRegions = null;

    /**
     * The ePID (eBay Product ID of a product in the eBay product catalog) for the
     * item, which has been programmatically determined by eBay using the item's title,
     * aspects, and other data. If the seller actually provided an ePID at listing time
     * for the item, the ePID value is returned in the epid column instead.
     *
     * @var string
     */
    public $inferredEpid = null;

    /**
     * The GTIN (Global Trade Item Number) of the product as defined by
     * https://www.gtin.info, which as been programmatically determined by eBay. This
     * can be a UPC (Universal Product Code), EAN (European Article Number), or an ISBN
     * (International Standard Book Number) value. If the seller provided a GTIN for
     * the item, the seller's value is returned in the gtin column.
     *
     * @var string
     */
    public $inferredGtin = null;

    /**
     * The name brand for the item, such as Nike or Apple, which has been
     * programmatically determined by eBay. To identify the product, this is always
     * used along with MPN. If the seller provided a brand for the item, the seller's
     * value is returned in the brand column.
     *
     * @var string
     */
    public $inferredBrand = null;

    /**
     * The MPN (Manufacturer's Part Number) for the item, which has been
     * programmatically determined by eBay. To identify the product, this is always
     * used along with brand. If the seller provided a MPN for the item, the seller's
     * value is returned in the mpn column.
     *
     * @var string
     */
    public $inferredMpn = null;

    /**
     * A semicolon separated list of the name/value pairs for the aspects of the item,
     * which are BASE64 encoded. These aspects have been programmatically determined by
     * eBay. If the seller provided aspects for the item, the seller's values are
     * returned in the localizedAspects column. The aspect label is separated by a pipe
     * (|), the aspect name and value are separated by a colon (:) and the name/value
     * pairs are separated by a semicolon (;). Example without Label &nbsp;&nbsp;
     * Encoded Format:
     * &nbsp;&nbsp;&nbsp;encodedName:encodedValue;encodedName:encodedValue;encodedName:encodedValue
     * &nbsp;&nbsp; Encoded Example (The delimiters are emphasized):
     * &nbsp;&nbsp;&nbsp;U2l6ZQ==:WEw=;Q29sb3I=:UmVk;U2xlZXZlcw==:TG9uZw== &nbsp;&nbsp;
     * Decoded: &nbsp;&nbsp;&nbsp;Size:XL;Color:Red;Sleeves:Long Example with Label
     * &nbsp;&nbsp; Encoded Format:
     * &nbsp;&nbsp;&nbsp;encodedLabel|encodedName:encodedValue;encodedName:encodedValue;encodedLabel|
     * &nbsp;&nbsp; Encoded Example (The delimiters are emphasized):
     * &nbsp;&nbsp;&nbsp;UHJvZHVjdCBJZGVudGlmaWVycw==|R1RJTg==:MDE5MDE5ODA2NjYzMw==;QlJBTkQ=:QXBwbGU=;UHJvZHVjdCBLZXkgRmVhdHVyZXM=|TW9kZWw=:aVBob25lIDc=
     * &nbsp;&nbsp; Decoded: &nbsp;&nbsp;&nbsp;Product
     * Identifiers|GTIN:0190198066633;BRAND:Apple;Product Key Features|Model:iPhone 7
     * Note: The separators ( | : ; ) are not encoded. You must decode each label,
     * name, and value separately. You cannot decode the entire string. For more
     * information, see Encoded Aspects in the Buying Integration Guide.
     *
     * @var string
     */
    public $inferredLocalizedAspects = null;

    /**
     * A pipe separated (|) list of URLs for the additional images of the item. These
     * images are in addition to the primary image, which is returned in the imageUrl
     * column. Note: This column can contain multiple values.
     *
     * @var string
     */
    public $additionalImageUrls = null;

    /**
     * The original selling price of the item. This lets you surface a strikethrough
     * price for the item.
     *
     * @var string
     */
    public $originalPriceValue = null;

    /**
     * The currency of the originalPriceValue of the item and the discountAmount. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/bas:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $originalPriceCurrency = null;

    /**
     * The calculated amount of the discount (originalPriceValue - priceValue). For
     * example, if originalPriceValue is 70 and priceValue is 56, this value would be
     * 14. Note: The currency shown in originalPriceCurrency is used for both
     * discountAmount and originalPriceCurrency.
     *
     * @var string
     */
    public $discountAmount = null;

    /**
     * The calculated discount percentage. For example, if originalPriceValue is 70 and
     * discountAmount is 14, this value will be 20.
     *
     * @var string
     */
    public $discountPercentage = null;

    /**
     * Indicates the European energy efficiency rating (EEK) of the item. Data is
     * returned in this column only if the seller specified the energy efficiency
     * rating. The rating is a set of energy efficiency classes from A to G, where 'A'
     * is the most energy efficient and 'G' is the least efficient. This rating helps
     * buyers choose between various models. To retrieve the manufacturer's
     * specifications for this item, when they are available, use the getItem method in
     * the Browse API. The information is returned in the productFicheWebUrl field.
     *
     * @var string
     */
    public $energyEfficiencyClass = null;

    /**
     * A pipe separated list of the qualified programs available for the item, such as
     * EBAY_PLUS and AUTHENTICITY_GUARANTEE. eBay Plus is a premium account option for
     * buyers, which provides benefits such as fast free domestic shipping and free
     * returns on selected items. Top-Rated eBay sellers must opt in to eBay Plus to be
     * able to offer the program on qualifying listings. Sellers must commit to
     * next-day delivery of those items. Note: eBay Plus is available only to buyers in
     * Germany, Austria, and Australia marketplaces. The eBay Authenticity Guarantee
     * program enables third-party authenticators to perform authentication
     * verification inspections on items such as watches and sneakers.
     *
     * @var string
     */
    public $qualifiedPrograms = null;

    /**
     * The number of items in a lot. In other words, a lot size is the number of items
     * that are being sold together. A lot is a set of two or more items included in a
     * single listing that must be purchased together in a single order line item. All
     * the items in the lot are the same but there can be multiple items in a single
     * lot, such as the package of batteries shown in the example below. For example:
     * Item Lot Definition Lot Size A package of 24 AA batteries A box of 10 packages
     * 10 A P235/75-15 Goodyear tire 4 tires 4 Fashion Jewelry Rings Package of 100
     * assorted rings 100 Note: Lots are not supported in all categories.
     *
     * @var int
     */
    public $lotSize = null;

    /**
     * The unit of measurement used for the package dimensions, such as INCH, FEET,
     * CENTIMETER, or METER. Code so that your app gracefully handles any future
     * changes to this list. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/api:LengthUnitOfMeasureEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $lengthUnitOfMeasure = null;

    /**
     * The width of the shipping package that contains the item.
     *
     * @var string
     */
    public $packageWidth = null;

    /**
     * The height of the shipping package that contains the item.
     *
     * @var string
     */
    public $packageHeight = null;

    /**
     * The length of the shipping package that contains the item.
     *
     * @var string
     */
    public $packageLength = null;

    /**
     * The unit of measurement used for the package weight, such as POUND, KILOGRAM,
     * OUNCE, or GRAM. Code so that your app gracefully handles any future changes to
     * this list. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/api:WeightUnitOfMeasureEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $weightUnitOfMeasure = null;

    /**
     * The weight of the package that contains the item.
     *
     * @var string
     */
    public $packageWeight = null;

    /**
     * The name of the shipping provider, such as FedEx, or USPS.
     *
     * @var string
     */
    public $shippingCarrierCode = null;

    /**
     * The type of shipping service. For example, USPS First Class.
     *
     * @var string
     */
    public $shippingServiceCode = null;

    /**
     * The type of a shipping option, such as EXPEDITED, ONE_DAY, STANDARD, ECONOMY,
     * PICKUP, etc.
     *
     * @var string
     */
    public $shippingType = null;

    /**
     * The final shipping cost for all the items after all discounts are applied. Note:
     * The price includes the value-added tax (VAT) for applicable jurisdictions when
     * requested from supported marketplaces. In this case, users must pass the
     * X-EBAY-C-MARKETPLACE-ID request header specifying the supported marketplace
     * (such as EBAY_GB) to see the VAT-inclusive pricing. For more information on VAT,
     * refer to VAT Obligations in the EU.
     *
     * @var string
     */
    public $shippingCost = null;

    /**
     * Indicates the class of the shipping cost. Valid Values: FIXED or CALCULATED.
     *
     * @var string
     */
    public $shippingCostType = null;

    /**
     * Any per item additional shipping costs for a multi-item purchase. For example,
     * let's say the shipping cost for a power cord is $3. But for an additional cord,
     * the shipping cost is only $1. So if you bought 3 cords, the shippingCost would
     * be $3 and this value would be $2 ($1 for each additional item).
     *
     * @var string
     */
    public $additionalShippingCostPerUnit = null;

    /**
     * The number of items used when calculating the estimation information.
     *
     * @var int
     */
    public $quantityUsedForEstimate = null;

    /**
     * This is the price per unit for the item. Some European countries require
     * listings for certain types of products to include the price per unit so buyers
     * can accurately compare prices. For example: &quot;unitPricingMeasure&quot;:
     * &quot;100g&quot;, &quot;unitPrice&quot;: { &nbsp;&nbsp;&quot;value&quot;:
     * &quot;7.99&quot;, &nbsp;&nbsp;&quot;currency&quot;: &quot;GBP&quot;.
     *
     * @var string
     */
    public $unitPrice = null;

    /**
     * The designation, such as size, weight, volume, count, etc., that was used to
     * specify the quantity of the item. This helps buyers compare prices. For example,
     * the following tells the buyer that the item is 7.99 per 100 grams.
     * &quot;unitPricingMeasure&quot;: &quot;100g&quot;, &quot;unitPrice&quot;: {
     * &nbsp;&nbsp;&quot;value&quot;: &quot;7.99&quot;,
     * &nbsp;&nbsp;&quot;currency&quot;: &quot;GBP&quot;.
     *
     * @var string
     */
    public $unitPricingMeasure = null;

    /**
     * The unique identifier of the eBay listing that contains the item. This is the
     * traditional/legacy ID that is often seen in the URL of the listing View Item
     * page.
     *
     * @var string
     */
    public $legacyItemId = null;

    /**
     * A pipe-separated list of alerts available for the item. For example, if the
     * DELAYED_DELIVERY alert was returned for an item, it would indicate a delay in
     * shipping by the seller.
     *
     * @var string
     */
    public $alerts = null;

    /**
     * A string value that specifies whether the seller is a business or an individual.
     * This is determined when the seller registers with eBay. If the seller registers
     * for a business account, the value returned in this field will be BUSINESS. If
     * the seller registers for a private account, the value returned in this field
     * will be INDIVIDUAL. Note: This designation is required by the tax laws in some
     * countries. This field is returned only on the following sites: EBAY_AT, EBAY_BE,
     * EBAY_CH, EBAY_DE, EBAY_ES, EBAY_FR, EBAY_GB, EBAY_IE, EBAY_IT, and EBAY_PL. Code
     * so that your app gracefully handles any future changes to this list. Valid
     * Values: BUSINESS or INDIVIDUAL.
     *
     * @var string
     */
    public $sellerAccountType = null;

    /**
     * The URL to the image that shows the information on the tyre label.
     *
     * @var string
     */
    public $tyreLabelImageUrl = null;

    /**
     * EPN (eBay Partner Network) publishers append this value to their affiliate
     * tracking URL when using an EPN tracking link to track changes that occur to
     * Priority Listing items.
     * Example:amdata=enc%3AAQAFAAAAkB1DmsmXf%2BqZ%2BCEMGdebW6oR75GCMdBmc4MCQ%2FCEPqgKHbT0jdWhPwfY5LdUs6HTaP0eBlwKE7Smy2eDslewF7l3xjwWxjqwzNAnsYgxn2PiGkTKbiQSQytFUiymdtANpk1qOnBOoMGMK%2BWsji7jYlvySSs9o9s24TxD6RqWZpNrltzOU7mfnv3H40SZ3YESzg%3D%3D
     * See Creating an EPN Tracking Link for information on EPN tracking links.
     *
     * @var string
     */
    public $priorityListingPayload = null;

    /**
     * A timestamp indicating when the item was created. The format is UTC
     * (yyyy-MM-ddThh:mm:ss.sssZ).
     *
     * @var string
     */
    public $itemCreationDate = null;

    /**
     * The URL of the View Item page of the item. For example: Single SKU:
     * https://www.ebay.de/itm/2********0 MSKU:
     * https://www.ebay.com/itm/2********9?var=5********2.
     *
     * @var string
     */
    public $itemWebUrl = null;

    /**
     * URL to the gallery or default image of the item. The other images of the item
     * are returned in the additionalImageUrls field. For example
     * https://i.ebayimg.com/00/s/M********w/z/W********p/$_1.JPG?set_id=8********F.
     *
     * @var string
     */
    public $defaultImageUrl = null;

    /**
     * The URL of the View Item page of the item, with the affiliate tracking ID
     * appended to it. For example
     * https://www.ebay.de/itm/2********0?mkevt=1&amp;mkcid=1&amp;mkrid=707-53477-19255-0&amp;campid=CAMPAIGNID&amp;toolid=2***6&amp;customid=CUSTOMID.
     *
     * @var string
     */
    public $itemAffiliateWebUrl = null;

    /**
     * The age group that the product is recommended for. Valid values: newborn,
     * infant, toddler, kids, adult.
     *
     * @var string
     */
    public $ageGroup = null;

    /**
     * The color of the item.
     *
     * @var string
     */
    public $color = null;

    /**
     * The size of the item.
     *
     * @var string
     */
    public $size = null;

    /**
     * In cases where items could vary by gender, this specifies which gender the
     * product is for. Valid values: male, female, unisex.
     *
     * @var string
     */
    public $gender = null;

    /**
     * The material that the item is made of.
     *
     * @var string
     */
    public $material = null;

    /**
     * For an item that is priced by the unit, the total number of units that are on
     * offer. For example, if the item is priced by the meter and 50 cm is on offer,
     * the totalUnits would be 0.5 m.
     *
     * @var string
     */
    public $totalUnits = null;
}
