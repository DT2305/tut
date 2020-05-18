@extends('admin.layouts.admin-master')
@section('title','Dashboard Mẫu')
@section('content-header')
    <b>Thêm sinh viên</b>
@endsection
@section('content')

<div class="row">
    <div class="col-lg-6">
        <div class="card card-primary card-outline">
            {!! Form::open(['method'=>'POST','route'=>'admin.users.get.create','id'=>'myForm']) !!}
            <div class="card-header">
                <h5 class="m-0"></h5>
                {!! Form::submit('Thêm',['class'=>'btn btn-primary']) !!}
                {!! Form::button('Làm lại',['class'=>'btn btn-dark float-right','onclick'=>'resetForm()']) !!}

            </div>
            <div class="card-body">

                <div class="form-group">
                    {!! Form::label('name', 'Họ và tên:') !!}
                    {!! Form::text('name',null,['class'=>'form-control','required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('birthday', 'Ngày sinh:') !!}
                    {!! Form::date('birthday', null,['class'=>'form-control','required' => 'required']) !!}
                </div>
                <div class="custom-control custom-radio">
                    {!! Form::radio('gender', 'Nam',true,['class'=>'custom-control-input','id'=>'gender1']) !!}
                    {!! Form::label('gender1', 'Nam', ['class' => 'custom-control-label']) !!}
                </div>
                <div class="custom-control custom-radio">
                    {!! Form::radio('gender', 'Nữ', false,['class'=>'custom-control-input','id'=>'gender2']) !!}
                    {!! Form::label('gender2', 'Nữ', ['class' => 'custom-control-label']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('identify_number', 'Chứng minh nhân dân:') !!}
                    {!! Form::text('identify_number',null,['class'=>'form-control','required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Địa chỉ email:') !!}
                    {!! Form::email('email',null,['class'=>'form-control','required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone_number', 'Số điện thoại:') !!}
                    {!! Form::text('phone_number',null,['class'=>'form-control','required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Mật khẩu:') !!}
                    {!! Form::text('password',null,['class'=>'form-control','required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Nhập lại mật khẩu:') !!}
                    {!! Form::text('password_confirmation',null,['class'=>'form-control','required' => 'required']) !!}
                </div>

            </div>
            {!! Form::close() !!}
        </div>

    </div>
    <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
@endsection
