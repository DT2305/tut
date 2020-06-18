@extends('admin.layouts.admin-master')
@section('title','Thêm ngành')
@section('content-header')
    <b>Thêm ngành</b>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    {!! Form::open(['method'=>'POST','route'=>'admin.faculties.store']) !!}
                    {!! Form::submit('Thêm',['class'=>'btn btn-success']) !!}
                    <a class="btn btn-secondary text-white" onClick="window.location.reload();">Tải lại</a>
                    <a href="{{route('admin.faculties.index')}}" class="btn btn-primary">DS ngành</a>

                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="m-0 text-center"><b>Thông tin ngành</b></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('department_id', 'Ngành thuộc khoa:',['class'=>'required']) !!}
                                {!! Form::select('department_id',$dep,null, ['class' => 'form-control select2bs4' ,'style'=>'width: 100%;','required','placeholder'=>'Chọn khoa']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('faculty_code', 'Mã ngành:',['class'=>'required']) !!}
                                {!! Form::text('faculty_code',null,['class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'Tên ngành:',['class'=>'required']) !!}
                                {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('description', 'Mô tả:') !!}
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
