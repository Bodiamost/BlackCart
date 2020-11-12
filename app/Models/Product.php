<?php

namespace App\Models;
use App\Models\ProductVariant;

// simple class to structure data for API response
class Product implements \JsonSerializable
{
    private $productId;
    private $name;
    private $sizes = [];
    private $colors = [];
    private $variations = [];

    public function setProductId($productId){
        return $this->productId = $productId;
    }
    public function setName($name){
        return $this->name = $name;
    }
    public function setSizes($sizes){
        return $this->sizes = $sizes;
    }
    public function setColors($colors){
        return $this->colors = $colors;
    }
    public function addVariation(ProductVariant $variation){
        return $this->variations[] = $variation;
    }

    public function jsonSerialize()
    {
        return [
            'productId' => $this->productId,
            'name' => $this->name,
            'sizes' => $this->sizes,
            'colors' => $this->colors,
            'variations' => $this->variations,
        ];
    }
}
