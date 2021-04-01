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
        
        
        $ckeckstatus = $response->status();
        if($ckeckstatus == 200)
        {
            $supplier = $response->json();
            
            return view('admin.seller.sellerlist',compact('supplier'));
        }else{
            return redirect()->back()->with('error','Không kết nối được');
        }
        
    }
  
}
