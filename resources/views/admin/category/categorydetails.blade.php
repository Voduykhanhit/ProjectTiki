@extends('admin.layout.index')
@section('title')
    List Category
@endsection
@section('content')
<div class="card mb-4 mt-4">
                            <div class="card-header bg-primary" style="color:#FFF;">
                                <i class="fas fa-table mr-1"></i>
                               DANH MỤC SẢN PHẨM : <span class="badge badge-info">{{$category['name']}}</span>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="text-align:center;">
                                                <th>ID</th>
                                                <th>Code</th>
                                                <th>Display Name</th>
                                                <th>Is required</th>
                                                <th>Example</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($category['attributes']))
                                        @foreach($category['attributes'] as $ctg)
                                            <tr style="text-align:center;">
                                                <td>
                                                @if(isset($ctg['id']))
                                                    <p style="color:green;">{{$ctg['id']}}</p>
                                                @else
                                                    <p style="color:red;">{{('NULL')}}</p>
                                                @endif
                                                
                                                </td>
                                                <td>
                                                @if(isset($ctg['code']))
                                                        <p style="color:green;">{{$ctg['code']}}</p>
                                                    @else
                                                        <p style="color:red;">{{('NULL')}}</p>
                                                @endif
                                                </td>
                                                <td>
                                                @if(isset($ctg['display_name']))
                                                        <p style="color:green;">{{$ctg['display_name']}}</p>
                                                    @else
                                                        <p style="color:red;">{{('NULL')}}</p>
                                                @endif
                                                
                                                
                                                </td>
                                                <td>
                                                @if(isset($ctg['is_required']))
                                                    @if($ctg['is_required']==1)
                                                            {{('Có')}}
                                                        @else
                                                             {{('Không')}}
                                                    @endif
                                                @else
                                                <p style="color:red;">{{('NULL')}}</p>
                                                @endif
                                                </td>
                                                <td>
                                                @if($ctg['example']==null)
                                                        {{('Trống')}}
                                                    @else
                                                        {{$ctg['example']}}
                                                @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


@endsection