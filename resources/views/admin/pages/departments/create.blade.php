@extends('admin.layouts.admin-master')
@section('title','Thêm khoa')
@section('content-header')
    <b>Thêm khoa</b>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    {!! Form::open(['method'=>'POST','route'=>'admin.departments.store']) !!}
                    {!! Form::submit('Thêm',['class'=>'btn btn-success']) !!}
                    <a class="btn btn-secondary text-white" onClick="window.location.reload();">Tải lại</a>
                    <a href="{{route('admin.departments.index')}}" class="btn btn-primary">DS khoa</a>

                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="m-0 text-center"><b>Thông tin khoa</b></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('department_code', 'Mã khoa:',['class'=>'required']) !!}
                                {!! Form::text('department_code',null,['class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Tên khoa:',['class'=>'required']) !!}
                                {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('description', 'Mô tả:',['class'=>'required']) !!}
                                {!! Form::textarea('description',null,['class'=>'form-control','rows'=>3]) !!}
                            </div>
                        </div>

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
