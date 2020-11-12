<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Shopify;
use App\Services\WooCommerce;
use App\Services\FakeData;

class StoreController extends Controller
{
    private $dataService;

    public function __construct(FakeData $dataService)
    {
        $this->dataService = $dataService;
    }

    public function products($storeId)
    {
        if(!isset($this->dataService->stores[$storeId])) // DB lookup
            return response()->json(['error' => 'No store found'], 400);
        $storePlatform = $this->dataService->stores[$storeId];

        switch ($storePlatform){
            case 'shopify':
                $service = new Shopify();
                break;
            case 'woocommerce':
                $service = new WooCommerce();
                break;
            default:
                return response()->json(['error' => 'Store found, but no API integration for ' .$storePlatform. ' platform yet'], 400);
        }
        try {
            $products = $service->getProducts($storeId);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Error getting products'], 400);
        }
        return response()->json(['products' => $products], 200);
    }
}
