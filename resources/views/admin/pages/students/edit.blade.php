@extends('admin.layouts.admin-master')
@section('title','Sửa thông tin sinh viên')
@section('content-header')
    <b>Sửa thông tin sinh viên: {{$std->name}}</b>
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
                    {!! Form::open(['method'=>'POST','route'=>['admin.students.update',$std->id]]) !!}
                    <a href="{{route('admin.students.index')}}" class="btn btn-primary float-right">Danh sách sinh viên</a>
                    {!! Form::submit('Cập nhật',['class'=>'btn btn-success']) !!}
                    <input type="button" class="btn btn-secondary" value="Quay lại" onclick="history.back()">
                </div>
            </div>
        </div>


        <div class="col-lg-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="m-0 text-center"><b>Thông tin sinh viên</b></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('name', 'Họ và tên:',['class'=>'required','required']) !!}
                                {!! Form::text('name',$std->name,['class'=>'form-control ','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birthday', 'Ngày sinh:',['class'=>'required']) !!}
                                {!! Form::date('birthday', $std->birthday,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('gender', 'Giới tính',['class'=>'required']) !!}
                            <select name="gender" class="custom-select">
                                <option selected value="{{$std['gender']}}"> {{$std['gender']}}</option>
                                @if($std['gender'] == "Nam")
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
                                {!! Form::text('identity_number',$std->identity_number,['class'=>'form-control','onClick'=>'randomNumber()']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_issue_place', 'Nơi cấp:') !!}
                                {!! Form::select('id_issue_place',$isd,$std->id_issue_place, ['class' => 'form-control select2bs4','placeholder'=>'Chọn nơi cấp CMND']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_number_date', 'Ngày cấp:') !!}
                                {!! Form::date('id_number_date', $std->id_number_date,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('education_type', 'Loại hình đào tạo:') !!}
{{--                                <b class="text-red">{{$std->education_type}}</b>--}}
                                <b class="text-red">{{$std->show_education_type->name}}</b>
                                {!! Form::select('education_type',$edu_type,$std->education_type, ['class' => 'form-control select2bs4','style'=>'width: 100%;','placeholder'=>'Chọn loại đào tạo']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('education_level', 'Bậc đào tạo:') !!}
{{--                                <b class="text-red">{{$std->education_level}}</b>--}}
                                <b class="text-red">{{$std->show_education_level->name}}</b>
                                {!! Form::select('education_level',$edu_level,$std->education_level, ['class' => 'form-control select2bs4','style'=>'width: 100%;','placeholder'=>'Chọn bậc đào tạo']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('course_id', 'Lớp:') !!}
                                <b class="text-red">{{$std->showCourse->name}}</b>
                                {!! Form::select('course_id',$cor,$std->course_id, ['class' => 'form-control select2bs4','style'=>'width: 100%;','placeholder'=>'Chọn lớp']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('student_code', 'Mã số sinh viên:') !!}
                                <b class="text-red">{{$std->student_code}}</b>
                                {!! Form::text('student_code',$std->student_code,['class'=>'form-control ']) !!}
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
                                {!! Form::email('email',$std->email,['class'=>'form-control','placeholder'=>'Địa chỉ email']) !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('phone_number', 'Số điện thoại:',['class'=>'required']) !!}
                                {!! Form::text('phone_number',$std->phone_number,['class'=>'form-control']) !!}

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
                                    <option selected value="{{$std->birth_province}}">{{$std->show_birth_province->name}}</option>
                                    {{--                                    <option value="0">Chọn Tỉnh/Thành phố</option>--}}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birth_district', 'Nơi sinh Quận/Huyện:') !!}
                                <select class="form-control select2bs4" id="birth_district" name="birth_district">
                                    <option selected value="{{$std->birth_district}}">{{$std->show_birth_district->name}}</option>
                                    {{--                                    <option value="1">Chọn Quận/Huyện</option>--}}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birth_ward', 'Nơi sinh Xã/Phường:') !!}
                                <select class="form-control select2bs4" id="birth_ward" name="birth_ward">
                                    <option selected readonly="readonly" value="{{$std->birth_ward}}">{{$std->show_birth_ward->name}}</option>
                                    {{--                                    <option value="1">Chọn Phường/Xã</option>--}}
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('address', 'Địa chỉ liên hệ:') !!}
                                {!! Form::text('address',$std->address,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_province', 'HKTT Tỉnh/Thành phố:') !!}
                                {!! Form::select('permanent_province',[$std->permanent_province=>$std->show_permanent_province->name],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_district', 'HKTT Quận/Huyện:') !!}
                                {!! Form::select('permanent_district',[$std->permanent_district=>$std->show_permanent_district->name],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_ward', 'HKTT Xã/Phường:') !!}
                                {!! Form::select('permanent_ward',[$std->permanent_ward=>$std->show_permanent_ward->name],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('permanent_address', 'Địa chỉ HKTT:') !!}
                                {!! Form::text('permanent_address',$std->permanent_address,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.col-lg-6 -->
        {!! Form::close() !!}
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
                $choosed={{$std->birth_province}}

                var html_code = '';
                $.getJSON('province_district_ward.json', function (data) {

                    // html_code += '<option value="'+$choosed+'">Chọn '+id+'</option>';

                    html_code += '<option value="'+$choosed+'">Chọn</option>';
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
                $choosed={{$std->permanent_province}}

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
