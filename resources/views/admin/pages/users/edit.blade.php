@extends('admin.layouts.admin-master')
@section('title','Sửa thông tin ứng viên')
@section('content-header')
    <b>Sửa thông tin ứng viên: {{$usr->name}}</b>
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
                    {!! Form::open(['method'=>'POST','route'=>['admin.users.update',$usr->id]]) !!}
                    <a href="{{route('admin.users.index')}}" class="btn btn-secondary float-right">Danh sách ứng viên</a>
                    {!! Form::submit('Cập nhật',['class'=>'btn btn-success']) !!}
                    <input type="button" class="btn btn-secondary" value="Quay lại" onclick="history.back()">

                </div>
            </div>
        </div>


        <div class="col-lg-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="m-0 text-center"><b>Thông tin ứng viên</b></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('name', 'Họ và tên:',['class'=>'required','required']) !!}
                                {!! Form::text('name',$usr->name,['class'=>'form-control ','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birthday', 'Ngày sinh:',['class'=>'required']) !!}
                                {!! Form::date('birthday', $usr->birthday,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('gender', 'Giới tính',['class'=>'required']) !!}
                            <select name="gender" class="custom-select">
                                <option selected value="{{$usr['gender']}}"> {{$usr['gender']}}</option>
                                @if($usr['gender'] == "Nam")
                                    <option value="Nữ">Nữ</option>
                                @else
                                    <option value="Nam">Nam</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('identity_number', 'CMND:',['class'=>'required']) !!}
                                {!! Form::text('identity_number',$usr->identity_number,['class'=>'form-control','onClick'=>'randomNumber()']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_issue_place', 'Nơi cấp:') !!}
                                {!! Form::select('id_issue_place',$isd,$usr->id_issue_place, ['class' => 'form-control select2bs4','placeholder'=>'Chọn nơi cấp CMND']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_number_date', 'Ngày cấp:') !!}
                                {!! Form::date('id_number_date', $usr->id_number_date,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('nation', 'Dân tộc:') !!}
                                {!! Form::select('nation',$nations,$usr->nation, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('religion', 'Tôn giáo:') !!}
                                {!! Form::select('religion',$religions,$usr->religion, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.col-md-12 -->

        <div class="col-lg-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="m-0 text-center"><b>Thông tin liên hệ</b></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('email', 'Địa chỉ email:') !!}
                                {!! Form::email('email',$usr->email,['class'=>'form-control','placeholder'=>'Địa chỉ email']) !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('phone_number', 'Số điện thoại:',['class'=>'required']) !!}
                                {!! Form::text('phone_number',$usr->phone_number,['class'=>'form-control']) !!}

                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birth_province', 'Nơi sinh Tỉnh/Thành phố:') !!}
                                <select name="birth_province" id="birth_province" class="form-control select2bs4">
                                    <option selected value="{{$usr->birth_province}}">{{$usr->show_birth_province->name}}</option>
{{--                                    <option value="0">Chọn Tỉnh/Thành phố</option>--}}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birth_district', 'Nơi sinh Quận/Huyện:') !!}
                                <select class="form-control select2bs4" id="birth_district" name="birth_district">
                                    <option selected value="{{$usr->birth_district}}">{{$usr->show_birth_district->name}}</option>
{{--                                    <option value="1">Chọn Quận/Huyện</option>--}}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birth_ward', 'Nơi sinh Xã/Phường:') !!}
                                <select class="form-control select2bs4" id="birth_ward" name="birth_ward">
                                    <option selected readonly="readonly" value="{{$usr->birth_ward}}">{{$usr->show_birth_ward->name}}</option>
{{--                                    <option value="1">Chọn Phường/Xã</option>--}}
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('address', 'Địa chỉ liên hệ:') !!}
                                {!! Form::text('address',$usr->address,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_province', 'HKTT Tỉnh/Thành phố:') !!}
                                {!! Form::select('permanent_province',[$usr->permanent_province=>$usr->show_permanent_province->name],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_district', 'HKTT Quận/Huyện:') !!}
                                {!! Form::select('permanent_district',[$usr->permanent_district=>$usr->show_permanent_district->name],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_ward', 'HKTT Xã/Phường:') !!}
                                {!! Form::select('permanent_ward',[$usr->permanent_ward=>$usr->show_permanent_ward->name],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('permanent_address', 'Địa chỉ HKTT:') !!}
                                {!! Form::text('permanent_address',$usr->permanent_address,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.col-lg-6 -->

        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="m-0 text-center"><b>Thông tin ứng tuyển</b></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <h4>Nguyện vọng 1:</h4>
                            <div class="form-group">
                                {!! Form::label('major_1', 'Ngành đăng ký:') !!}
                                <b class="text-red">{{$usr->show_major_1->name}}</b>
                                {!! Form::select('major_1',$fal,$usr->major_1, ['class' => 'form-control select2bs4','placeholder'=>'Chọn ngành']) !!}

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h4>Nguyện vọng 2:</h4>
                            <div class="form-group">
                                {!! Form::label('', 'Ngành đăng ký:') !!}
                                <b class="text-red">{{$usr->show_major_2->name}}</b>
                                {!! Form::select('major_2',$fal,$usr->major_2, ['class' => 'form-control select2bs4','placeholder'=>'Chọn ngành']) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h4>Nguyện vọng 3:</h4>
                            <div class="form-group">
                                {!! Form::label('', 'Ngành đăng ký:') !!}
                                <b class="text-red">{{$usr->show_major_3->name}}</b>
                                {!! Form::select('major_3',$fal,$usr->major_3, ['class' => 'form-control select2bs4','placeholder'=>'Chọn ngành']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-danger">Hình thức xét tuyển</label>
                                <select class="form-control select2bs4" id="admis_sion" name="admission_form"
                                        style="width: 100%;">
                                    <option selected value="{{$usr->admission_form}}">{{$usr->show_admission_form->name}}</option>
                                    <option value="1">Xét tuyển sử dụng kết quả THPT lớp 10,11 và học kỳ 1 lớp 12</option>
                                    <option value="2">Xét tuyển dử dụng kết quả học bà THPT lớp 12</option>
                                    <option value="3">Kết quả thi THPT 2020</option>
                                    <option value="4">Kết quả kỳ thi đáng giá năng lực của ĐHQG-TP.HCM
                                    </option>
                                    <option value="5">Xét tuyển thẳng</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="1 2 3 box">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Form::label('subject_combination_1', 'Tổ hợp môn:') !!}
                                    <b class="text-red">{{$usr->show_subject_combination_1->name}}</b>
                                    {!! Form::select('subject_combination_1',$scm,$usr->subject_combination_1,['class' => 'form-control select2bs4','placeholder'=>'Chọn tổ hợp']); !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('total_point_1', 'Điểm tổng tổ hợp:') !!}
                                    {!! Form::number('total_point_1',$usr->total_point_1,['class'=>'form-control','max'=>'30','min'=>'0']) !!}
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Form::label('subject_combination_2', 'Tổ hợp môn:') !!}
                                    <b class="text-red">{{$usr->show_subject_combination_2->name}}</b>
                                    {!! Form::select('subject_combination_2',$scm,$usr->subject_combination_2,['class' => 'form-control select2bs4','placeholder'=>'Chọn tổ hợp']); !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('total_point_2', 'Điểm tổng tổ hợp:') !!}
                                    {!! Form::number('total_point_2',$usr->total_point_2,['class'=>'form-control','max'=>'30','min'=>'0']) !!}
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Form::label('subject_combination_3', 'Tổ hợp môn:') !!}
                                    <b class="text-red">{{$usr->show_subject_combination_3->name}}</b>
                                    {!! Form::select('subject_combination_3',$scm,$usr->subject_combination_3,['class' => 'form-control select2bs4','placeholder'=>'Chọn tổ hợp']); !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('total_point_3', 'Điểm tổng tổ hợp:') !!}
                                    {!! Form::number('total_point_3',$usr->total_point_3,['class'=>'form-control','max'=>'30','min'=>'0']) !!}
                                </div>
                            </div>
                        </div>

                    </div>{{--/admission1 box--}}

                    <div class="4 box">
                        {!! Form::label('total_point_HCM', 'Điểm đạt được kỳ thi đáng giá năng lực của ĐHQG-TP.HCM:') !!}
                        {!! Form::number('total_point_HCM',0,['class'=>'form-control']) !!}
                    </div>{{--/admission2 box--}}

                    <div class="5 box">
                        {!! Form::label('study_point', 'Học lực:') !!}
                        {!! Form::select('study_point', ['Khá' => 'Khá', 'Giỏi' => 'Giỏi'], null, ['class' => 'form-control select2bs4','placeholder' => 'Chọn học lực...']) !!}
                        {!! Form::label('active_point', 'Hạng kiểm:') !!}
                        {!! Form::select('active_point', ['Khá' => 'Khá', 'Tốt' => 'Tốt'], null, ['class' => 'form-control select2bs4','placeholder' => 'Chọn hạng kiểm...']) !!}
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
        $(document).ready(function () {
            load_json_data('birth_province');

            function load_json_data(id, parent_id) {
                    $choosed_1={{$usr->birth_province}}

                var html_code = '';
                $.getJSON('province_district_ward.json', function (data) {

                    // html_code += '<option value="'+$choosed+'">Chọn '+id+'</option>';

                    html_code += '<option value="'+$choosed_1+'">Chọn</option>';
                    $.each(data, function (key, value) {
                        if (id == 'birth_province') {
                            if (value.parent_id == '0') {

                                html_code += '<option value="' + value.id + '">' + value.name + '</option>';
                            }
                        } else {
                            if (value.parent_id == parent_id) {
                                html_code += '<option value="' + value.id + '">' + value.name + '</option>';
                            }
                        }
                    });
                    $('#' + id).html(html_code);
                });

            }

            $(document).on('change', '#birth_province', function () {
                var province_id = $(this).val();
                if (province_id != '') {
                    load_json_data('birth_district', province_id);
                } else {
                    $('#birth_district').html('<option value="">Select birth_district</option>');
                    $('#birth_ward').html('<option value="">Select birth_ward</option>');
                }
            });
            $(document).on('change', '#birth_district', function () {
                var district_id = $(this).val();
                if (district_id != '') {
                    load_json_data('birth_ward', district_id);
                } else {
                    $('#birth_ward').html('<option value="">Select birth_ward</option>');
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            load_json_data('permanent_province');

            function load_json_data(id, parent_id) {
                    $choosed={{$usr->permanent_province}}

                var html_code = '';
                $.getJSON('province_district_ward.json', function (data) {

                    // html_code += '<option value="'+$choosed+'">Chọn '+id+'</option>';

                    html_code += '<option value="'+$choosed+'">Chọn</option>';
                    $.each(data, function (key, value) {
                        if (id == 'permanent_province') {
                            if (value.parent_id == '0') {

                                html_code += '<option value="' + value.id + '">' + value.name + '</option>';
                            }
                        } else {
                            if (value.parent_id == parent_id) {
                                html_code += '<option value="' + value.id + '">' + value.name + '</option>';
                            }
                        }
                    });
                    $('#' + id).html(html_code);
                });

            }

            $(document).on('change', '#permanent_province', function () {
                var province_id = $(this).val();
                if (province_id != '') {
                    load_json_data('permanent_district', province_id);
                } else {
                    $('#permanent_district').html('<option value="">Select permanent_district</option>');
                    $('#permanent_ward').html('<option value="">Select permanent_ward</option>');
                }
            });
            $(document).on('change', '#permanent_district', function () {
                var district_id = $(this).val();
                if (district_id != '') {
                    load_json_data('permanent_ward', district_id);
                } else {
                    $('#permanent_ward').html('<option value="">Select permanent_ward</option>');
                }
            });
        });
    </script>
@endsection
