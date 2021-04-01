@extends('admin.layout.index')
@section('title')
    Tracking List
@endsection
@section('content')
<div class="card mb-4 mt-4">
                            <div class="card-header bg-primary" style="color:#FFF;">
                                <i class="fas fa-table mr-1"></i>
                               DANH SÁCH KHO HÀNG
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="text-align:center;font-size:10pt;">
                                                <th>ID</th>
                                                <th>Contact Email</th>
                                                <th>Contact Name</th>
                                                <th>Contact Phone</th>
                                                <th>Country</th>
                                                <th>Name</th>
                                                <th>Region</th>
                                                <th>Street</th>
                                                <th>Ward</th>
                                                <th>Tiki Warehouse</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($warehouse as $wh)
                                            <tr style="text-align:center;font-size:10pt;">
                                                <td>{{$wh['warehouse_id']}}</td>
                                                <td>{{$wh['contact_email']}}</td>
                                                <td>{{$wh['contact_name']}}</td>
                                                <td>{{$wh['contact_phone']}}</td>
                                                <td>{{$wh['country']['name']}}</td>
                                                <td>{{$wh['name']}}</td>
                                                <td>{{$wh['region']['name']}}</td>
                                                <td>{{$wh['street']}}</td>
                                                <td>
                                                    <p>{{$wh['ward']['name']}}</p>
                                                    <p>{{$wh['ward']['code']}}</p>
                                                </td>
                                                <td>
                                                    @foreach($wh['tiki_warehouses'] as $tk)
                                                        <p>ID: {{$tk['id']}}</p>
                                                        <p>NAME: {{$tk['name']}}</p>
                                                        <p>REGION CODE: {{$tk['region_code']}}</p>
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


@endsection