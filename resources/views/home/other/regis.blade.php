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
    <link rel="stylesheet" href={{asset("/css/home-register.css")}}>
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
                    <h5 class="card-title text-center">Đăng ký</h5>
                    <form class="form-signin">
                        <div class="form-label-group">
                            <input type="text" id="inputName" class="form-control" placeholder="Họ và tên" required autofocus>
                            <label for="inputName">Họ và tên</label>
                        </div>

                        <div class="form-label-group">
                            <div class="row">
                                <div class="form-check pl-5">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="gender">Nam
                                    </label>
                                </div>
                                <div class="form-check pl-5">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="gender">Nữ
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-label-group">
                            <input type="text" id="inputIdCard" class="form-control" placeholder="Chứng minh nhân dân" required >
                            <label for="inputIdCard">Chứng minh nhân dân</label>
                        </div>

                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Địa chỉ Email" required>
                            <label for="inputEmail">Địa chỉ Email</label>
                        </div>

                        <hr>

                        <div class="form-label-group">
                            <input type="text" id="inputPhonenumber" class="form-control" placeholder="Số điện thoại" required >
                            <label for="inputPhonenumber">Số điện thoại</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Mật khẩu" required>
                            <label for="inputPassword">Mật khẩu</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Xác nhận mật khẩu" required>
                            <label for="inputConfirmPassword">Xác nhận mật khẩu</label>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng ký</button>
                        <a class="d-block text-center mt-2 small" href="#">Đăng nhập</a>
                        <hr class="my-4">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
