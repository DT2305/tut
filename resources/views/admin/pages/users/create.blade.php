@extends('admin.layouts.admin-master')
@section('title','Thêm ứng viên')
@section('content-header')
    <b>Thêm ứng viên</b>
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
                    {!! Form::open(['method'=>'POST','route'=>'admin.users.get.create']) !!}
                    {!! Form::submit('Thêm',['class'=>'btn btn-primary']) !!}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('name', 'Họ và tên:',['class'=>'required','required']) !!}
                                {!! Form::text('name',null,['class'=>'form-control ','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birthday', 'Ngày sinh:',['class'=>'required']) !!}
                                {!! Form::date('birthday', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('', 'Giới tính',['class'=>'required']) !!}
                            <div class="custom-control custom-radio">
                                {!! Form::radio('gender', 'Nam',true,['class'=>'custom-control-input','id'=>'gender1']) !!}
                                {!! Form::label('gender1', 'Nam', ['class' => 'custom-control-label']) !!}
                            </div>
                            <div class="custom-control custom-radio">
                                {!! Form::radio('gender', 'Nữ', false,['class'=>'custom-control-input','id'=>'gender2']) !!}
                                {!! Form::label('gender2', 'Nữ', ['class' => 'custom-control-label']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('identify_number', 'CMND:',['class'=>'required']) !!}
                                {!! Form::text('identify_number',null,['class'=>'form-control','onClick'=>'randomNumber()']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_issue_place', 'Nơi cấp:') !!}
                                {{--                                        {!! Form::select('id_issue_place', $isd,null, ['class' => 'form-control select2bs4','required' => 'required','style'=>'width: 100%;','placeholder'=>'Chọn--']) !!}--}}
                                {!! Form::select('id_issue_place',$isd,null, ['class' => 'form-control select2bs4']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_number_date', 'Ngày cấp:') !!}
                                {!! Form::date('id_number_date', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('email', 'Địa chỉ email:') !!}
                                {!! Form::email('email',null,['class'=>'form-control']) !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('phone_number', 'Số điện thoại:',['class'=>'required']) !!}
                                {!! Form::text('phone_number',null,['class'=>'form-control']) !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('address', 'Địa chỉ:') !!}
                                {!! Form::text('address',null,['class'=>'form-control']) !!}

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('password', 'Mật khẩu:',['class'=>'required']) !!}
                                {!! Form::password('password',['class'=>'form-control ','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'Nhập lại mật khẩu:',['class'=>'required']) !!}
                                {!! Form::password('password_confirmation',['class'=>'form-control','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.col-md-12 -->

        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0 text-center">Thông tin ứng tuyển</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <h4>Nguyện vọng 1:</h4>
                            <div class="form-group">
                                {!! Form::label('', 'Ngành đăng ký xét tuyển:') !!}
                                {!! Form::select('major_1',$fal,null, ['class' => 'form-control select2bs4']) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h4>Nguyện vọng 2:</h4>
                            <div class="form-group">
                                {!! Form::label('', 'Ngành đăng ký xét tuyển:') !!}
                                {!! Form::select('major_2',$fal,null, ['class' => 'form-control select2bs4']) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h4>Nguyện vọng 3:</h4>
                            <div class="form-group">
                                {!! Form::label('', 'Ngành đăng ký xét tuyển:') !!}
                                {!! Form::select('major_3',$fal,null, ['class' => 'form-control select2bs4']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-danger">Hình thức xét tuyển</label>
                                <select class="form-control select2bs4" id="admis_sion" name="admission_form"
                                        style="width: 100%;">
                                    <option value="admission1">Xét tuyển sử dụng kết quả THPT lớp 10,11 và học kỳ 1 lớp
                                        12
                                    </option>
                                    <option value="admission1">Xét tuyển dử dụng kết quả học bà THPT lớp 12</option>
                                    <option value="admission1">Kết quả thi THPT 2020</option>
                                    <option value="admission2">Kết quar kỳ thi đáng giá năng lực của ĐHQG-TP.HCM
                                    </option>
                                    <option value="admission3">Xét tuyển thẳng</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="admission1 box">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Form::label('subject_combination_1', 'Tổ hợp môn:') !!}
                                    {!! Form::select('subject_combination_1',$scm,null,['class' => 'form-control select2bs4']); !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('total_point_1', 'Điểm tổng tổ hợp:') !!}
                                    {!! Form::number('total_point_1',0,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Form::label('subject_combination_2', 'Tổ hợp môn:') !!}
                                    {!! Form::select('subject_combination_2',$scm,null,['class' => 'form-control select2bs4']); !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('total_point_2', 'Điểm tổng tổ hợp:') !!}
                                    {!! Form::number('total_point_2',0,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Form::label('subject_combination_3', 'Tổ hợp môn:') !!}
                                    {!! Form::select('subject_combination_3',$scm,null,['class' => 'form-control select2bs4']); !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('total_point_3', 'Điểm tổng tổ hợp:') !!}
                                    {!! Form::number('total_point_3',0,['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                    </div>{{--/admission1 box--}}

                    <div class="admission2 box">
                        {!! Form::label('total_point_HCM', 'Điểm đạt được kỳ thi đáng giá năng lực của ĐHQG-TP.HCM:') !!}
                        {!! Form::number('total_point_HCM',0,['class'=>'form-control']) !!}
                    </div>{{--/admission2 box--}}

                    <div class="admission3 box">
                        {!! Form::label('study_point', 'Học lực:') !!}
                        {!! Form::select('study_point', ['Khá' => 'Khá', 'Giỏi' => 'Giỏi'], null, ['class' => 'form-control select2bs4','placeholder' => 'Chọn học lực...']) !!}
                        {!! Form::label('active_point', 'Hạng kiểm:') !!}
                        {!! Form::select('active_point', ['Khá' => 'Khá', 'Tốt' => 'Tốt'], null, ['class' => 'form-control select2bs4','placeholder' => 'Chọn hạngkiểm...']) !!}
                    </div>{{--/admission3 box--}}

                    <div class="row">
                        <div class="col-lg-4">

{{--                            <div class="form-group">--}}
{{--                                <div class="custom-file">--}}
{{--                                    {!! Form::file('point_img',['class'=>'custom-file-input']); !!}--}}
{{--                                    {!! Form::label('point_img', 'Ảnh chụp bảng điểm:',['class'=>'custom-file-label']) !!}--}}
{{--                                </div>--}}
{{--                            </div>--}}


                        </div>{{--/col-lg-4--}}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>

        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#admis_sion").change(function () {
                $(this).find("option:selected").each(function () {
                    var optionValue = $(this).attr("value");
                    if (optionValue) {
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else {
                        $(".box").hide();
                    }
                });
            }).change();
        });
    </script>
    <script>
        function randomNumber() {
            var x = document.getElementById("identify_number")
            x.innerHTML = Math.floor((Math.random() * 100) + 1);
        }
    </script>
    <script>
        function myFunction() {
            document.getElementById("myNumber").placeholder = "Amount";
        }
    </script>
@endsection
