@extends('admin.layouts.admin-master')
@section('title','Sửa thông tin ngành')
@section('content-header')
    <b>Sửa thông tin ngành: {{$fal->name}}</b>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    {!! Form::open(['method'=>'POST','route'=>['admin.faculties.update',$fal->id]]) !!}
                    {!! Form::submit('Cập nhật',['class'=>'btn btn-success']) !!}
                    <a class="btn btn-secondary text-white" onClick="window.location.reload();">Tải lại</a>
                    <a href="{{route('admin.faculties.index')}}" class="btn btn-primary ">Danh sách ngành</a>

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
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('department_id', 'Ngành thuộc khoa:',['class'=>'required']) !!}
                                {!! Form::select('department_id',$dep,$fal->department_id, ['class' => 'form-control select2bs4' ,'style'=>'width: 100%;','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'Tên ngành:',['class'=>'required','required']) !!}
                                {!! Form::text('name',$fal->name,['class'=>'form-control ','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('description', 'Mô tả:') !!}
                                {!! Form::textarea('description',$fal->description,['class'=>'form-control','rows'=>3]) !!}
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
