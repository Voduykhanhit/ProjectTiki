<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function __construct(){
        $token = '55f438d1-3438-409e-b5a4-9d16e764c5b8';
        // Product
        $product = Http::withHeaders([
            'tiki-api' => $token,
            'Accept' => 'application/json',
        ])->get('https://api-sandbox.tiki.vn/integration/v1/products');
        
            $product_count = count($product['data']);
        // Request
            $request = Http::withHeaders(
                [
                    'tiki-api'=>$token
                ]
            )->get('https://api-sandbox.tiki.vn/integration/v1/requests')->json();
            
            $request_count = count($request['data']);
        // Categories
        $category = Http::withHeaders(
            [
                'tiki-api'=>$token
            ]
            )->get('https://api-sandbox.tiki.vn/integration/v1/categories')->json();
        $categories_count = count($category);
        // Tracking
        $tracking = Http::withHeaders(
            [
            'tiki-api'=>$token
        ]
    )->get('https://api-sandbox.tiki.vn/integration/v1/tracking')->json();
        $tracking_count = count($tracking);
        View::share('categories_count',$categories_count);
        View::share('product_count',$product_count);
        View::share('tracking_count',$tracking_count);
        View::share('request_count',$request_count);
    }
}
