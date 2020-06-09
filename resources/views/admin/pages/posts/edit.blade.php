@extends('admin.layouts.admin-master')
@section('title','Chỉnh sửa tin tức')
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
    <b>Chỉnh sửa tin tức</b>
@endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title"></h5>
                {!! Form::open(['method'=>'POST','route'=>['admin.posts.update',$pos->id]]) !!}
                {!! Form::submit('Cập nhật',['class'=>'btn btn-success']) !!}
                <a class="btn btn-secondary text-white" onClick="window.location.reload();">Tải lại</a>
                <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Danh sách tin tức</a>
            </div>
        </div><!-- /.card -->
    </div>
    <!-- /.col-md-12 -->

    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title font-weight-bold">Chi tiết tin tức</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('title', 'Tiêu đề:',['class'=>'required']) !!}
                            {!! Form::textarea('title',$pos->title,['class'=>'form-control','required','rows'=>3]) !!}
                        </div>
                    </div>
{{--                    --}}{{-- Up load ảnh tiêu đề--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('avatar', ' Ảnh tiêu đề:',['class'=>'required']) !!}--}}
{{--                            <div class="input-group">--}}
{{--                                <div class="custom-file">--}}
{{--                                    <input type="file" class="custom-file-input" name="avatar"--}}
{{--                                           onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" src="post_avatar/{{$pos->avatar}}">--}}
{{--                                    <label class="custom-file-label" for="exampleInputFile">{{$pos->avatar}}</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    --}}{{--                    xem trước ảnh--}}
{{--                    <div class="col-md-6">--}}
{{--                        <img id="blah" alt="your image" width="100%" src="post_avatar/{{$pos->avatar}}" />--}}

{{--                    </div>--}}

{{--                    --}}{{-- /Up load ảnh tiêu đề--}}
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('description', 'Mô tả tóm tắt:') !!}
                            {!! Form::textarea('description',$pos->description,['class'=>'form-control','rows'=>3]) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('author', 'Tác giả:',['class'=>'required']) !!}
                            {!! Form::text('author',$aut->username,['class'=>'form-control','required']) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('category_id', 'Thể loại',['class'=>'required']) !!}
                            {!! Form::select('category_id',$cat,$pos->category_id, ['class' => 'form-control select2bs4' ,'style'=>'width: 100%;','required','placeholder'=>'Chọn thể loại']) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('status', 'Trạng thái',['class'=>'required']) !!}
                            {!! Form::select('status',['1'=>'Hiển thị','0'=>'Ẩn'],$pos->status, ['class' => 'form-control select2bs4' ,'style'=>'width: 100%;','required','placeholder'=>'Chọn trạng thái']) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('target', 'Đối tượng xem tin:',['class'=>'required']) !!}
                            {!! Form::select('target',['1'=>'Ứng viên','0'=>'Sinh viến'],$pos->target, ['class' => 'form-control select2bs4' ,'style'=>'width: 100%;','required','placeholder'=>'Chọn đối tượng']) !!}
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
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <div class="mb-3">
                <textarea name="content" class="textarea" placeholder="Nội dung tin tức"
                          style="width: 100%; height:1500px ; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    {{$pos->content}}
                </textarea>
                </div>
                {!! Form::close() !!}

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
