@extends('admin.layouts.admin-master')
@section('title','Thông tin lớp')
@section('content-header')
    <b>Thông tin lớp: {{$cor->name}}</b>
@endsection
@section('content')
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <a href="{{route('admin.courses.edit',$cor->id)}}" class="btn btn-success">Chỉnh sửa</a>
                    <a class="btn btn-secondary text-white" onClick="window.location.reload();">Tải lại</a>
                    <a href="{{route('admin.courses.index')}}" class="btn btn-primary">Danh sách lớp</a>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="m-0 text-center"><b>Thông tin lớp</b></h4>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('name', 'Tên lớp:',['class'=>'required']) !!}
                                {!! Form::text('name',$cor->name,['class'=>'form-control','required','disabled']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('name', 'Thuộc ngành:',['class'=>'required']) !!}
                                {!! Form::text('name',$cor->show_faculty->name,['class'=>'form-control','required','disabled']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('name', 'Thuộc khoa:',['class'=>'required']) !!}
                                {!! Form::text('name',$cor->show_faculty->show_department->name,['class'=>'form-control','required','disabled']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('description', 'Mô tả:') !!}
                                {!! Form::textarea('description',$cor->description,['class'=>'form-control','disabled','rows'=>3]) !!}
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
