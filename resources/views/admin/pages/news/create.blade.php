@extends('admin.layouts.admin-master')
@section('title','Tạo mẫu tin tức')
@section('content')
    @section('css')
        <!-- summernote -->
        <link rel="stylesheet" href={{asset("dashboard_layout/plugins/summernote/summernote-bs4.css")}}>
        <style>
            .note-editor.note-frame .note-editing-area .note-editable{
                height: 800px;
            }
        </style>
    @endsection
@section('content-header')
    <b>Tạo mẫu tin tức</b>
@endsection

<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <a href="{{route('admin.news.index')}}" class="btn btn-secondary float-right">Danh sách tin tức</a>
                {!! Form::submit('Thêm',['class'=>'btn btn-success']) !!}
                <input type="button" class="btn btn-secondary" value="Quay lại" onclick="history.back()">
            </div>
        </div><!-- /.card -->
    </div>
    <!-- /.col-md-12 -->

    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title font-weight-bold">Chi tiết tin tức</h5>

                <!-- tools box -->
                <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('title', 'Tiêu đề:',['class'=>'required']) !!}
                            {!! Form::text('title',null,['class'=>'form-control','required']) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('description', 'Mô tả:',['class'=>'required']) !!}
                            {!! Form::textarea('description',null,['class'=>'form-control','required','rows'=>3]) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('author', 'Tác giả:',['class'=>'required']) !!}
                            {!! Form::text('author',null,['class'=>'form-control','required']) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('name', 'Thể loại',['class'=>'required']) !!}
                            {!! Form::select('id_issue_place',$cat,null, ['class' => 'form-control select2bs4' ,'style'=>'width: 100%;','placeholder'=>'Chọn thể loại']) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('name', 'Trạng thái',['class'=>'required']) !!}
                            {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.card -->
    </div>
    <!-- /.col-md-12 -->
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h5 class="card-title font-weight-bold">Nội dung</h5>

                <!-- tools box -->
                <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <div class="mb-3">
                <textarea name="content" class="textarea" placeholder="Nội dung tin tức"
                          style="width: 100%; height:1500px ; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>

            </div>
        </div>
    </div>
    <!-- /.col-md-12 -->


</div>
<!-- /.row -->
@endsection
@section('js')
    <script src={{asset("dashboard_layout/plugins/summernote/summernote-bs4.min.js")}}></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
@endsection
