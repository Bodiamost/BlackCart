<?php

namespace App\Services;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Services\FakeData;

class WooCommerce
{
    private $dataService;

    public function __construct()
    {
        $this->dataService = new FakeData(); // WooCommerce SDK
    }

    public function getProducts($storeId){
        // $storeId needed to identify Woocommerce API creds
        $defaultCurrency = 'CAD'; // API call to get default store currency
        // for actual API call need to do multiple calls for every page
        $responce = $this->dataService->fakeWooCommerceProductsResponse();
        foreach ($responce as $key => $wooProduct) {
            $product = new Product();
            $product->setProductId($wooProduct->id);
            $product->setName($wooProduct->name);
            // worth to unify all attributes into $product->attributes
            foreach ($wooProduct->attributes as $option) {
                $optionNameLower = strtolower($option->name);
                if($optionNameLower == 'size'){
                    $product->setSizes($option->options);
                }
                if($optionNameLower == 'color' || $optionNameLower == 'colour'){
                    $product->setColors($option->options);
                }
            }
            if($wooProduct->variations){
                foreach($this->dataService->fakeWooCommerceProductVariationsResponse() as $wooVariant) { // call by product Id to get all variations
                    $variant = new ProductVariant();
                    // worth to unify all attributes into $variant->attributes
                    foreach ($wooVariant->attributes as $option) {
                        $optionNameLower = strtolower($option->name);
                        if($optionNameLower == 'size'){
                            $variant->setSize($option->option);
                        }
                        if($optionNameLower == 'color' || $optionNameLower == 'colour'){
                            $variant->setColor($option->option);
                        }
                    }
                    $variant->setInventoryLevel($wooVariant->stock_quantity); // better to use stock_status as well
                    $variant->setWeight($wooVariant->weight); // not sure what value will be there
                    $variant->addPrice(["currency_code" => $defaultCurrency,"amount" => $wooVariant->price]);
                    $product->addVariation($variant);
                }
            } else {
                $defaultVariant = new ProductVariant();
                // worth to unify all attributes into $product->attributes
                foreach ($wooProduct->default_attributes as $option) {
                    $optionNameLower = strtolower($option->name);
                    if($optionNameLower == 'size'){
                        $defaultVariant->setSize($option->option);
                        $product->setSizes([$option->option]);
                    }
                    if($optionNameLower == 'color' || $optionNameLower == 'colour'){
                        $defaultVariant->setColor($option->option);
                        $product->setColors([$option->option]);
                    }
                }
                $defaultVariant->setInventoryLevel($wooProduct->stock_quantity); // better to use stock_status as well
                $defaultVariant->setWeight($wooProduct->weight); // not sure what value will be there
                $defaultVariant->addPrice(["currency_code" => $defaultCurrency,"amount" => $wooProduct->price]);
                $product->addVariation($defaultVariant);
            }

            $result[] = $product;
        }
        return $result;
    }
}