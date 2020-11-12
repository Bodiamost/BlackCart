<?php

namespace App\Services;

// Fake data
class FakeData
{
    public $stores = ['1' =>'shopify', '2' => 'woocommerce', '3' => 'smth_else'];

    public function fakeShopifyProductsResponse () {
        return json_decode('{
            "products": [
            {
                "id": 632910392,
                "title": "IPod Nano - 8GB",
                "body_html": "<p>It\'s the small iPod with one very big idea: Video. Now the world\'s most popular music player, available in 4GB and 8GB models, lets you enjoy TV shows, movies, video podcasts, and more. The larger, brighter display means amazing picture quality. In six eye-catching colors, iPod nano is stunning all around. And with models starting at just $149, little speaks volumes.</p>",
                "vendor": "Apple",
                "product_type": "Cult Products",
                "created_at": "2020-11-04T16:46:58-05:00",
                "handle": "ipod-nano",
                "updated_at": "2020-11-04T16:46:58-05:00",
                "published_at": "2007-12-31T19:00:00-05:00",
                "template_suffix": null,
                "published_scope": "web",
                "tags": "Emotive, Flash Memory, MP3, Music",
                "admin_graphql_api_id": "gid://shopify/Product/632910392",
                "variants": [
                {
                    "id": 808950810,
                    "product_id": 632910392,
                    "title": "Pink",
                    "price": "199.00",
                    "sku": "IPOD2008PINK",
                    "position": 1,
                    "inventory_policy": "continue",
                    "compare_at_price": null,
                    "fulfillment_service": "manual",
                    "inventory_management": "shopify",
                    "option1": "Pink",
                    "option2": null,
                    "option3": null,
                    "created_at": "2020-11-04T16:46:58-05:00",
                    "updated_at": "2020-11-04T16:46:58-05:00",
                    "taxable": true,
                    "barcode": "1234_pink",
                    "grams": 567,
                    "image_id": 562641783,
                    "weight": 1.25,
                    "weight_unit": "lb",
                    "inventory_item_id": 808950810,
                    "inventory_quantity": 10,
                    "old_inventory_quantity": 10,
                    "requires_shipping": true,
                    "admin_graphql_api_id": "gid://shopify/ProductVariant/808950810",
                    "presentment_prices": [
                    {
                        "price": {
                        "currency_code": "USD",
                        "amount": "199.00"
                        },
                        "compare_at_price": null
                    }
                    ]
                },
                {
                    "id": 49148385,
                    "product_id": 632910392,
                    "title": "Red",
                    "price": "199.00",
                    "sku": "IPOD2008RED",
                    "position": 2,
                    "inventory_policy": "continue",
                    "compare_at_price": null,
                    "fulfillment_service": "manual",
                    "inventory_management": "shopify",
                    "option1": "Red",
                    "option2": null,
                    "option3": null,
                    "created_at": "2020-11-04T16:46:58-05:00",
                    "updated_at": "2020-11-04T16:46:58-05:00",
                    "taxable": true,
                    "barcode": "1234_red",
                    "grams": 567,
                    "image_id": null,
                    "weight": 1.25,
                    "weight_unit": "lb",
                    "inventory_item_id": 49148385,
                    "inventory_quantity": 20,
                    "old_inventory_quantity": 20,
                    "requires_shipping": true,
                    "admin_graphql_api_id": "gid://shopify/ProductVariant/49148385",
                    "presentment_prices": [
                    {
                        "price": {
                        "currency_code": "USD",
                        "amount": "199.00"
                        },
                        "compare_at_price": null
                    }
                    ]
                },
                {
                    "id": 39072856,
                    "product_id": 632910392,
                    "title": "Green",
                    "price": "199.00",
                    "sku": "IPOD2008GREEN",
                    "position": 3,
                    "inventory_policy": "continue",
                    "compare_at_price": null,
                    "fulfillment_service": "manual",
                    "inventory_management": "shopify",
                    "option1": "Green",
                    "option2": null,
                    "option3": null,
                    "created_at": "2020-11-04T16:46:58-05:00",
                    "updated_at": "2020-11-04T16:46:58-05:00",
                    "taxable": true,
                    "barcode": "1234_green",
                    "grams": 567,
                    "image_id": null,
                    "weight": 1.25,
                    "weight_unit": "lb",
                    "inventory_item_id": 39072856,
                    "inventory_quantity": 30,
                    "old_inventory_quantity": 30,
                    "requires_shipping": true,
                    "admin_graphql_api_id": "gid://shopify/ProductVariant/39072856",
                    "presentment_prices": [
                    {
                        "price": {
                        "currency_code": "USD",
                        "amount": "199.00"
                        },
                        "compare_at_price": null
                    }
                    ]
                },
                {
                    "id": 457924702,
                    "product_id": 632910392,
                    "title": "Black",
                    "price": "199.00",
                    "sku": "IPOD2008BLACK",
                    "position": 4,
                    "inventory_policy": "continue",
                    "compare_at_price": null,
                    "fulfillment_service": "manual",
                    "inventory_management": "shopify",
                    "option1": "Black",
                    "option2": null,
                    "option3": null,
                    "created_at": "2020-11-04T16:46:58-05:00",
                    "updated_at": "2020-11-04T16:46:58-05:00",
                    "taxable": true,
                    "barcode": "1234_black",
                    "grams": 567,
                    "image_id": null,
                    "weight": 1.25,
                    "weight_unit": "lb",
                    "inventory_item_id": 457924702,
                    "inventory_quantity": 40,
                    "old_inventory_quantity": 40,
                    "requires_shipping": true,
                    "admin_graphql_api_id": "gid://shopify/ProductVariant/457924702",
                    "presentment_prices": [
                    {
                        "price": {
                        "currency_code": "USD",
                        "amount": "199.00"
                        },
                        "compare_at_price": null
                    }
                    ]
                }
                ],
                "options": [
                {
                    "id": 594680422,
                    "product_id": 632910392,
                    "name": "Color",
                    "position": 1,
                    "values": [
                    "Pink",
                    "Red",
                    "Green",
                    "Black"
                    ]
                }
                ],
                "images": [
                {
                    "id": 850703190,
                    "product_id": 632910392,
                    "position": 1,
                    "created_at": "2020-11-04T16:46:58-05:00",
                    "updated_at": "2020-11-04T16:46:58-05:00",
                    "alt": null,
                    "width": 123,
                    "height": 456,
                    "src": "https://cdn.shopify.com/s/files/1/0006/9093/3842/products/ipod-nano.png?v=1604526418",
                    "variant_ids": [],
                    "admin_graphql_api_id": "gid://shopify/ProductImage/850703190"
                },
                {
                    "id": 562641783,
                    "product_id": 632910392,
                    "position": 2,
                    "created_at": "2020-11-04T16:46:58-05:00",
                    "updated_at": "2020-11-04T16:46:58-05:00",
                    "alt": null,
                    "width": 123,
                    "height": 456,
                    "src": "https://cdn.shopify.com/s/files/1/0006/9093/3842/products/ipod-nano-2.png?v=1604526418",
                    "variant_ids": [
                    808950810
                    ],
                    "admin_graphql_api_id": "gid://shopify/ProductImage/562641783"
                }
                ],
                "image": {
                "id": 850703190,
                "product_id": 632910392,
                "position": 1,
                "created_at": "2020-11-04T16:46:58-05:00",
                "updated_at": "2020-11-04T16:46:58-05:00",
                "alt": null,
                "width": 123,
                "height": 456,
                "src": "https://cdn.shopify.com/s/files/1/0006/9093/3842/products/ipod-nano.png?v=1604526418",
                "variant_ids": [],
                "admin_graphql_api_id": "gid://shopify/ProductImage/850703190"
                }
            },
            {
                "id": 921728736,
                "title": "IPod Touch 8GB",
                "body_html": "<p>The iPod Touch has the iPhone\'s multi-touch interface, with a physical home button off the touch screen. The home screen has a list of buttons for the available applications.</p>",
                "vendor": "Apple",
                "product_type": "Cult Products",
                "created_at": "2020-11-04T16:46:58-05:00",
                "handle": "ipod-touch",
                "updated_at": "2020-11-04T16:46:58-05:00",
                "published_at": "2008-09-25T20:00:00-04:00",
                "template_suffix": null,
                "published_scope": "web",
                "tags": "",
                "admin_graphql_api_id": "gid://shopify/Product/921728736",
                "variants": [
                {
                    "id": 447654529,
                    "product_id": 921728736,
                    "title": "Black",
                    "price": "199.00",
                    "sku": "IPOD2009BLACK",
                    "position": 1,
                    "inventory_policy": "continue",
                    "compare_at_price": null,
                    "fulfillment_service": "shipwire-app",
                    "inventory_management": "shipwire-app",
                    "option1": "Black",
                    "option2": null,
                    "option3": null,
                    "created_at": "2020-11-04T16:46:58-05:00",
                    "updated_at": "2020-11-04T16:46:58-05:00",
                    "taxable": true,
                    "barcode": "1234_black",
                    "grams": 567,
                    "image_id": null,
                    "weight": 1.25,
                    "weight_unit": "lb",
                    "inventory_item_id": 447654529,
                    "inventory_quantity": 13,
                    "old_inventory_quantity": 13,
                    "requires_shipping": true,
                    "admin_graphql_api_id": "gid://shopify/ProductVariant/447654529",
                    "presentment_prices": [
                    {
                        "price": {
                        "currency_code": "USD",
                        "amount": "199.00"
                        },
                        "compare_at_price": null
                    }
                    ]
                }
                ],
                "options": [
                {
                    "id": 891236591,
                    "product_id": 921728736,
                    "name": "Title",
                    "position": 1,
                    "values": [
                    "Black"
                    ]
                }
                ],
                "images": [],
                "image": null
            }
        ]}');
    }

