<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreProductsTest extends TestCase
{
    private $jsonSchema = [
        "products" => [[
            'productId',
            'name',
            'sizes' => [],
            'colors' => [],
            'variations' => [[
                'prices' => [[
                    'currency_code',
                    'amount',
                ]],
                'size',
                'color',
                'inventoryLevel',
                'weight',
                'outOfStock'
            ]],
        ]],
    ];
    // just checking our API responce to have the right structure for both Shopify and WooCommerce
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testShopifyResponce()
    {
        $response = $this->getJson('/api/stores/1/products');

        $response
            ->assertStatus(200)
            ->assertJsonStructure($this->jsonSchema);
    }
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testWooCommerceResponce()
    {
        $response = $this->getJson('/api/stores/2/products');

        $response
            ->assertStatus(200)
            ->assertJsonStructure($this->jsonSchema);
    }
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testOtherPlatformStoreResponce()
    {
        $response = $this->getJson('/api/stores/4/products');

        $response
            ->assertStatus(400)
            ->assertJson([
                'error' => 'No store found'
            ]);
    }
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testStoreNotFoundResponce()
    {
        $response = $this->getJson('/api/stores/3/products');

        $response
            ->assertStatus(400)
            ->assertJson([
                'error' => 'Store found, but no API integration for smth_else platform yet'
            ]);
    }
    // actual tests may include more extensive atribute values testing
}
