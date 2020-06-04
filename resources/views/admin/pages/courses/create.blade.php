@extends('admin.layouts.admin-master')
@section('title','Thêm lớp')
@section('content-header')
    <b>Thêm lớp</b>
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
                    {!! Form::open(['method'=>'POST','route'=>'admin.courses.store']) !!}
                    {!! Form::submit('Thêm',['class'=>'btn btn-success']) !!}
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
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('faculty_id', 'Lớp thuộc ngành:',['class'=>'required']) !!}
                                {!! Form::select('faculty_id',$fal,null, ['class' => 'form-control select2bs4' ,'style'=>'width: 100%;','required','placeholder'=>'Chọn ngành']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Tên lớp:',['class'=>'required']) !!}
                                {!! Form::text('name',null,['class'=>'form-control','required']) !!}
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
