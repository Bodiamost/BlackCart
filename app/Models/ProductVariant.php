<?php

namespace App\Models;

// simple class to structure data for API response
class ProductVariant implements \JsonSerializable
{
    private $prices = [];
    private $size;
    private $color;
    private $inventoryLevel;
    private $weight;

    public function setSize($size){
        return $this->size = $size;
    }
    public function setColor($color){
        return $this->color = $color;
    }
    public function setInventoryLevel($inventoryLevel){
        return $this->inventoryLevel = $inventoryLevel;
    }
    public function setWeight($weight){
        return $this->weight = $weight;
    }

    public function addPrice($price){
        return $this->prices[] = $price;
    }

    public function jsonSerialize()
    {
        return [
            'size' => $this->size,
            'color' => $this->color,
            'inventoryLevel' => $this->inventoryLevel,
            'weight' => $this->weight,
            'prices' => $this->prices,
            'outOfStock' => $this->isOutOfStock()
        ];
    }

    public function isOutOfStock()
    {
        return !$this->inventoryLevel || (int)$this->inventoryLevel <= 0;
    }
}
