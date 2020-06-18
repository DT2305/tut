@extends('admin.layouts.admin-master')
@section('title','Thêm ngành')
@section('content-header')
    <b>Thông tin ngành: {{$fal->name}}</b>
@endsection
@section('content')
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <a href="{{route('admin.faculties.edit',$fal->id)}}" class="btn btn-success">Chỉnh sửa</a>
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
                                {!! Form::text('name',$fal->show_department->name,['class'=>'form-control','required','disabled']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('faculty_code', 'Mã ngành:',['class'=>'required']) !!}
                                {!! Form::text('faculty_code',$fal->faculty_code,['class'=>'form-control','required','disabled']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'Tên ngành:',['class'=>'required']) !!}
                                {!! Form::text('name',$fal->name,['class'=>'form-control','required','disabled']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('description', 'Mô tả:') !!}
                                {!! Form::textarea('description',$fal->description,['class'=>'form-control','disabled','rows'=>3]) !!}
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