    public function fakeWooCommerceProductsResponse () {
        return json_decode('[{
            "id": 799,
            "name": "Ship Your Idea",
            "slug": "ship-your-idea-22",
            "permalink": "https://example.com/product/ship-your-idea-22/",
            "date_created": "2017-03-23T17:03:12",
            "date_created_gmt": "2017-03-23T20:03:12",
            "date_modified": "2017-03-23T17:03:12",
            "date_modified_gmt": "2017-03-23T20:03:12",
            "type": "variable",
            "status": "publish",
            "featured": false,
            "catalog_visibility": "visible",
            "description": "<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>\n",
            "short_description": "<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\n",
            "sku": "",
            "price": "",
            "regular_price": "",
            "sale_price": "",
            "date_on_sale_from": null,
            "date_on_sale_from_gmt": null,
            "date_on_sale_to": null,
            "date_on_sale_to_gmt": null,
            "price_html": "",
            "on_sale": false,
            "purchasable": false,
            "total_sales": 0,
            "virtual": false,
            "downloadable": false,
            "downloads": [],
            "download_limit": -1,
            "download_expiry": -1,
            "external_url": "",
            "button_text": "",
            "tax_status": "taxable",
            "tax_class": "",
            "manage_stock": false,
            "stock_quantity": null,
            "stock_status": "instock",
            "backorders": "no",
            "backorders_allowed": false,
            "backordered": false,
            "sold_individually": false,
            "weight": "",
            "dimensions": {
                "length": "",
                "width": "",
                "height": ""
            },
            "shipping_required": true,
            "shipping_taxable": true,
            "shipping_class": "",
            "shipping_class_id": 0,
            "reviews_allowed": true,
            "average_rating": "0.00",
            "rating_count": 0,
            "related_ids": [
                31,
                22,
                369,
                414,
                56
            ],
            "upsell_ids": [],
            "cross_sell_ids": [],
            "parent_id": 0,
            "purchase_note": "",
            "categories": [
                {
                "id": 9,
                "name": "Clothing",
                "slug": "clothing"
                },
                {
                "id": 14,
                "name": "T-shirts",
                "slug": "t-shirts"
                }
            ],
            "tags": [],
            "images": [
                {
                "id": 795,
                "date_created": "2017-03-23T14:03:08",
                "date_created_gmt": "2017-03-23T20:03:08",
                "date_modified": "2017-03-23T14:03:08",
                "date_modified_gmt": "2017-03-23T20:03:08",
                "src": "https://example.com/wp-content/uploads/2017/03/T_4_front-11.jpg",
                "name": "",
                "alt": ""
                },
                {
                "id": 796,
                "date_created": "2017-03-23T14:03:09",
                "date_created_gmt": "2017-03-23T20:03:09",
                "date_modified": "2017-03-23T14:03:09",
                "date_modified_gmt": "2017-03-23T20:03:09",
                "src": "https://example.com/wp-content/uploads/2017/03/T_4_back-10.jpg",
                "name": "",
                "alt": ""
                },
                {
                "id": 797,
                "date_created": "2017-03-23T14:03:10",
                "date_created_gmt": "2017-03-23T20:03:10",
                "date_modified": "2017-03-23T14:03:10",
                "date_modified_gmt": "2017-03-23T20:03:10",
                "src": "https://example.com/wp-content/uploads/2017/03/T_3_front-10.jpg",
                "name": "",
                "alt": ""
                },
                {
                "id": 798,
                "date_created": "2017-03-23T14:03:11",
                "date_created_gmt": "2017-03-23T20:03:11",
                "date_modified": "2017-03-23T14:03:11",
                "date_modified_gmt": "2017-03-23T20:03:11",
                "src": "https://example.com/wp-content/uploads/2017/03/T_3_back-10.jpg",
                "name": "",
                "alt": ""
                }
            ],
            "attributes": [
                {
                "id": 6,
                "name": "Color",
                "position": 0,
                "visible": false,
                "variation": true,
                "options": [
                    "Black",
                    "Green"
                ]
                },
                {
                "id": 0,
                "name": "Size",
                "position": 0,
                "visible": true,
                "variation": true,
                "options": [
                    "S",
                    "M"
                ]
                }
            ],
            "default_attributes": [],
            "variations": [733],
            "grouped_products": [],
            "menu_order": 0,
            "meta_data": [],
            "_links": {
                "self": [
                {
                    "href": "https://example.com/wp-json/wc/v3/products/799"
                }
                ],
                "collection": [
                {
                    "href": "https://example.com/wp-json/wc/v3/products"
                }
                ]
            }
            },
            {
            "id": 794,
            "name": "Premium Quality",
            "slug": "premium-quality-19",
            "permalink": "https://example.com/product/premium-quality-19/",
            "date_created": "2017-03-23T17:01:14",
            "date_created_gmt": "2017-03-23T20:01:14",
            "date_modified": "2017-03-23T17:01:14",
            "date_modified_gmt": "2017-03-23T20:01:14",
            "type": "simple",
            "status": "publish",
            "featured": false,
            "catalog_visibility": "visible",
            "description": "<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>\n",
            "short_description": "<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\n",
            "sku": "",
            "price": "21.99",
            "regular_price": "21.99",
            "sale_price": "",
            "date_on_sale_from": null,
            "date_on_sale_from_gmt": null,
            "date_on_sale_to": null,
            "date_on_sale_to_gmt": null,
            "price_html": "<span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">&#36;</span>21.99</span>",
            "on_sale": false,
            "purchasable": true,
            "total_sales": 0,
            "virtual": false,
            "downloadable": false,
            "downloads": [],
            "download_limit": -1,
            "download_expiry": -1,
            "external_url": "",
            "button_text": "",
            "tax_status": "taxable",
            "tax_class": "",
            "manage_stock": false,
            "stock_quantity": null,
            "stock_status": "instock",
            "backorders": "no",
            "backorders_allowed": false,
            "backordered": false,
            "sold_individually": false,
            "weight": "",
            "dimensions": {
                "length": "",
                "width": "",
                "height": ""
            },
            "shipping_required": true,
            "shipping_taxable": true,
            "shipping_class": "",
            "shipping_class_id": 0,
            "reviews_allowed": true,
            "average_rating": "0.00",
            "rating_count": 0,
            "related_ids": [
                463,
                47,
                31,
                387,
                458
            ],
            "upsell_ids": [],
            "cross_sell_ids": [],
            "parent_id": 0,
            "purchase_note": "",
            "categories": [
                {
                "id": 9,
                "name": "Clothing",
                "slug": "clothing"
                },
                {
                "id": 14,
                "name": "T-shirts",
                "slug": "t-shirts"
                }
            ],
            "tags": [],
            "images": [
                {
                "id": 792,
                "date_created": "2017-03-23T14:01:13",
                "date_created_gmt": "2017-03-23T20:01:13",
                "date_modified": "2017-03-23T14:01:13",
                "date_modified_gmt": "2017-03-23T20:01:13",
                "src": "https://example.com/wp-content/uploads/2017/03/T_2_front-4.jpg",
                "name": "",
                "alt": ""
                },
                {
                "id": 793,
                "date_created": "2017-03-23T14:01:14",
                "date_created_gmt": "2017-03-23T20:01:14",
                "date_modified": "2017-03-23T14:01:14",
                "date_modified_gmt": "2017-03-23T20:01:14",
                "src": "https://example.com/wp-content/uploads/2017/03/T_2_back-2.jpg",
                "name": "",
                "alt": ""
                }
            ],
            "attributes": [],
            "default_attributes": [
                {
                "id": 6,
                "name": "Color",
                "option": "black"
                },
                {
                "id": 0,
                "name": "Size",
                "option": "S"
                }
            ],
            "variations": [],
            "grouped_products": [],
            "menu_order": 0,
            "meta_data": [],
            "_links": {
                "self": [
                {
                    "href": "https://example.com/wp-json/wc/v3/products/794"
                }
                ],
                "collection": [
                {
                    "href": "https://example.com/wp-json/wc/v3/products"
                }
                ]
            }
            }
        ]');
    }

    public function fakeWooCommerceProductVariationsResponse() {
        return json_decode('[{
            "id": 733,
            "date_created": "2017-03-23T00:53:11",
            "date_created_gmt": "2017-03-23T03:53:11",
            "date_modified": "2017-03-23T00:53:11",
            "date_modified_gmt": "2017-03-23T03:53:11",
            "description": "",
            "permalink": "https://example.com/product/ship-your-idea/?attribute_pa_color=green",
            "sku": "",
            "price": "9.00",
            "regular_price": "9.00",
            "sale_price": "",
            "date_on_sale_from": null,
            "date_on_sale_from_gmt": null,
            "date_on_sale_to": null,
            "date_on_sale_to_gmt": null,
            "on_sale": false,
            "status": "publish",
            "purchasable": true,
            "virtual": false,
            "downloadable": false,
            "downloads": [],
            "download_limit": -1,
            "download_expiry": -1,
            "tax_status": "taxable",
            "tax_class": "",
            "manage_stock": false,
            "stock_quantity": null,
            "stock_status": "instock",
            "backorders": "no",
            "backorders_allowed": false,
            "backordered": false,
            "weight": "",
            "dimensions": {
                "length": "",
                "width": "",
                "height": ""
            },
            "shipping_class": "",
            "shipping_class_id": 0,
            "image": {
                "id": 425,
                "date_created": "2016-10-19T12:21:16",
                "date_created_gmt": "2016-10-19T16:21:16",
                "date_modified": "2016-10-19T12:21:16",
                "date_modified_gmt": "2016-10-19T16:21:16",
                "src": "https://example.com/wp-content/uploads/2016/10/T_3_front-12.jpg",
                "name": "",
                "alt": ""
            },
            "attributes": [
                {
                "id": 6,
                "name": "Color",
                "option": "Green"
                }
            ],
            "menu_order": 0,
            "meta_data": [],
            "_links": {
                "self": [
                {
                    "href": "https://example.com/wp-json/wc/v3/products/22/variations/733"
                }
                ],
                "collection": [
                {
                    "href": "https://example.com/wp-json/wc/v3/products/22/variations"
                }
                ],
                "up": [
                {
                    "href": "https://example.com/wp-json/wc/v3/products/22"
                }
                ]
            }
            },
            {
            "id": 732,
            "date_created": "2017-03-23T00:36:38",
            "date_created_gmt": "2017-03-23T03:36:38",
            "date_modified": "2017-03-23T00:36:38",
            "date_modified_gmt": "2017-03-23T03:36:38",
            "description": "",
            "permalink": "https://example.com/product/ship-your-idea/?attribute_pa_color=black",
            "sku": "",
            "price": "9.00",
            "regular_price": "9.00",
            "sale_price": "",
            "date_on_sale_from": null,
            "date_on_sale_from_gmt": null,
            "date_on_sale_to": null,
            "date_on_sale_to_gmt": null,
            "on_sale": false,
            "status": "publish",
            "purchasable": true,
            "virtual": false,
            "downloadable": false,
            "downloads": [],
            "download_limit": -1,
            "download_expiry": -1,
            "tax_status": "taxable",
            "tax_class": "",
            "manage_stock": false,
            "stock_quantity": null,
            "stock_status": "instock",
            "backorders": "no",
            "backorders_allowed": false,
            "backordered": false,
            "weight": "",
            "dimensions": {
                "length": "",
                "width": "",
                "height": ""
            },
            "shipping_class": "",
            "shipping_class_id": 0,
            "image": {
                "id": 423,
                "date_created": "2016-10-19T12:21:14",
                "date_created_gmt": "2016-10-19T16:21:14",
                "date_modified": "2016-10-19T12:21:14",
                "date_modified_gmt": "2016-10-19T16:21:14",
                "src": "https://example.com/wp-content/uploads/2016/10/T_4_front-12.jpg",
                "name": "",
                "alt": ""
            },
            "attributes": [
                {
                "id": 6,
                "name": "Color",
                "option": "Black"
                }
            ],
            "menu_order": 0,
            "meta_data": [],
            "_links": {
                "self": [
                {
                    "href": "https://example.com/wp-json/wc/v3/products/22/variations/732"
                }
                ],
                "collection": [
                {
                    "href": "https://example.com/wp-json/wc/v3/products/22/variations"
                }
                ],
                "up": [
                {
                    "href": "https://example.com/wp-json/wc/v3/products/22"
                }
                ]
            }
            }
        ]');
    }
}