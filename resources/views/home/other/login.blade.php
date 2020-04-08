<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng cử viên - Đăng nhập</title>
    {{--    Bootstrap 4--}}
    <link rel="stylesheet" href={{asset("bootstrap-4.0.0/css/bootstrap.min.css")}}>
    <script src={{asset("bootstrap-4.0.0/js/jquery.min.js")}}></script>
    <script src={{asset("bootstrap-4.0.0/js/popper.min.js")}}></script>
    <script src={{asset("bootstrap-4.0.0/js/bootstrap.bundle.min.js")}}></script>
    {{--    Custom css--}}
    <link rel="stylesheet" href={{asset("/css/home-login.css")}}>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Đăng nhập</h5>

                        <form action="{{route('home.post.login')}}" method="post">
                            {{ csrf_field() }}
                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-ban"></i> Cảnh báo</h5>
                                    {{session('error')}}
                                </div>
                            @endif
                        <div class="form-label-group">
                            <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Số điện thoại" required autofocus>
                            <label for="phone_number">Số điện thoại</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Mật khẩu" required>
                            <label for="password">Mật khẩu</label>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng nhập</button>

                        <a class="d-block text-center mt-2 small" href="{{route('home.get.regis')}}"><i>Chưa có tài khoản?</i> Đăng ký</a>
                        <hr class="my-4">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
