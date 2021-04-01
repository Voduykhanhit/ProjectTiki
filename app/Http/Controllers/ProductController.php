<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;


class ProductController extends Controller
{
    public function getProduct(){
        $token = '55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $response = Http::withHeaders([
            'tiki-api' => $token,
            'Accept' => 'application/json',
        ])->get('https://api-sandbox.tiki.vn/integration/v1/products');
       
    
        $checkstatus = $response->status();
        if($checkstatus == 200)
        {
            $product = $response->json()['data'];
            return view('admin.product.listproduct',compact('product'));
        }else{
            return redirect()->back()->with('error','Kết nối thất bại');
        }
        
        
    }
    public function getProductDetails($id)
    {
        $token = '55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $response = Http::withHeaders([
            'tiki-api' => $token,
            'Accept' => 'application/json',
        ])->get('https://api-sandbox.tiki.vn/integration/v1/products/'.$id);

        
        $ckeckstatus = $response->status();
        if($ckeckstatus == 200)
        {
            $details = $response->json();
            return view('admin.product.productdetails',compact('details'));
        }else{
            return redirect()->back()->with('error','Kết nối dữ liệu thất bại');
        }
        
    }
    public function PostUpdateSku(Request $request,$id)
    {
        $token='55f438d1-3438-409e-b5a4-9d16e764c5b8';
        
        $this->validate($request,
        [
            'price'=>'required|numeric',
            'marketprice'=>'required|numeric',
            'active'=>'required',
            'quantity'=>'required|numeric'
        ],
        [
            'price.required'=>'Giá không được bỏ trống',
            'price.numeric'=>'Giá phải là số',
            'marketprice.required'=>'Giá thị trường không được bỏ trống',
            'marketprice.numeric'=>'Giá thị trường phải là số',
            'active.required'=>'Bạn chưa lựa chọn trạng thái hoạt động',
            'quantity.required'=>'Số lượng không được bỏ trống'
        ]
        );
        $response = Http::withHeaders([
            'tiki-api' => $token,
            'Accept' => 'application/json'
        ])->post('https://api-sandbox.tiki.vn/integration/v1/products/updateSku', [
            'product_id' => $id,
            'price'=>$request->price,
            'market_price'=>$request->marketprice,
            'active'=>$request->active,
            'quantity'=>$request->quantity,
        ]);
        $checkstatus = $response->status();
        
        if($checkstatus == 200)
        {
            return redirect()->back()->with('thongbao','Cập nhật thành công');
        }else{
            return redirect()->back()->with('error','Cập nhật thất bại');
        }
    }
    public function PostUpdateProductInfo(Request $request,$id)
    {
        $token='55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $response = Http::withHeaders([
            'tiki-api' => $token,
            'Accept' => 'application/json'
        ])->post('https://api-sandbox.tiki.vn/integration/v1/requests/updateProductInfo', [
            'product_id'=>$id,
            'name'=>$request->name,
            'market_price'=>$request->marketprice,
            'img'=>$request->thumbnail,
        ]);
        $checkstatus = $response->status();
        if($checkstatus == 200)
        {
            $data=json_decode($response->getBody());
            return redirect()->back()->with('thongbao','Cập nhật thành công yêu cầu đã được gửi đi với track_id '.$data->track_id.' và status '.$data->state);
        }else{
            return redirect()->back()->with('error','Cập nhật không thành công!!!');
        }
        
    }
    public function PostUpdateOriginalSku(Request $request,$id)
    {
        $this->validate($request,
        [
            'originalsku'=>'required'
        ],
        [
            'originalsku.required'=>'Sku ban đầu không được bỏ trống'
        ]
        );
        $token='55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $response = Http::withHeaders([
            'tiki-api' => $token,
            'Accept' => 'application/json'
        ])->post('https://api-sandbox.tiki.vn/integration/v1/products/updateOriginalSku', [
            'product_id'=>$id,
            'original_sku'=>$request->originalsku,
        ]);
        $checkstatus = $response->status();
        if($checkstatus == 200)
        {
            return redirect()->back()->with('thongbao','Cập nhật thành công');
        }else{
            return redirect()->back()->with('error','Cập nhật thất bại');
        }
        
    }
    
}
