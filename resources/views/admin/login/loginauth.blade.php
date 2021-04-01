<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Admin</title>
        <base href="{{asset('')}}">
        <link href="admin_asset/css/styles.css" rel="stylesheet" />
        <script src="admin_asset/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><img src="{{asset('public/admin_asset/assets/img/tiki.png')}}" style="width:200px;" alt=""></h3></div>
                                    <div class="card-body">
                                        <form action="{{url('/checklogin')}}" method="post">
                                        @csrf
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <i class="fas fa-users-cog" style="color:#007bff;"></i>
                                                <input class="form-control py-4" id="inputEmailAddress" name="email" type="email" value="OptimusAdmin@tiki.vn" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <i class="fas fa-key" style="color:#007bff;"></i><input class="form-control py-4" id="inputPassword" name="password" type="password" value="123456" />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-center mt-4 mb-0">
                                               
                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div class="text-muted">KHANH - HIẾU THỰC TẬP OPTIMUS &copy; {{date('Y')}}</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="admin_asset/js/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="admin_asset/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="admin_asset/js/scripts.js"></script>
    </body>
</html>
