<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ApiTikiController extends Controller
{
    public function ProductApi(){
        $token='55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $response = Http::withHeaders(
        [
            'tiki-api'=>$token
        ]
        )->get('https://api-sandbox.tiki.vn/integration/v1/products');
        
        $all=json_decode($response->Body());
        return response()->json($all,200);
    }
    public function ProductDetailsApi($product_id)
    {
        $token='55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $response = Http::withHeaders(
        [
            'tiki-api'=>$token
        ]
        )->get('https://api-sandbox.tiki.vn/integration/v1/products/'.$product_id);
        $all=json_decode($response->Body());
        return response()->json($all,200);
    }
    
}
