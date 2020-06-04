@extends('admin.layouts.admin-master')
@section('title','Thông tin ứng viên')
@section('content-header')
    <b>Thông tin ứng viên: {{$usr->name}}</b>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <a href="{{route('admin.users.edit',$usr->id)}}" class="btn btn-success">Chỉnh sửa</a>
                    <a class="btn btn-secondary text-white" onClick="window.location.reload();">Tải lại</a>
                    <a href="{{route('admin.users.index')}}" class="btn btn-primary">Danh sách ứng viên</a>
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
                                {{--                               {!! Form::text('name',null,['class'=>'form-control ','required']) !!}--}}
                                {!! Form::text('name',$usr->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birthday', 'Ngày sinh:',['class'=>'required']) !!}
                                {{--                                {!! Form::date('birthday', \Carbon\Carbon::now(),['class'=>'form-control']) !!}--}}
                                {!! Form::date('birthday', $usr->birthday,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('', 'Giới tính',['class'=>'required']) !!}
                            {!! Form::text('name',$usr->gender,['class'=>'form-control','readonly']) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('identity_number', 'CMND:',['class'=>'required']) !!}
                                {{-- {!! Form::text('identity_number',null,['class'=>'form-control']) !!}--}}
                                {!! Form::text('identity_number',$usr->identity_number,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_issue_place', 'Nơi cấp:') !!}
                                {{-- {!! Form::select('id_issue_place',$isd,null, ['class' => 'form-control select2bs4','placeholder'=>'Chọn nơi cấp CMND']) !!}--}}
                                {!! Form::text('id_issue_place',$usr->show_id_issue_place->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_number_date', 'Ngày cấp:') !!}
                                {{-- {!! Form::date('id_number_date', \Carbon\Carbon::now(),['class'=>'form-control']) !!}--}}
                                {!! Form::date('id_number_date', $usr->id_number_date,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('nation', 'Dân tộc:') !!}
                                {!! Form::text('nation',$usr->show_nation->name,['class'=>'form-control','readonly']) !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('religion', 'Tôn giáo:') !!}
                                {!! Form::text('religion',$usr->show_religion->name,['class'=>'form-control','readonly']) !!}

                            </div>
                        </div>
                        <div class="col-md-4"></div>
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
                                {!! Form::text('email',$usr->email,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('phone_number', 'Số điện thoại:',['class'=>'required']) !!}
                                {{--                                {!! Form::text('phone_number',null,['class'=>'form-control']) !!}--}}
                                {!! Form::text('phone_number',$usr->phone_number,['class'=>'form-control','readonly']) !!}

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
                                {!! Form::text('birth_province',$usr->show_birth_province->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birth_district', 'Nơi sinh Quận/Huyện:') !!}
                                {{--                                {!! Form::select('birth_district',['0'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}--}}
                                {!! Form::text('birth_district',$usr->show_birth_district->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('birth_ward', 'Nơi sinh Xã/Phường:') !!}
                                {{--                                {!! Form::select('birth_ward',['0'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}--}}
                                {!! Form::text('birth_ward',$usr->show_birth_ward->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('address', 'Địa chỉ liên hệ:') !!}
                                {{--                                {!! Form::text('address',null,['class'=>'form-control']) !!}--}}
                                {!! Form::text('address',$usr->address,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_province', 'HKTT Tỉnh/TP:') !!}
                                {{--                                {!! Form::select('permanent_province',['0'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}--}}
                                {!! Form::text('permanent_province',$usr->show_permanent_province->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_district', 'HKTT Quận/Huyện:') !!}
                                {{--                                {!! Form::select('permanent_district',['0'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}--}}
                                {!! Form::text('permanent_district',$usr->show_permanent_district->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('permanent_ward', 'HKTT Xã/Phường:') !!}
                                {{--                                {!! Form::select('permanent_ward',['0'=>''],null, ['class' => 'form-control select2bs4','style'=>'width: 100%;']) !!}--}}
                                {!! Form::text('permanent_ward',$usr->show_permanent_ward->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('permanent_address', 'Địa chỉ HKTT:') !!}
                                {{--                                {!! Form::text('permanent_address',null,['class'=>'form-control']) !!}--}}
                                {!! Form::text('permanent_address',$usr->permanent_address,['class'=>'form-control','readonly']) !!}
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
                                {{--                                {!! Form::select('major_1',$fal,null, ['class' => 'form-control select2bs4','placeholder'=>'Chọn ngành']) !!}--}}
                                {!! Form::text('major_1',$usr->show_major_1->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h4>Nguyện vọng 2:</h4>
                            <div class="form-group">
                                {!! Form::label('major_2', 'Ngành đăng ký:') !!}
                                {{--                                {!! Form::select('major_2',$fal,null, ['class' => 'form-control select2bs4','placeholder'=>'Chọn ngành']) !!}--}}
                                {!! Form::text('major_2',$usr->show_major_2->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h4>Nguyện vọng 3:</h4>
                            <div class="form-group">
                                {!! Form::label('major_3', 'Ngành đăng ký:') !!}
                                {{--                                {!! Form::select('major_3',$fal,null, ['class' => 'form-control select2bs4','placeholder'=>'Chọn ngành']) !!}--}}
                                {!! Form::text('major_3',$usr->show_major_3->name,['class'=>'form-control','readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-danger">Hình thức xét tuyển</label>
                                <select class="form-control select2bs4" disabled id="admis_sion" name="admission_form"
                                        style="width: 100%;">
                                    <option selected value="{{$usr->admission_form}}">{{$usr->show_admission_form->name}}</option>
                                    <option value="1">Xét tuyển sử dụng kết quả THPT lớp 10,11 và học kỳ 1 lớp 12</option>
                                    <option value="2">Xét tuyển dử dụng kết quả học bạ THPT lớp 12</option>
                                    <option value="3">Kết quả thi THPT 2020</option>
                                    <option value="4">Kết quả kỳ thi đáng giá năng lực của ĐHQG-TP.HCM</option>
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
                                    {{--                                    {!! Form::select('subject_combination_1',$scm,null,['class' => 'form-control select2bs4','placeholder'=>'Chọn tổ hợp']); !!}--}}
                                    {!! Form::text('subject_combination_1',$usr->show_subject_combination_1->name,['class'=>'form-control','readonly']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('total_point_1', 'Điểm tổng tổ hợp:') !!}
                                    {{--                                    {!! Form::number('total_point_1',0,['class'=>'form-control','max'=>'30','min'=>'0']) !!}--}}
                                    {!! Form::text('total_point_1',$usr->total_point_1,['class'=>'form-control','readonly']) !!}
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Form::label('subject_combination_2', 'Tổ hợp môn:') !!}
                                    {{--                                    {!! Form::select('subject_combination_2',$scm,null,['class' => 'form-control select2bs4','placeholder'=>'Chọn tổ hợp']); !!}--}}
                                    {!! Form::text('subject_combination_2',$usr->show_subject_combination_2->name,['class'=>'form-control','readonly']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('total_point_2', 'Điểm tổng tổ hợp:') !!}
                                    {{--                                    {!! Form::number('total_point_2',0,['class'=>'form-control','max'=>'30','min'=>'0']) !!}--}}
                                    {!! Form::text('total_point_2',$usr->total_point_2,['class'=>'form-control','readonly']) !!}
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Form::label('subject_combination_3', 'Tổ hợp môn:') !!}
                                    {{--                                    {!! Form::select('subject_combination_3',$scm,null,['class' => 'form-control select2bs4','placeholder'=>'Chọn tổ hợp']); !!}--}}
                                    {!! Form::text('subject_combination_3',$usr->show_subject_combination_3->name,['class'=>'form-control','readonly']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('total_point_3', 'Điểm tổng tổ hợp:') !!}
                                    {{--                                    {!! Form::number('total_point_3',0,['class'=>'form-control','max'=>'30','min'=>'0']) !!}--}}
                                    {!! Form::text('total_point_3',$usr->total_point_3,['class'=>'form-control','readonly']) !!}
                                </div>
                            </div>
                        </div>

                    </div>{{--/admission1 box--}}

                    <div class="4 box">
                        {!! Form::label('total_point_HCM', 'Điểm đạt được kỳ thi đáng giá năng lực của ĐHQG-TP.HCM:') !!}
                        {{--                        {!! Form::number('total_point_HCM',0,['class'=>'form-control']) !!}--}}
                        {!! Form::text('total_point_HCM',$usr->total_point_HCM,['class'=>'form-control','readonly']) !!}

                    </div>{{--/admission2 box--}}

                    <div class="5 box">
                        <div class="form-group">
                            {!! Form::label('study_point', 'Học lực:') !!}
                            {{--                            {!! Form::select('study_point', ['Khá' => 'Khá', 'Giỏi' => 'Giỏi'], null, ['class' => 'form-control select2bs4','placeholder' => 'Chọn học lực...']) !!}--}}
                            {!! Form::text('study_point',$usr->study_point,['class'=>'form-control','readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('active_point', 'Hạng kiểm:') !!}
                            {{--                            {!! Form::select('active_point', ['Khá' => 'Khá', 'Tốt' => 'Tốt'], null, ['class' => 'form-control select2bs4','placeholder' => 'Chọn hạng kiểm...']) !!}--}}
                            {!! Form::text('active_point',$usr->active_point,['class'=>'form-control','readonly']) !!}
                        </div>
                    </div>{{--/admission3 box--}}


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
@endsection
