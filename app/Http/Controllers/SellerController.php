<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
class SellerController extends Controller
{
    public function getSeller(){
        $token = '55f438d1-3438-409e-b5a4-9d16e764c5b8';

        $response = Http::withHeaders(
            [
                'tiki-api'=>$token
            ]
        )->get('https://api-sandbox.tiki.vn/integration/v1/sellers/me');
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
        $ckeckstatus = $response->status();
        if($ckeckstatus == 200)
        {
            $supplier = $response->json();
            
            return view('admin.seller.sellerlist',compact('supplier','categories_count','product_count','request_count','tracking_count'));
        }else{
            return redirect()->back()->with('error','Không kết nối được');
        }
        
    }
  
}
