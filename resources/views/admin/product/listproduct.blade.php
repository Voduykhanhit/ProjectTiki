@extends('admin.layout.index')
@section('title')
    List Product
@endsection
@section('content')
<div class="card mb-4 mt-4">
                            <div class="card-header bg-primary" style="color:#FFF;">
                                <i class="fas fa-table mr-1"></i>
                               DANH SÁCH SẢN PHẨM
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="text-align:center;font-size:8pt;">
                                                <th>Product_id/SKU</th>
                                                <th>Name</th>
                                                <th>Master_id/Master_sku</th>
                                                <th>Created_at/Updated_at</th>
                                                <th>Price/Market_price</th>
                                                <th>Thumbnail</th>
                                                <th>Categories</th>
                                                <th>Active</th>
                                                <th>Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($product as $pd) 
                                            <tr style="text-align:center;font-size:10pt;">
                                            <td><a href="{{url('/admin/product/details/'.$pd['product_id'])}}">{{$pd['product_id']}} / {{$pd['sku']}}</a></td>
                                                <td><a href="{{url('/admin/product/details/'.$pd['product_id'])}}">{{$pd['name']}}</a></td>
                                                <td><a href="{{url('/admin/product/details/'.$pd['product_id'])}}">{{$pd['master_id']}} / {{$pd['master_sku']}}</a></td>
                                                <td><a href="{{url('/admin/product/details/'.$pd['product_id'])}}">{{ \Carbon\Carbon::parse($pd['created_at'])->format('d/m/Y  H:i:s')}} / {{\Carbon\Carbon::parse($pd['updated_at'])->format('d/m/Y  H:i:s')}}</a></td>
                                                <td><a href="{{url('/admin/product/details/'.$pd['product_id'])}}">{{number_format($pd['price'])}}vnđ /{{number_format($pd['market_price'])}}vnđ</a></td>
                                                <td><img src="{{$pd['thumbnail']}}" width="80px;" alt=""></td>
                                                <td>
                                                    @foreach($pd['categories'] as $ctg)
                                                        {{$ctg['name']}} 
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @if($pd['active']==1)
                                                                <p style="color:green;">{{('Hoạt động')}}</p>
                                                            @else
                                                                <p style="color:red">{{('Không hoạt động')}}</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(isset($pd['type']))
                                                                <p style="color:green;">{{$pd['type']}}</p>
                                                            @else
                                                                <p style="color:red;">{{('NULL')}}</p>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


@endsection