@extends('student.layouts.master')
@section('title','Đăng ký')
@section('content')
@section('breadcrumb_1','Đăng ký ứng tuyển')
@section('breadcrumb_2','Đăng ký')
<section class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="form-wrap">
                    <h2 class="mb-5">Đăng ký tài khoản</h2>
                    <form class="form-signin" action="{{route('student.post.regis')}}" method="post">
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

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="inputName">Họ và tên</label>
                                <input type="text" id="inputName" name="name" class="form-control" placeholder="Họ và tên" value="{{ old('name') }}" required autofocus>
                                @error('name')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="">Giới tính</label>
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
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="inputBirthday">Ngày sinh</label>
                                <input type="date" id="inputBirthday" name="birthday" class="form-control" placeholder="Ngày sinh" value="{{ old('birthday') }}" required >
                                @error('birthday')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="inputIdCard">Chứng minh nhân dân</label>
                                <input type="text" id="inputIdCard" name="identify_number" class="form-control" placeholder="Chứng minh nhân dân" value="{{ old('identify_number') }}" required >
                                @error('identify_number')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="inputEmail">Địa chỉ Email</label>
                                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Địa chỉ Email" value="{{ old('email') }}" required>
                                @error('email')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="inputPhonenumber">Số điện thoại</label>
                                <input type="text" id="inputPhonenumber" name="phone_number" class="form-control" placeholder="Số điện thoại" value="{{ old('phone_number') }}" required >
                                @error('phone_number')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="inputPassword">Mật khẩu</label>
                                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Mật khẩu" required>
                                @error('password')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-12 form-group">
                                <label for="password_confirmation">Xác nhận mật khẩu</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Xác nhận mật khẩu" required>
                                @error('password_confirmation')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12 form-group">
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng ký</button>
                                <a class="d-block text-center mt-2 small" href="{{route('student.get.login')}}">Đăng nhập</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
    {{--    --}}
@endsection
