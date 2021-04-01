@extends('admin.layout.index')
@section('title')
    List Order
@endsection
@section('content')
<div class="card mb-4 mt-4">
                            <div class="card-header bg-primary" style="color:#FFF;">
                                <i class="fas fa-table mr-1"></i>
                               DANH SÁCH HÓA ĐƠN
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="text-align:center;font-size:8pt;">
                                                <th>order code</th>
                                                <th>coupon code</th>
                                                <th>status</th>
                                                <th>total_price_before_discount</th>
                                                <th>total_price_after_discount</th>
                                                <th>created_at / updated_at</th>
                                                <th>fulfillment_type</th>
                                                <th>purchased_at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order as $od) 
                                            <tr style="text-align:center;font-size:10pt;">
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


@endsection