@extends('admin.layout.index')
@section('title')
    Trang tracking
@endsection
@section('content')
    <div class="card mb-4 mt-4">
        <div class="card-header bg-primary" style="color:#FFF;">
            <i class="fas fa-table mr-1"></i>
            DANH SÁCH TRACKING
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align:center;">
                            <th>Tracking_ID</th>
                            <th>State(Trạng Thái)</th>
                            <th>Reason(lý do)</th>
                            <th>Request_ID</th>
                            <th>Action(Hành động)</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tracking as $tk)
                        <tr style="text-align:center;font-size:10pt;">
                            <td>{{$tk['track_id']}}</td>
                            <td>
                            @if($tk['state']=='rejected')
                                    <p style="color:red;">{{$tk['state']}}</p>
                                @else($tk['state']=='approved')
                                    <p style="color:green;">{{$tk['state']}}</p>
                            @endif
                            </td>
                            <td>
                                @if(empty($tk['reason']))
                                    <p style="color:red">{{('NULL')}}</p> 
                                @else
                                    {{$tk['reason']}}}
                                @endif
                            </td>
                            <td>
                                @if(isset($tk['request_id']))
                                        {{$tk['request_id']}}
                                    @else
                                        <p style="color:red;">{{('NULL')}}</p>
                                @endif

                            </td>
                            <td style="width:250px">
                                <a href="{{url('/admin/tracking/replay/'.$tk['track_id'])}}" class="btn btn-primary btn-sm"><i class="fas fa-spinner"></i> Làm mới</a> @if(isset($tk['request_id']))
                                <a href="{{url('/admin/tracking/delete/'.$tk['track_id'])}}" onclick="return Xoa()"  class="btn btn-danger btn-sm disabled"><i class="far fa-trash-alt"></i> Xóa</a>  @else
                                <a href="{{url('/admin/tracking/delete/'.$tk['track_id'])}}" onclick="return Xoa()" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Xóa</a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
