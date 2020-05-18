@extends('home.layouts.master')
@section('title','Cập nhật thông tin')
@section('content')
@section('breadcrumb_1','Cập nhật thông tin')
@section('breadcrumb_2')
    {{--    <p class="text-center mb-3 "></p>
        <p class="bcrumb text-center"><a href="">Trang chủ</a>
            <span class="sep ion-android-arrow-dropright px-2"></span>
            <span class="current"> <a href="{{route('home.get.edit')}}">Giới thiệu</a></span>
        </p>--}}

    <p class="text-center mb-3 "></p>
    <p class="bcrumb text-center"><a href="">Trang chủ</a>
        <span class="sep ion-android-arrow-dropright px-2"></span>
        <span class="current"> <a href="{{route('home.get.edit')}}">Cập nhất thông tin</a></span>
    </p>

@endsection
<div class="site-section bg-light">
    <div class="container">
        <form action="{{route('home.post.edit')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">

                <div class="col-md-7 col-lg-9 order-md-2">

                    <div class="row">
                        <div class="col-md-12 col-lg-12 mb-3 text-center">

                            <h3 class="font-weight-bold" >Thông tin ứng viên</h3>
                            <h3 class="m-0 font-weight-bold">{{$usr->name}}</h3>

                        </div>

                        <div class="col-md-12 col-lg-3 mb-3 text-center">
{{--                            <img src="{{$usr->avatar}}" alt="" class="img-thumbnail">--}}
                        </div>
{{--                        <div class="col-md-12 col-lg-4 mb-3">--}}
{{--                            <p class="m-0 font-weight-bold">Khoa: </p>--}}
{{--                            <h5>{{$usr->showCourse->showFaculty->showDepartment->name}}</h5>--}}
{{--                            <p class="m-0 font-weight-bold">Chuyên ngành:</p>--}}
{{--                            <h5>{{$usr->showCourse->showFaculty->name}}</h5>--}}
{{--                            <p class="m-0 font-weight-bold">Lớp:</p>--}}
{{--                            <h5>{{$usr->showCourse->name}}</h5>--}}
{{--                            <p class="m-0 font-weight-bold">Khóa:</p>--}}
{{--                            <h5>{{$usr->showCourse->year_start}}</h5>--}}
{{--                        </div>--}}

{{--                        <div class="col-md-12 col-lg-5 mb-3">--}}
{{--                            <p class="m-0 font-weight-bold">Ngày vào trường:</p>--}}
{{--                            --}}{{--<h5>{{$usr->start_date}}</h5>--}}
{{--                            <h5>{{date('d-m-Y', strtotime($usr->start_date))}}</h5>--}}
{{--                            <p class="m-0 font-weight-bold">Cơ sở:</p>--}}
{{--                            <h5>{{$usr->school_name}}</h5>--}}
{{--                            <p class="m-0 font-weight-bold">Loại hình đào tạo:</p>--}}
{{--                            <h5>{{$usr->education_type}}</h5>--}}
{{--                            <p class="m-0 font-weight-bold">Bậc đào tạo: </p>--}}
{{--                            <h5>{{$usr->education_level}}</h5>--}}
{{--                        </div>--}}

