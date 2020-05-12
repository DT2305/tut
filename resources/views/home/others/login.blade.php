@extends('home.layouts.master')
@section('title','Đăng nhập')
@section('content')
@section('breadcrumb_1','Đăng nhập')
@section('breadcrumb_2','Đăng nhập')
    <section class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="form-wrap">
                        <h2 class="mb-4">Đăng nhập</h2>
                        <form action="{{route('home.post.login')}}" method="post">
                            {{ csrf_field() }}
                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-ban"></i> Cảnh báo</h5>
                                    {{session('error')}}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="name">Số điện thoại:</label>
                                    <input type="text" id="phone_number" name="phone_number" class="form-control py-2" autocomplete required autofocus>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-12 form-group">
                                    <label for="name">Mật khẩu</label>
                                    <input type="password" id="password" name="password" class="form-control py-2" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <button type="submit"  class="btn btn-primary px-5 py-2"> Đăng nhập</button>
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
