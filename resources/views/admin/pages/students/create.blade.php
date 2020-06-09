@extends('admin.layouts.admin-master')
@section('title','Thêm sinh viên')
@section('content-header')
    <b>Thêm sinh viên</b>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    {!! Form::open(['method'=>'POST','route'=>'admin.students.store']) !!}
                    <a href="{{route('admin.students.index')}}" class="btn btn-primary float-right">Danh sách sinh viên</a>
                    {!! Form::submit('Thêm',['class'=>'btn btn-success']) !!}
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
                                {!! Form::label('name', 'Họ và tên:',['class'=>'required']) !!}
                                {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birthday', 'Ngày sinh:',['class'=>'required']) !!}
                                {!! Form::date('birthday', \Carbon\Carbon::now(),['class'=>'form-control','required']) !!}
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
                                {!! Form::label('identity_number', 'CMND:',['class'=>'required']) !!}
                                {!! Form::text('identity_number',null,['class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_issue_place', 'Nơi cấp:') !!}
                                {!! Form::select('id_issue_place',$isd,null, ['class' => 'form-control select2bs4' ,'style'=>'width: 100%;','placeholder'=>'Chọn nơi cấp CMND']) !!}
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
                                {!! Form::label('nation', 'Dân tộc:') !!}
                                {!! Form::select('nation',$nations,null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('religion', 'Tôn giáo:') !!}
                                {!! Form::select('religion',$religions,null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('password', 'Mật khẩu:',['class'=>'required']) !!}
                                {!! Form::password('password',['class'=>'form-control ','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'Nhập lại mật khẩu:',['class'=>'required']) !!}
                                {!! Form::password('password_confirmation',['class'=>'form-control','required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('education_type', 'Loại hình đào tạo:',['class'=>'required']) !!}
                                {!! Form::select('education_type',$edu_type,null, ['class' => 'form-control select2bs4','style'=>'width: 100%;','required','placeholder'=>'Chọn loại đào tạo']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('education_level', 'Bậc đào tạo:',['class'=>'required']) !!}
                                {!! Form::select('education_level',$edu_level,null, ['class' => 'form-control select2bs4','style'=>'width: 100%;','required','placeholder'=>'Chọn bậc đào tạo']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('course_id', 'Lớp:',['class'=>'required']) !!}
                                {!! Form::select('course_id',$cor,null, ['class' => 'form-control select2bs4','style'=>'width: 100%;','required','placeholder'=>'Chọn lớp']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('student_code', 'Mã số sinh viên:',['class'=>'required']) !!}
                                {!! Form::text('student_code',$maxStuCode+1,['class'=>'form-control','required','readonly']) !!}
{{--                                <b>MSSV lớn nhất hiện tại:{{$maxStuCode}}</b>--}}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('start_date', 'Ngày vào trường:',['class'=>'required']) !!}
                                {!! Form::date('start_date', \Carbon\Carbon::now(),['class'=>'form-control','required']) !!}
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
                    <h4 class="m-0 text-center"> <b>Thông tin liên hệ</b></h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('email', 'Địa chỉ email:',['class'=>'required']) !!}
                                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Địa chỉ email']) !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('phone_number', 'Số điện thoại:',['class'=>'required']) !!}
                                {!! Form::text('phone_number',null,['class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('parent_number', 'SĐT Phụ huynh:') !!}
                                {!! Form::text('parent_number',null,['class'=>'form-control']) !!}
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birth_province', 'Nơi sinh Tỉnh/TP:') !!}
                                {!! Form::select('birth_province',['1'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birth_district', 'Nơi sinh Quận/Huyện:') !!}
                                {!! Form::select('birth_district',['1'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birth_ward', 'Nơi sinh Xã/Phường:') !!}
                                {!! Form::select('birth_ward',['1'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('address', 'Địa chỉ liên hệ:') !!}
                                {!! Form::text('address',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_province', 'HKTT Tỉnh/TP:') !!}
                                {!! Form::select('permanent_province',['1'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_district', 'HKTT Quận/Huyện:') !!}
                                {!! Form::select('permanent_district',['1'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_ward', 'HKTT Xã/Phường:') !!}
                                {!! Form::select('permanent_ward',['1'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('permanent_address', 'Địa chỉ HKTT:') !!}
                                {!! Form::text('permanent_address',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('insurance_number', 'Số bảo hiểm y tế:') !!}
                                {!! Form::text('insurance_number',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('bank_card', 'Mã thẻ ATM:') !!}
                                {!! Form::text('bank_card',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('bank', 'Ngân hàng:') !!}
                                {!! Form::text('bank',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.col-lg-6 -->


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
                    {{--$choosed={{$usr->birth_province}}--}}

                var html_code = '';
                $.getJSON('province_district_ward.json', function (data) {

                    // html_code += '<option value="'+$choosed+'">Chọn '+id+'</option>';

                    // html_code += '<option value="'+$choosed+'">Chọn</option>';
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
                    {{--$choosed={{$usr->permanent_province}}--}}

                var html_code = '';
                $.getJSON('province_district_ward.json', function (data) {

                    // html_code += '<option value="'+$choosed+'">Chọn '+id+'</option>';

                    // html_code += '<option value="'+$choosed+'">Chọn</option>';
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
