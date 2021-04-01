<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
class CategoryController extends Controller
{
    public function getCategory(){
        $access_token = '55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $response = Http::withHeaders(
            [
                'tiki-api'=>$access_token
            ]
            )->get('https://api-sandbox.tiki.vn/integration/v1/categories');
        $checkstatus = $response->status();
        if($checkstatus == 200)
        {
            $category = $response->json();
            
            return view('admin.category.listcategory',compact('category'));
        }else{
            return redirect()->back()->with('error','Không kết nối được');
        }
         
            
    }
    public function getDetailsCategory($id){
        $access_token = '55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $response = Http::withHeaders(
            [
                'tiki-api'=>$access_token
            ]
            )->get('https://api-sandbox.tiki.vn/integration/v1/categories/'.$id);
            
        $checkstatus = $response->status();
        if($checkstatus == 200)
        {
            $category = $response->json();
            
            return view('admin.category.categorydetails',compact('category'));
        }else{
            return redirect()->back()->with('error','Không kết nối được');
        }
        
    }
}