{{--                        <div class="col-md-12 col-lg-12 mb-3 text-center">--}}
{{--                            <h3 class="font-weight-bold">Thông tin cá nhân</h3>--}}
{{--                        </div>--}}

                        <div class="col-md-12 col-lg-12">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger span8">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}<br>
                                    @endforeach
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-md-12 col-lg-4 mb-3">

                            <div class="form-group">
                                <i class="fas fa-venus-mars"></i>
                                <label class="font-weight-bold" for="gender">Giới tính:</label>
                                <select name="gender" class="custom-select" autofocus>
                                    <option selected value="{{$usr['gender']}}"> {{$usr['gender']}}</option>
                                    @if($usr['gender'] == "Nam")
                                        <option value="Nữ">Nữ</option>
                                    @else
                                        <option value="Nam">Nam</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <i class="fas fa-birthday-cake"></i>
                                <label class="font-weight-bold" for="">Ngày sinh:</label>
                                <input type="date" value="{{$usr['birthday']}}" class="form-control" id=""
                                       name="birthday">
                                @error('birthday')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="">Dân tộc:</label>
                                <select name="nation" class="custom-select">
                                    <option selected value="{{$usr->nation}}"> {{$usr['nation']}}</option>
                                    <option value="0">Chọn</option>
                                    @foreach ($nat as $nat)
                                        <option value="{{$nat->id}}">{{$nat->name}}</option>
                                    @endforeach
                                </select>
                                @error('nation')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4 mb-3">
                            <div class="form-group">
                                <i class="fa fa-phone"></i>
                                <label class="font-weight-bold" for="" >Số điện thoại:</label><br>
                                <input type="tel" value="{{$usr['phone_number']}}" class="form-control" id=""
                                       name="phone_number" >
                                @error('phone_number')<p style="color: red">{{$message}}</p> @enderror

                            </div>
                            <div class="form-group">
                                <i class="fa fa-envelope"></i>
                                <label class="font-weight-bold" for="">Email:</label>
                                <input type="email" value="{{$usr['email']}}" class="form-control" id="" name="email">
                                @error('email')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="">Tôn giáo:</label>
                                <select name="religion" class="custom-select">
                                    <option selected value="{{$usr['religion']}}"> {{$usr['religion']}}</option>
                                    <option value="0">Chọn</option>
                                    @foreach ($rel as $rel)
                                        <option value="{{$rel->name}}">{{$rel->name}}</option>

                                    @endforeach
                                </select>
                                @error('religion')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4 mb-3">
                            <div class="form-group">
                                <i class="fas fa-id-card"></i>
                                <label class="font-weight-bold" for="">Số chứng minh nhân dân:</label>
                                <input type="tel" value="{{$usr['identify_number']}}" class="form-control" id=""
                                       name="identify_number">
                                @error('identify_number')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="">Nơi cấp CMND:</label>
                                <select name="id_issue_place" class="custom-select">
                                    <option selected
                                            value="{{$usr->id_issue_place}}"> {{$usr->id_issue_place}}</option>
                                    <option value="0">Chọn</option>
                                    @foreach ($isu as $ise)

                                        <option value="{{$ise->name}}">{{$ise->name}}</option>
                                    @endforeach
                                </select>
                                @error('id_issue_place')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="">Ngày cấp CMND:</label>
                                <input type="date" value="{{$usr['id_number_date']}}" class="form-control" id=""
                                       name="id_number_date">
                                @error('id_number_date')<p style="color: red">{{$message}}</p> @enderror
                            </div>

                        </div>

                        <div class="col-md-12 col-lg-12 mb-3">
                            <div class="form-group">
                                <label class="font-weight-bold" for="">Địa chỉ:</label>
                                <input type="text" value="{{$usr['address']}}" class="form-control" id=""
                                       name="address">
                                @error('address')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>


                        {{--                        <div class="col-md-12 col-lg-4 mb-3">--}}
                        {{--                            <div class="form-group">--}}
                        {{--                                <label class="font-weight-bold" for="_________">_________:</label>--}}
                        {{--                                <input type="text" value="{{$usr['_________']}}" class="form-control" id=""--}}
                        {{--                                       name="_________">--}}
                        {{--                                @error('_________')<p style="color: red">{{$message}}</p> @enderror--}}
                        {{--                            </div>--}}
                        {{--                            <div class="form-group">--}}
                        {{--                                <label class="font-weight-bold" for="">_________:</label>--}}
                        {{--                                <input type="text" value="{{$usr['_________']}}" class="form-control" id=""--}}
                        {{--                                       name="_________">--}}
                        {{--                                @error('_________')<p style="color: red">{{$message}}</p> @enderror--}}
                        {{--                            </div>--}}
                        {{--                            <div class="form-group">--}}
                        {{--                                <label class="font-weight-bold" for="">_________:</label>--}}
                        {{--                                <select name="_________" class="custom-select">--}}
                        {{--                                    <option selected value="{{$usr['_________']}}"> {{$usr['_________']}}</option>--}}
                        {{--                                    <option value="0">Chọn</option>--}}
                        {{--                                </select>--}}
                        {{--                                @error('_________')<p style="color: red">{{$message}}</p> @enderror--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        <div class="col-md-12 col-lg-4 mb-3">

                        </div>


                        <div class="col-md-12 col-lg-4 mb-3">
                            <div class="form-group">
                                <label class="font-weight-bold" for="birth_province">Tỉnh/Thành phố:</label>
                                <select name="birth_province" id="birth_province" class="custom-select">
                                    <option selected value="{{$usr->birth_province}}">{{$usr->show_birth_province->name}}</option>
                                    <option value="0">Chọn Tỉnh/Thành phố</option>
                                </select>
                                @error('birth_province')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="birth_district">Quận/Huyện: </label>
                                <select class="custom-select" id="birth_district" name="birth_district">
                                    <option selected value="{{$usr->birth_district}}">{{$usr->show_birth_district->name}}</option>
                                    <option value="0">Chọn Quận/Huyện</option>
                                </select>
                                @error('birth_district')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="birth_ward">Phường/Xã: </label>
                                <select class="custom-select" id="birth_ward" name="birth_ward">
                                    <option selected value="{{$usr->birth_ward}}">{{$usr->show_birth_ward->name}}</option>
                                    <option value="0">Chọn Phường/Xã</option>
                                </select>
                                @error('birth_ward')<p style="color: red">{{$message}}</p> @enderror
                            </div>

                        </div>

                        <div class="col-md-12 col-lg-4 mb-3">
                            <div class="form-group">
                                <label class="font-weight-bold" for="permanent_province">HKTT Tỉnh/Thành phố:</label>
                                <select name="permanent_province" id="permanent_province" class="custom-select">
                                    <option selected value="{{$usr->permanent_province}}">{{$usr->show_permanent_province->name}}</option>
                                    <option value="0">Chọn Tỉnh/Thành phố</option>
                                </select>
                                @error('permanent_province')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="permanent_district">HKTT Quận/Huyện: </label>
                                <select class="custom-select" id="permanent_district" name="permanent_district">
                                    <option selected value="{{$usr->permanent_district}}">{{$usr->show_permanent_district->name}}</option>
                                    <option value="0">Chọn Quận/Huyện</option>
                                </select>
                                @error('permanent_district')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="permanent_ward">HKTT Phường/Xã: </label>
                                <select class="custom-select" id="permanent_ward" name="permanent_ward">
                                    <option selected value="{{$usr->permanent_ward}}">{{$usr->show_permanent_ward->name}}</option>
                                    <option value="0">Chọn Phường/Xã</option>
                                </select>
                                @error('permanent_ward')<p style="color: red">{{$message}}</p> @enderror
                            </div>

                        </div>

                        <div class="col-md-12 col-lg-12 mb-3">
                            <div class="form-group">
                                <label class="font-weight-bold" for="description">Thông tin thêm: </label>
                                <textarea class="form-control" name="description" id="" rows="3">{{$usr->description}}</textarea>
                            </div>
                        </div>


                        <div class="col-md-12 col-lg-12 mb-3 text-center">
                            <h3 class="font-weight-bold" >Thông tin ứng tuyển</h3>
                        </div>



                        <div class="col-md-12 col-lg-12 mb-3 text-center">
                            <button type="submit" class="btn btn-primary bg-ctut2 mt-1">Cập nhật
                            </button>
                        </div>

                        <div class="col-md-12 col-lg-12 mb-3">
                            {{--                           @foreach ($rel as $rell)--}}
                            {{--                           <li> {{$rell->name}};</li>--}}

                            {{--                            @endforeach--}}
                        </div>


                    </div>
                </div>

                <!-- END content -->
                <div class="col-md-5 col-lg-3 order-md-1">
                    @include('student.includes.sidebar')
                </div>
                <!-- END Sidebar -->
            </div>
        </form>
    </div>
</div>

@endsection
@section('js')
    <script>

        $('.img-bnupload').click(function () {
            $('.img-upload').click();
            //var a = $('input[type="file"]').val();
            //$(".img-bnupload").attr("src",a);
        });
        $('.img-upload').change(function (event) {
            var tmppath = URL.createObjectURL(event.target.files[0]);
            $(".img-bnupload").fadeIn("fast").attr('src', tmppath);
        });

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            load_json_data('birth_province');

            function load_json_data(id, parent_id)
            {
                $choosed={{$usr->birth_province}}

            var html_code = '';
                $.getJSON('province_district_ward.json', function(data){

                    // html_code += '<option value="'+$choosed+'">Chọn '+id+'</option>';

                    html_code += '<option value="'+$choosed+'">Chọn</option>';
                    $.each(data, function(key, value){
                        if(id == 'birth_province')
                        {
                            if(value.parent_id == '0')
                            {

                                html_code += '<option value="'+value.id+'">'+value.name+'</option>';
                            }
                        }
                        else
                        {
                            if(value.parent_id == parent_id)
                            {
                                html_code += '<option value="'+value.id+'">'+value.name+'</option>';
                            }
                        }
                    });
                    $('#'+id).html(html_code);
                });

            }

            $(document).on('change', '#birth_province', function(){
                var province_id = $(this).val();
                if(province_id != '')
                {
                    load_json_data('birth_district', province_id);
                }
                else
                {
                    $('#birth_district').html('<option value="">Select birth_district</option>');
                    $('#birth_ward').html('<option value="">Select birth_ward</option>');
                }
            });
            $(document).on('change', '#birth_district', function(){
                var district_id = $(this).val();
                if(district_id != '')
                {
                    load_json_data('birth_ward', district_id);
                }
                else
                {
                    $('#birth_ward').html('<option value="">Select birth_ward</option>');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            load_json_data('permanent_province');

            function load_json_data(id, parent_id)
            {
                $choosed={{$usr->permanent_province}}

            var html_code = '';
                $.getJSON('province_district_ward.json', function(data){

                    // html_code += '<option value="'+$choosed+'">Chọn '+id+'</option>';

                    html_code += '<option value="'+$choosed+'">Chọn</option>';
                    $.each(data, function(key, value){
                        if(id == 'permanent_province')
                        {
                            if(value.parent_id == '0')
                            {

                                html_code += '<option value="'+value.id+'">'+value.name+'</option>';
                            }
                        }
                        else
                        {
                            if(value.parent_id == parent_id)
                            {
                                html_code += '<option value="'+value.id+'">'+value.name+'</option>';
                            }
                        }
                    });
                    $('#'+id).html(html_code);
                });

            }

            $(document).on('change', '#permanent_province', function(){
                var province_id = $(this).val();
                if(province_id != '')
                {
                    load_json_data('permanent_district', province_id);
                }
                else
                {
                    $('#permanent_district').html('<option value="">Select permanent_district</option>');
                    $('#permanent_ward').html('<option value="">Select permanent_ward</option>');
                }
            });
            $(document).on('change', '#permanent_district', function(){
                var district_id = $(this).val();
                if(district_id != '')
                {
                    load_json_data('permanent_ward', district_id);
                }
                else
                {
                    $('#permanent_ward').html('<option value="">Select permanent_ward</option>');
                }
            });
        });
    </script>
@endsection
