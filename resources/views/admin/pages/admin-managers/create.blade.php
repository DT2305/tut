@extends('admin.layouts.admin-master')
@section('title','Thêm quản trị viên')
@section('content-header')
    <b>Thêm quản trị viên</b>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    {!! Form::open(['method'=>'POST','route'=>'admin.managers.store']) !!}
                    {!! Form::submit('Thêm',['class'=>'btn btn-success']) !!}
                    <a class="btn btn-secondary text-white" onClick="window.location.reload();">Tải lại</a>
                    <a href="{{route('admin.managers.index')}}" class="btn btn-primary">Danh sách quản trị viên</a>

                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="m-0 text-center"><b>Thông tin quản trị viên</b></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('level', 'Cấp bậc quản trị viên:',['class'=>'required']) !!}
                                {!! Form::select('level',['3'=>'Super admin','2'=>'Admin','1'=>'Peasant'],null, ['class' => 'form-control select2bs4' ,'style'=>'width: 100%;','required','placeholder'=>'Chọn chức vụ']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('username', 'Tên đăng nhập:',['class'=>'required']) !!}
                                {!! Form::text('username',null,['class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('password', 'Mật khẩu:',['class'=>'required']) !!}
                                {!! Form::password('password',['class'=>'form-control ','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'Nhập lại mật khẩu:',['class'=>'required']) !!}
                                {!! Form::password('password_confirmation',['class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('full_name', 'Tên đầy đủ:') !!}
                                {!! Form::text('full_name',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('email', 'Email:') !!}
                                {!! Form::text('email',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('phone_number', 'Số điện thoại:') !!}
                                {!! Form::text('phone_number',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('description', 'Mô tả:') !!}
                                {!! Form::textarea('description',null,['class'=>'form-control','rows'=>3]) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
        <!-- /.col-md-12 -->

    </div>
    <!-- /.row -->
@endsection
@section('js')

@endsection
