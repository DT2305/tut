@extends('admin.layouts.admin-master')
@section('title','Thêm sinh viên')
@section('content-header')
    <b>Thêm sinh viên</b>
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
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
        </div>{{--/col-lg-12--}}


        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    {!! Form::open(['method'=>'POST','route'=>'admin.students.post.create']) !!}
                    {!! Form::submit('Thêm',['class'=>'btn btn-primary']) !!}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('name', 'Họ và tên:',['class'=>'required','required']) !!}
                                {!! Form::text('name',null,['class'=>'form-control ','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birthday', 'Ngày sinh:',['class'=>'required']) !!}
                                {!! Form::date('birthday', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('', 'Giới tính',['class'=>'required']) !!}
                            <div class="custom-control custom-radio">
                                {!! Form::radio('gender', 'Nam',true,['class'=>'custom-control-input','id'=>'gender1']) !!}
                                {!! Form::label('gender1', 'Nam', ['class' => 'custom-control-label']) !!}
                            </div>
                            <div class="custom-control custom-radio">
                                {!! Form::radio('gender', 'Nữ', false,['class'=>'custom-control-input','id'=>'gender2']) !!}
                                {!! Form::label('gender2', 'Nữ', ['class' => 'custom-control-label']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('identity_number', 'CMND:',['class'=>'required']) !!}
                                {!! Form::text('identity_number',null,['class'=>'form-control','onClick'=>'randomNumber()']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_issue_place', 'Nơi cấp:') !!}
                                {{--                                        {!! Form::select('id_issue_place', $isd ?? '',null, ['class' => 'form-control select2bs4','required' => 'required','style'=>'width: 100%;','placeholder'=>'Chọn--']) !!}--}}
                                {!! Form::select('id_issue_place',$isd,null, ['class' => 'form-control select2bs4']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_number_date', 'Ngày cấp:') !!}
                                {!! Form::date('id_number_date', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('email', 'Địa chỉ email:') !!}
                                {!! Form::email('email',null,['class'=>'form-control']) !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('phone_number', 'Số điện thoại:',['class'=>'required']) !!}
                                {!! Form::text('phone_number',null,['class'=>'form-control']) !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('address', 'Địa chỉ:') !!}
                                {!! Form::text('address',null,['class'=>'form-control']) !!}

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('password', 'Mật khẩu:',['class'=>'required']) !!}
                                {!! Form::password('password',['class'=>'form-control ','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'Nhập lại mật khẩu:',['class'=>'required']) !!}
                                {!! Form::password('password_confirmation',['class'=>'form-control','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.col-md-12 -->

        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0 text-center">Thông tin sinh viên</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            {!! Form::label('', 'Khoa:') !!}
                            {!! Form::select('',$dep,null,['class' => 'form-control select2bs4']); !!}
                        </div>
                        <div class="col-lg-4">
                            {!! Form::label('', 'Ngành:') !!}
                            {!! Form::select('',$fal,null,['class' => 'form-control select2bs4']); !!}
                        </div>
                        <div class="col-lg-4">
                            {!! Form::label('', 'Lớp:') !!}
                            {!! Form::select('',$cor,null,['class' => 'form-control select2bs4']); !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
@endsection
@section('js')

@endsection
