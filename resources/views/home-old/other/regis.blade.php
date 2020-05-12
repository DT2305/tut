<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng cử viên - Đăng ký</title>
    {{--    Bootstrap 4--}}
    <link rel="stylesheet" href={{asset("bootstrap-4.0.0/css/bootstrap.min.css")}}>
    <script src={{asset("bootstrap-4.0.0/js/jquery.min.js")}}></script>
    <script src={{asset("bootstrap-4.0.0/js/popper.min.js")}}></script>
    <script src={{asset("bootstrap-4.0.0/js/bootstrap.bundle.min.js")}}></script>
    {{--    Custom css--}}
    <link rel="stylesheet" href={{asset("home_layout/css/home-register.css")}}>
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
                    <form class="form-signin" action="{{route('home.post.regis')}}" method="post">
                        {{ csrf_field() }}
                        @if(count($errors) > 0)
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-ban"></i> Cảnh báo!!!</h5>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
{{--                        @if(\Session::has('success'))--}}
{{--                            <div class="alert alert-success">--}}
{{--                                <p>{{ \Session::get('success') }}</p>--}}
{{--                            </div>--}}
{{--                        @endif--}}

                        <div class="form-label-group">
                            <input type="text" id="inputName" name="name" class="form-control" placeholder="Họ và tên" value="{{ old('name') }}" required autofocus>
                            <label for="inputName">Họ và tên</label>
                            @error('name')<p style="color: red">{{$message}}</p> @enderror
                        </div>


                        <div class="form-label-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="gender1" name="gender" value="Nam" {{ old('gender') == "Nam" ? 'checked' : '' }}>
                                <label class="custom-control-label" for="gender1">Nam</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="gender2" name="gender" value="Nữ" {{ old('gender') == "Nữ" ? 'checked' : '' }}>
                                <label class="custom-control-label" for="gender2">Nữ</label>
                            </div>
                            @error('gender')<p style="color: red">{{$message}}</p> @enderror
                        </div>

                        <div class="form-label-group">
                            <input type="date" id="inputBirthday" name="birthday" class="form-control" placeholder="Ngày sinh" value="{{ old('birthday') }}" required >
                            <label for="inputBirthday">Ngày sinh</label>
                            @error('birthday')<p style="color: red">{{$message}}</p> @enderror
                        </div>

                        <div class="form-label-group">
                            <input type="text" id="inputIdCard" name="identify_number" class="form-control" placeholder="Chứng minh nhân dân" value="{{ old('identify_number') }}" required >
                            <label for="inputIdCard">Chứng minh nhân dân</label>
                            @error('identify_number')<p style="color: red">{{$message}}</p> @enderror
                        </div>

                        <div class="form-label-group">
                            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Địa chỉ Email" value="{{ old('email') }}" required>
                            <label for="inputEmail">Địa chỉ Email</label>
                            @error('email')<p style="color: red">{{$message}}</p> @enderror
                        </div>

                        <hr>
                        <h5> Thông tin đăng nhập</h5>

                        <div class="form-label-group">
                            <input type="text" id="inputPhonenumber" name="phone_number" class="form-control" placeholder="Số điện thoại" value="{{ old('phone_number') }}" required >
                            <label for="inputPhonenumber">Số điện thoại</label>
                            @error('phone_number')<p style="color: red">{{$message}}</p> @enderror
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Mật khẩu" required>
                            <label for="inputPassword">Mật khẩu</label>
                            @error('password')<p style="color: red">{{$message}}</p> @enderror
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Xác nhận mật khẩu" required>
                            <label for="password_confirmation">Xác nhận mật khẩu</label>
                            @error('password_confirmation')<p style="color: red">{{$message}}</p> @enderror
                        </div>

                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng ký</button>
                        <a class="d-block text-center mt-2 small" href="{{route('home.get.login')}}">Đăng nhập</a>
                        <hr class="my-4">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    @if(session('phanquyen'))
    <script>
    alert('{{session('phanquyen')}}');
</script>
@endif

</body>
</html>
