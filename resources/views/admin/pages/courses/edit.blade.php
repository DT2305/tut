@extends('admin.layouts.admin-master')
@section('title','Sửa thông tin lớp')
@section('content-header')
    <b>Sửa thông tin lớp: {{$cor->name}}</b>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    {!! Form::open(['method'=>'POST','route'=>['admin.courses.update',$cor->id]]) !!}
                    {!! Form::submit('Cập nhật',['class'=>'btn btn-success']) !!}
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
                                {!! Form::label('name', 'Tên lớp:',['class'=>'required','required']) !!}
                                {!! Form::text('name',$cor->name,['class'=>'form-control ','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('faculty_id', 'Thuộc ngành:',['class'=>'required']) !!}
                                {!! Form::select('faculty_id',$fal,$cor->faculty_id, ['class' => 'form-control select2bs4' ,'style'=>'width: 100%;','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('description', 'Mô tả:') !!}
                                {!! Form::textarea('description',$cor->description,['class'=>'form-control','rows'=>3]) !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.col-md-12 -->

        {!! Form::close() !!}
    </div>
    <!-- /.row -->
@endsection
@section('js')

@endsection
