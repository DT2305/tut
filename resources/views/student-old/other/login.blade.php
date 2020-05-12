<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    Bootstrap 4--}}
    <link rel="stylesheet" href={{asset("bootstrap-4.0.0/css/bootstrap.min.css")}}>
    <script src={{asset("bootstrap-4.0.0/js/jquery.min.js")}}></script>
    <script src={{asset("bootstrap-4.0.0/js/popper.min.js")}}></script>
    <script src={{asset("bootstrap-4.0.0/js/bootstrap.bundle.min.js")}}></script>
    {{--    Custom css--}}
    <link rel="stylesheet" href={{asset("student_layout/css/student-login.css")}}>

    <title>Sinh viên - Đăng nhập</title>
</head>
<body>
<div class="sidenav">
    <div class="login-main-text">
        <img src="/img/CTUT_logo.png" alt="" class="w-50">
        <h2>Đại học Kỹ thuật - Công nghệ <br> Cần Thơ</h2>
        <p>Can Tho University of technology</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form action="{{route('student.post.login')}}" method="post">
                {{ csrf_field() }}
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Cảnh báo</h5>
                        {{session('error')}}
                    </div>
                @endif
                <div class="form-group">
                    <label>Mã số sinh viên</label>
                    <input type="text" class="form-control" id="student_code" name="student_code" placeholder="Mã số sinh viên" autofocus autocomplete="true">
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu">
                </div>
                <button type="submit" class="btn btn-black">Đăng nhập</button>

            </form>
        </div>
    </div>
</div>

</body>
</html>
