@extends('admin.layout.index')
@section('title')
    Trang request
@endsection
@section('content')
    <div class="card mb-4 mt-4">
        <div class="card-header bg-primary" style="color:#FFF;">
            <i class="fas fa-table mr-1"></i>
            DANH SÁCH REQUEST
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align:center;font-size:10pt;">
                            <th>Request_ID</th>
                            <th>State</th>
                            <th>Created_at/Created_by</th>
                            <th>Kind</th>
                            <th>Approved_at/approved_by</th>
                            <th>Action(Hành động)</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($request as $rq)
                        <tr style="text-align:center;font-size:10pt;">
                            <td>{{$rq['request_id']}}</td>
                            <td>{{$rq['state']}}</td>
                            <td>@if(isset($rq['created_at'])) {{$rq['created_at']}} @endif / @if(isset($rq['created_by'])) {{$rq['created_by']}}@endif</td>
                            <td>{{$rq['kind']}}</td>
                            <td>
                            @if(empty($rq['created_by']))
                            <p style="color:red;">{{('NULL')}}</p>
                            @else
                            {{$rq['created_by']}}
                        @endif
                        / @if(empty($rq['approved_by']))
                                <p style="color:red">{{('NULL')}}</p>
                            @else
                                {{$rq['approved_by']}}
                            @endif
                            </td>
                            <td style="width:250px"><a href="{{url('/admin/request/details/'.$rq['request_id'])}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a> <a href="{{url('/admin/request/delete/'.$rq['request_id'])}}" onclick="return Xoa()" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection