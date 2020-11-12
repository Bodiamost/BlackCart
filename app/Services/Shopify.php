<?php

namespace App\Services;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Services\FakeData;

class Shopify
{
    private $dataService;

    public function __construct()
    {
        $this->dataService = new FakeData(); // Shopify SDK
    }

    public function getProducts($storeId){
        // $storeId needed to identify Shopify API creds
        $defaultCurrency = 'CAD'; //API call to get default store currency
        $result = [];
        // for actual API call need to do multiple calls for every page
        $responce = $this->dataService->fakeShopifyProductsResponse(); // actual API call parameters can limit fields in response

        if($responce->products)
            foreach ($responce->products as $key => $shopifyProduct) {
                $product = new Product();
                $product->setProductId($shopifyProduct->id);
                $product->setName($shopifyProduct->title);
                $sizePosition = 0;
                $colorPosition = 0;
                // worth to unify all attributes into $product->attributes
                foreach ($shopifyProduct->options as $option) {
                    $optionNameLower = strtolower($option->name);
                    if($optionNameLower == 'size'){
                        $sizePosition = $option->position;
                        $product->setSizes($option->values);
                    }
                    if($optionNameLower == 'color' || $optionNameLower == 'colour'){
                        $colorPosition = $option->position;
                        $product->setColors($option->values);
                    }
                }
                foreach ($shopifyProduct->variants as $shopifyVariant) {
                    $variant = new ProductVariant();
                    // worth to unify all attributes into $variant->attributes
                    if($sizePosition) $variant->setSize($shopifyVariant->{'option'."$sizePosition"});
                    if($colorPosition) $variant->setColor($shopifyVariant->{'option'."$colorPosition"});
                    $variant->setInventoryLevel($shopifyVariant->inventory_quantity);
                    $variant->setWeight($shopifyVariant->grams); // better to use weight weight_unit
                    if($shopifyVariant->presentment_prices)
                        foreach ($shopifyVariant->presentment_prices as $key => $price)
                            $variant->addPrice($price->price);
                    else
                        $variant->addPrice(["currency_code" => $defaultCurrency,"amount" => $shopifyVariant->price]);
                    $product->addVariation($variant);
                }

                $result[] = $product;
            }
        return $result;
    }
}