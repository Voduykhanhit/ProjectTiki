<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
         <base href="{{asset('')}}">
        <link href="admin_asset/css/styles.css" rel="stylesheet" />
        <link href="admin_asset/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="admin_asset/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       @include('admin.layout.header')
        <div id="layoutSidenav">
           @include('admin.layout.menu')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        @if(Session('thongbao'))
                            <div class="alert alert-success mt-2" id="alert">
                                {{Session('thongbao')}}
                            </div>
                        @endif
                        @if(Session('error'))
                            <div class="alert alert-danger mt-2" id="alert">
                                {{Session('error')}}
                            </div>
                        @endif
                        @php
                            $CheckErrors = Session('ErrorsValidate');
                         @endphp
                         @if(isset($CheckErrors))
                            @if(count($CheckErrors->errors)>0)
                                @foreach($CheckErrors->errors as $er)
                                    <div class="alert alert-danger mt-2" id="alert">
                                        {{$er}}
                                    </div>
                                @endforeach
                            @endif
                        @endif
                        @yield('content')
                        <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> -->
                       
                    </div>
                </main>
               @include('admin.layout.footer')
            </div>
        </div>
        <script src="admin_asset/js/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="admin_asset/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="admin_asset/js/scripts.js"></script>
        <script src="admin_asset/js/Chart.min.js" crossorigin="anonymous"></script>
        <script src="admin_asset/assets/demo/chart-area-demo.js"></script>
        <script src="admin_asset/assets/demo/chart-bar-demo.js"></script>
        <script src="admin_asset/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="admin_asset/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="admin_asset/assets/demo/datatables-demo.js"></script>
        <script>
            $(document).ready(function(){
                window.setTimeout(function(){
                    $('#alert').alert('close');
                },10000);
            });
        </script>
        
            <script>
            function Xoa()
            {
                var conf = confirm("Bạn có chắc muốn xóa danh mục này hay không");
                return conf;
            }
            </script>

        @yield('script')
    </body>
</html>
