@extends('admin.layout.index')
@section('title')
    Trang danh mục
@endsection
@section('content')
    <div class="card mb-4 mt-4">
        <div class="card-header bg-primary" style="color:#FFF;">
            <i class="fas fa-table mr-1"></i>
            DANH MỤC SẢN PHẨM
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align:center;">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Parent_id</th>
                            <th>Primary</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $ctg)
                        <tr style="text-align:center;">
                            <td>{{$ctg['id']}}</td>
                            <td>{{$ctg['name']}}</td>
                            <td>{{$ctg['parent_id']}}</td>
                            <td>
                                @if($ctg['is_primary']==1)
                                        {{('Có')}}
                                    @else
                                            {{('Không')}}
                                @endif
                            </td>
                            <td><a class="btn btn-primary" href="{{url('/admin/category/details/'.$ctg['id'])}}" role="button"><i class="fas fa-eye"></i> Chi tiết</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection