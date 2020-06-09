@extends('admin.layouts.admin-master')
@section('title','Thông tin sinh viên')
@section('content-header')
    <b>Thông tin sinh viên: {{$std->name}} </b>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <a href="{{route('admin.students.edit',$std->id)}}" class="btn btn-success">Chỉnh sửa</a>
                    <a class="btn btn-secondary text-white" onClick="window.location.reload();">Tải lại</a>
                    <a href="{{route('admin.students.index')}}" class="btn btn-primary">Danh sách sinh viên</a>
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
                                {{--                               {!! Form::text('name',null,['class'=>'form-control ','required']) !!}--}}
                                {!! Form::text('name',$std->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birthday', 'Ngày sinh:',['class'=>'required']) !!}
                                {{--                                {!! Form::date('birthday', \Carbon\Carbon::now(),['class'=>'form-control']) !!}--}}
                                {!! Form::date('birthday', $std->birthday,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('', 'Giới tính',['class'=>'required']) !!}
                            {!! Form::text('name',$std->gender,['class'=>'form-control','readonly']) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('identity_number', 'CMND:',['class'=>'required']) !!}
                                {{-- {!! Form::text('identity_number',null,['class'=>'form-control']) !!}--}}
                                {!! Form::text('identity_number',$std->identity_number,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_issue_place', 'Nơi cấp:') !!}
                                {{-- {!! Form::select('id_issue_place',$isd,null, ['class' => 'form-control select2bs4','placeholder'=>'Chọn nơi cấp CMND']) !!}--}}
                                {!! Form::text('id_issue_place',$std->show_id_issue_place->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_number_date', 'Ngày cấp:') !!}
                                {{-- {!! Form::date('id_number_date', \Carbon\Carbon::now(),['class'=>'form-control']) !!}--}}
                                {!! Form::date('id_number_date', $std->id_number_date,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('nation', 'Dân tộc:') !!}
                                {!! Form::text('nation',$std->show_nation->name,['class'=>'form-control','readonly']) !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('religion', 'Tôn giáo:') !!}
                                {!! Form::text('religion',$std->show_religion->name,['class'=>'form-control','readonly']) !!}

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('education_type', 'Loại hình đào tạo:') !!}
                                {!! Form::text('religion',$std->show_education_type->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('education_level', 'Bậc đào tạo:') !!}
                                {!! Form::text('religion',$std->show_education_level->name,['class'=>'form-control','readonly']) !!}

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('course_id', 'Lớp:') !!}
                                {!! Form::text('religion',$std->show_course->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('student_code', 'Mã số sinh viên:') !!}
                                {!! Form::text('religion',$std->student_code,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('start_date', 'Ngày vào trường:',['class'=>'required']) !!}
                                {!! Form::date('start_date',$std->start_date,['class'=>'form-control','required','readonly']) !!}
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!-- /.col-md-6 -->

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
                                {{--                                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Địa chỉ email']) !!}--}}
                                {!! Form::text('email',$std->email,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('phone_number', 'Số điện thoại:',['class'=>'required']) !!}
                                {{--                                {!! Form::text('phone_number',null,['class'=>'form-control']) !!}--}}
                                {!! Form::text('phone_number',$std->phone_number,['class'=>'form-control','readonly']) !!}

                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birth_province', 'Nơi sinh Tỉnh/TP:') !!}
                                {{--                                {!! Form::select('birth_province',['0'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}--}}
                                {!! Form::text('birth_province',$std->show_birth_province->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birth_district', 'Nơi sinh Quận/Huyện:') !!}
                                {{--                                {!! Form::select('birth_district',['0'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}--}}
                                {!! Form::text('birth_district',$std->show_birth_district->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birth_ward', 'Nơi sinh Xã/Phường:') !!}
                                {{--                                {!! Form::select('birth_ward',['0'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}--}}
                                {!! Form::text('birth_ward',$std->show_birth_ward->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('address', 'Địa chỉ liên hệ:') !!}
                                {{--                                {!! Form::text('address',null,['class'=>'form-control']) !!}--}}
                                {!! Form::text('address',$std->address,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_province', 'HKTT Tỉnh/TP:') !!}
                                {{--                                {!! Form::select('permanent_province',['0'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}--}}
                                {!! Form::text('permanent_province',$std->show_permanent_province->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_district', 'HKTT Quận/Huyện:') !!}
                                {{--                                {!! Form::select('permanent_district',['0'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}--}}
                                {!! Form::text('permanent_district',$std->show_permanent_district->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_ward', 'HKTT Xã/Phường:') !!}
                                {{--                                {!! Form::select('permanent_ward',['0'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}--}}
                                {!! Form::text('permanent_ward',$std->show_permanent_ward->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('permanent_address', 'Địa chỉ HKTT:') !!}
                                {{--                                {!! Form::text('permanent_address',null,['class'=>'form-control']) !!}--}}
                                {!! Form::text('permanent_address',$std->permanent_address,['class'=>'form-control','readonly']) !!}
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
@endsection
