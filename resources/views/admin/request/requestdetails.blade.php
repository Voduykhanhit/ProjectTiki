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
<div class="card mb-4 mt-4">
    <div class="card-header bg-primary" style="color:#FFF;">
        <i class="fas fa-table mr-1"></i>
        DANH SÁCH CHI TIẾT
    </div>
    <div class="card-body">
        <div class="card" style="width: 65rem;">
            <div class="card-header bg-primary" style="color:#FFF;">
                CHI TIẾT REQUEST: <span class="badge badge-info">{{$details['request_id']}}</span>
            </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Request_id: <span class="badge badge-info">{{$details['request_id']}}</span> </li>
                    <li class="list-group-item">State: <span class="badge badge-info">{{$details['state']}}</span></li>
                    <li class="list-group-item">Created_at: <span class="badge badge-info">{{\Carbon\Carbon::parse($details['created_at'])->format('d/m/Y  H:i:s')}}</span></li>
                    <li class="list-group-item">Created_by: <span class="badge badge-info">{{$details['created_by']}}</span></li>
                    <li class="list-group-item">Kind: <span class="badge badge-info">{{$details['kind']}}</span></li>
                    <li class="list-group-item">Products:
                        @if(isset($details['products']))
                            @foreach($details['products'] as $pd)
                                <li class="list-group-item">Product_id<span class="badge badge-info">@if(isset($pd['product_id'])){{$pd['product_id']}}@endif</span></li>
                                <li class="list-group-item">Master_id<span class="badge badge-info">@if(isset($pd['master_id'])){{$pd['master_id']}}@endif</span></li>
                                <li class="list-group-item">Master_sku<span class="badge badge-info">@if(isset($pd['master_sku'])){{$pd['master_sku']}}@endif</span></li>
                                <li class="list-group-item">Sku<span class="badge badge-info">@if(isset($pd['sku'])){{$pd['sku']}}@endif</span></li>
                                <li class="list-group-item">Active<span class="badge badge-info">@if(isset($pd['master_sku'])){{$pd['master_sku']}}@endif</span></li>
                                <li class="list-group-item">Original_sku<span class="badge badge-info">@if(isset($pd['original_sku'])){{$pd['original_sku']}}@endif</span></li>
                                <li class="list-group-item">Price<span class="badge badge-info">@if(isset($pd['price'])){{number_format($pd['price'])}}VNĐ@endif</span></li>
                                <li class="list-group-item">Market_price<span class="badge badge-info">@if(isset($pd['price'])){{number_format($pd['market_price'])}}VNĐ@endif</span></li>
                                <li class="list-group-item">Images
                                        @if(isset($pd['images']))
                                            @foreach($pd['images'] as $img)
                                                <img src="{{$img['url']}}" style="width:80px;" alt="">
                                            @endforeach
                                        @endif
                                 </li>
                                <li class="list-group-item">Categories
                                        @if(isset($pd['categories']))
                                            @foreach($pd['categories'] as $ctg)
                                                <li class="list-group-item">Id / name / url_key / is_primary: <span class="badge badge-info">{{$ctg['id']}} / {{$ctg['name']}} / {{$ctg['url_key']}} / {{$ctg['is_primary']}} </span></li>
                                            @endforeach
                                        @endif
                                </li>
                            @endforeach
                        @endif
                    </li>
                </ul>
        </div>                       
    </div>
</div>
@endsection

