@extends('admin.layout.index')
@section('title')
    Product Details
@endsection
@section('content')
    @if(count($errors)>0)
        <div class="alert alert-danger" id="alert">
            @foreach($errors->All() as $err)
                {{$err}} <br>
            @endforeach
        </div>
    @endif
<div class="card mb-4">
                            <div class="mt-2 ml-2 mb-2">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSku">
                                <i class="fas fa-plus"></i> Update Sku
                                </button>
                            </div>
                            <div class="mt-2 ml-2 mb-2">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalInfo">
                                <i class="fas fa-plus"></i> Update Product Info
                                </button>
                            </div>
                            <div class="mt-2 ml-2 mb-2">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalOginalSku">
                                <i class="fas fa-plus"></i> Update Original Sku
                                </button>
                            </div>

                            <div class="card-header bg-primary" style="color:#FFF;">
                                <i class="fas fa-table mr-1"></i>
                               DANH SÁCH CHI TIẾT
                            </div>
                            <div class="card-body">
                                <div class="card" style="width: 65rem;">
                                    <div class="card-header bg-primary" style="color:#FFF;">
                                        CHI TIẾT SẢN PHẨM : <span class="badge badge-info">{{$details['name']}}</span>
                                    </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Product_id: <span class="badge badge-info">{{$details['product_id']}}</span> </li>
                                            <li class="list-group-item">SKU: <span class="badge badge-info">{{$details['sku']}}</span></li>
                                            <li class="list-group-item">Name: <span class="badge badge-info">{{$details['name']}}</span></li>
                                            <li class="list-group-item">Master_id: <span class="badge badge-info">{{$details['master_id']}}</span></li>
                                            <li class="list-group-item">Master_sku: <span class="badge badge-info">{{$details['master_sku']}}</span></li>
                                            <li class="list-group-item">Active: 
                                                @if($details['active']==1)
                                                        <span class="badge badge-info">{{('Hoạt động')}}</span>
                                                    @else
                                                        <span class="badge badge-info">{{('Không hoạt động')}}</span>
                                                @endif   
                                            </li>
                                            <li class="list-group-item">Original_sku:
                                            @if(empty($details['original_sku']))
                                                    <span class="badge badge-info">{{('NULL')}}</span>
                                                @else
                                                    <span class="badge badge-info">{{$details['original_sku']}}</span>
                                            @endif
                                            
                                            </li>
                                            <li class="list-group-item">Type:
                                            @if(isset($details['type']))
                                                    <span class="badge badge-info">{{$details['type']}}</span>
                                                @else
                                                    <span class="badge badge-info">{{('NULL')}}</span>
                                            @endif          
                                            </li>
                                            <li class="list-group-item">Entity_type:
                                                @if(isset($details['entity_type']))
                                                        <span class="badge badge-info">{{$details['entity_type']}}</span>
                                                    @else
                                                        <span class="badge badge-info">{{('NULL')}}</span>
                                                @endif
                                              </li>
                                            <li class="list-group-item">Price: <span class="badge badge-info">{{number_format($details['price'])}}VNĐ</span></li>
                                            <li class="list-group-item">Market_price: <span class="badge badge-info">{{number_format($details['market_price'])}}VNĐ</span></li>
                                            <li class="list-group-item">Thumbnail: <img src="{{$details['thumbnail']}}" style="width:100px;" alt=""></li>
                                            <li class="list-group-item">Product Height:
                                                @if(isset($details['attributes']['product_height']))
                                                            <span class="badge badge-info">{{$details['attributes']['product_height']}}</span>
                                                        @else
                                                            <span class="badge badge-info">{{('NULL')}}</span>
                                                @endif
                                             </li>
                                            <li class="list-group-item">Small_image: <img src="{{$details['attributes']['small_image']}}" style="width:50px;" alt=""></li>
                                            <li class="list-group-item">Description: <span class="badge badge-info">{{$details['attributes']['description']}}</span></li>
                                            <li class="list-group-item">Giftwrap:
                                                @if(isset($details['attributes']['giftwrap']))
                                                            <span class="badge badge-info">{{$details['attributes']['giftwrap']}}</span>
                                                        @else
                                                            <span class="badge badge-info">{{('NULL')}}</span>
                                                @endif
                                            </li>
                                            <li class="list-group-item">Url_path:
                                                @if(isset($details['attributes']['url_path']))
                                                            <span class="badge badge-info">{{$details['attributes']['url_path']}}</span>
                                                        @else
                                                            <span class="badge badge-info">{{('NULL')}}</span>
                                                @endif
                                            
                                            </li>
                                            <li class="list-group-item">Image: <img src="{{$details['attributes']['image']}}" style="width:50px;" alt=""></li>
                                            <li class="list-group-item">Attributes Thumbnail:
                                                @if(isset($details['attributes']['thumbnail']))
                                                            <span class="badge badge-info">{{$details['attributes']['thumbnail']}}</span> </li>
                                                        @else
                                                            <span class="badge badge-info">{{('NULL')}}</span>
                                                @endif
                                             
                                            <li class="list-group-item">Visibility:
                                                @if(isset($details['attributes']['visibility']))
                                                            <span class="badge badge-info">{{$details['attributes']['visibility']}}</span>
                                                        @else
                                                            <span class="badge badge-info">{{('NULL')}}</span>
                                                @endif
                                             
                                            </li>
                                            <li class="list-group-item">Product Witdh:
                                                @if(isset($details['attributes']['product_width']))
                                                            <span class="badge badge-info">{{$details['attributes']['product_width']}}</span>
                                                        @else
                                                            <span class="badge badge-info">{{('NULL')}}</span>
                                                @endif
                                             </li>
                                            <li class="list-group-item">VAT:
                                                @if(isset($details['attributes']['vat']['value']))
                                                            <span class="badge badge-info">{{$details['attributes']['vat']['value']}}</span>
                                                        @else
                                                            <span class="badge badge-info">{{('NULL')}}</span>
                                                @endif
                                            </li>
                                            <li class="list-group-item">Po_type:
                                                @if(isset($details['attributes']['po_type']['value']))
                                                            <span class="badge badge-info">{{$details['attributes']['po_type']['value']}}</span>
                                                        @else
                                                            <span class="badge badge-info">{{('NULL')}}</span>
                                                @endif
                                            </li>
                                            <li class="list-group-item">Is_free_gift:
                                                @if(isset($details['attributes']['is_free_gift']['value']))
                                                            <span class="badge badge-info">{{$details['attributes']['is_free_gift']['value']}}</span>
                                                        @else
                                                            <span class="badge badge-info">{{('NULL')}}</span>
                                                @endif
                                            </li>
                                            <li class="list-group-item">Product length:
                                                @if(isset($details['attributes']['is_free_gift']['value']))
                                                            <span class="badge badge-info">{{$details['attributes']['product_length']}}</span>
                                                        @else
                                                            <span class="badge badge-info">{{('NULL')}}</span>
                                                @endif
                                            </li>
                                            <li class="list-group-item">Images product:
                                                @foreach($details['images'] as $img)
                                                    <img src="{{$img['url']}}" alt="">
                                                @endforeach
                                            </li>
                                            <li class="list-group-item">Category:
                                                @foreach($details['categories'] as $ctg)
                                                    <span class="badge badge-info">{{$ctg['name']}}</span> / 
                                                @endforeach
                                            </li>
                                            <li class="list-group-item">Inventory:
                                                <li class="list-group-item">Quantity_available:
                                                    @if(isset($details['inventory']['quantity_available']))
                                                                <span class="badge badge-info">{{$details['inventory']['quantity_available']}}</span> 
                                                            @else
                                                                <span class="badge badge-info">{{('NULL')}}</span>
                                                    @endif
                                                </li>
                                                <li class="list-group-item">Quantity_reserved:
                                                    @if(isset($details['inventory']['quantity_reserved']))
                                                                <span class="badge badge-info">{{$details['inventory']['quantity_reserved']}}</span>
                                                            @else
                                                                <span class="badge badge-info">{{('NULL')}}</span>
                                                    @endif
                                                </li>
                                                <li class="list-group-item">Quantity_sellable:
                                                    @if(isset($details['inventory']['quantity_sellable']))
                                                                <span class="badge badge-info">{{$details['inventory']['quantity_sellable']}}</span>
                                                            @else
                                                                <span class="badge badge-info">{{('NULL')}}</span>
                                                    @endif
                                                </li>
                                                <li class="list-group-item">Fulfillment_type:
                                                    @if(isset($details['inventory']['inventory_type']))
                                                                <span class="badge badge-info">{{$details['inventory']['inventory_type']}}</span>
                                                            @else
                                                                <span class="badge badge-info">{{('NULL')}}</span>
                                                    @endif
                                                
                                                </li>
                                            </li>
                                        </ul>
                                 </div>                       
                            </div>
                        </div>
@include('admin.product.modalSku')
@include('admin.product.modalInfo')
@include('admin.product.modaloginalsku')
@endsection

