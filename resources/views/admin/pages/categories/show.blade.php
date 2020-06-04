@extends('admin.layouts.admin-master')
@section('title','Thông tin thể loại')
@section('content-header')
    <b>Thông tin thể loại</b>
@endsection
@section('content')
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <a href="{{route('admin.categories.edit',$cat->id)}}" class="btn btn-success">Chỉnh sửa</a>
                    <a class="btn btn-secondary text-white" onClick="window.location.reload();">Tải lại</a>
                    <a href="{{route('admin.categories.index')}}" class="btn btn-primary">Danh sách thể loại</a>

                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="m-0 text-center"><b>Thông tin thể loại: {{$cat->cate_name}}</b></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('cate_name', 'Tên thể loại:',['class'=>'required']) !!}
                                {!! Form::text('cate_name',$cat->cate_name,['class'=>'form-control','required','disabled']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('target', 'Đối tượng xem tin:',['class'=>'required']) !!}
                                {!! Form::select('target',['1'=>'Ứng viên','0'=>'Sinh viến'],$cat->target, ['class' => 'form-control select2bs4' ,'style'=>'width: 100%;','required','disabled']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('status', 'Trạng thái:',['class'=>'required']) !!}
                                {!! Form::select('status',['1'=>'Hiển thị','0'=>'Ẩn'],$cat->status, ['class' => 'form-control select2bs4' ,'style'=>'width: 100%;','required','disabled']) !!}
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
