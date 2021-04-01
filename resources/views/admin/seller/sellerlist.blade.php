@extends('admin.layout.index')
@section('title')
    List Supplier
@endsection
@section('content')
<div class="row mt-2">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Category <span class="badge badge-pill badge-light">{{$categories_count}}</span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{url('admin/category/list-category')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Product <span class="badge badge-pill badge-light">{{$product_count}}</span> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{url('admin/product/list-product')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Tracking <span class="badge badge-pill badge-light">{{$tracking_count}}</span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{url('admin/tracking/list-tracking')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Total Request <span class="badge badge-pill badge-light">{{$request_count}}</span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{url('admin/request/list-request')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header bg-primary" style="color:#FFF;">
                                <i class="fas fa-table mr-1"></i>
                               CỬA HÀNG
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="text-align:center;font-size:10pt;">
                                            <th>Logo</th>
                                            <th>Tên công ty</th>
                                            <th>Trạng thái đăng ký</th>
                                            <th>Active</th>
                                            <th>Can update product</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      
                                            <tr style="text-align:center;font-size:10pt;">
                                                <td><img src="{{$supplier['logo']}}" alt=""></td>
                                                <td>{{$supplier['name']}}</td>
                                                <td>{{$supplier['registration_status']}}</td>
                                                <td>
                                                @if($supplier['active']==1)
                                                    <p style="color:green;">{{('Hoạt động')}}</p>
                                                @else
                                                    <p style="color:red;">{{('Không hoạt động')}}</p>
                                                </td>
                                                @endif
                                                <td>
                                                @if($supplier['can_update_product']==0)
                                                        <p style="color:red;">{{('Không có quyền')}}</p>
                                                    @else
                                                         <p style="color:green">{{('Có quyền')}}</p>
                                                @endif
                                                </td>
                                            </tr>
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


@endsection