@extends('student.layouts.master')
@section('title','Thông tin cá nhân')
@section('content')
@section('breadcrumb_1','Thông tin cá nhân')
@section('breadcrumb_2')
    {{--    <p class="text-center mb-3 "></p>
        <p class="bcrumb text-center"><a href="">Trang chủ</a>
            <span class="sep ion-android-arrow-dropright px-2"></span>
            <span class="current"> <a href="{{route('student.get.edit')}}">Giới thiệu</a></span>
        </p>--}}

    <p class="text-center mb-3 "></p>
    <p class="bcrumb text-center"><a href="">Trang chủ</a>
        <span class="sep ion-android-arrow-dropright px-2"></span>
        <span class="current"> <a href="{{route('student.get.edit')}}">Giới thiệu</a></span>
    </p>

@endsection
<div class="site-section bg-light">
    <div class="container">
            <div class="row">

                <div class="col-md-7 col-lg-9 order-md-2">

                    <div class="row">
                        <div class="col-md-12 col-lg-12 mb-3 text-center">

                            <h3 class="font-weight-bold" >Thông tin sinh viên</h3>
                            <h3 class="m-0 font-weight-bold">{{$usr->name}}</h3>

                        </div>

                        <div class="col-md-12 col-lg-3 mb-3 text-center">
                            <img src="{{$usr->avatar}}" alt="" class="fakeimg img-thumbnail">
                            <p>MSSV: {{$usr->student_code}}</p>


                        </div>
                        <div class="col-md-12 col-lg-4 mb-3">
                            <p class="m-0 font-weight-bold">Khoa: </p>
                            <h5>{{$usr->show_course->show_faculty->show_department->name}}</h5>
                            <p class="m-0 font-weight-bold">Chuyên ngành:</p>
                            <h5>{{$usr->show_course->show_faculty->name}}</h5>
                            <p class="m-0 font-weight-bold">Lớp:</p>
                            <h5>{{$usr->show_course->name}}</h5>
                            <p class="m-0 font-weight-bold">Khóa:</p>
                            <h5>{{$usr->show_course->year_start}}</h5>
                        </div>

                        <div class="col-md-12 col-lg-5 mb-3">
                            <p class="m-0 font-weight-bold">Ngày vào trường:</p>
                            {{--<h5>{{$usr->start_date}}</h5>--}}
                            <h5>{{date('d-m-Y', strtotime($usr->start_date))}}</h5>
                            <p class="m-0 font-weight-bold">Cơ sở:</p>
                            <h5>{{$usr->school_name}}</h5>
                            <p class="m-0 font-weight-bold">Loại hình đào tạo:</p>
                            <h5>{{$usr->show_education_type->name}}</h5>
                            <p class="m-0 font-weight-bold">Bậc đào tạo: </p>
                            <h5>{{$usr->show_education_level->name}}</h5>
                        </div>

                        <div class="col-md-12 col-lg-12 mb-3 text-center">
                            <h3 class="font-weight-bold">Thông tin cá nhân</h3>
                        </div>

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
                                <select name="gender" class="custom-select" autofocus disabled>
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
                                       name="birthday" disabled>
                                @error('birthday')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="">Dân tộc:</label>
                                <select name="nation" class="custom-select" disabled>
                                    <option selected value="{{$usr['nation']}}">{{$usr->show_nation->name}}</option>
                                    <option disabled value="">-----</option>
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
                                       name="phone_number" disabled>
                                @error('phone_number')<p style="color: red">{{$message}}</p> @enderror

                            </div>
                            <div class="form-group">
                                <i class="fa fa-envelope"></i>
                                <label class="font-weight-bold" for="">Email:</label>
                                <input type="email" value="{{$usr['email']}}" class="form-control" id="" name="email" disabled>
                                @error('email')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="">Tôn giáo:</label>
                                <select name="religion" class="custom-select" disabled>
                                    <option selected value="{{$usr['religion']}}"> {{$usr->show_religion->name}}</option>
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
                                <input type="tel" value="{{$usr['identity_number']}}" class="form-control" id=""
                                       name="identity_number" disabled>
                                @error('identity_number')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="">Nơi cấp CMND:</label>
                                <select name="id_issue_place" class="custom-select" disabled>
                                    <option selected
                                            value="{{$usr->id_issue_place}}"> {{$usr->show_id_issue_place->name}}</option>
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
                                       name="id_number_date" disabled>
                                @error('id_number_date')<p style="color: red">{{$message}}</p> @enderror
                            </div>

                        </div>

                        <div class="col-md-12 col-lg-12 mb-3">
                            <div class="form-group">
                                <label class="font-weight-bold" for="">Địa chỉ:</label>
                                <input type="text" value="{{$usr['address']}}" class="form-control" id=""
                                       name="address" disabled>
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
                            <div class="form-group">
                                <i class="fas fa-piggy-bank"></i>
                                <label class="font-weight-bold" for="bank_card">Số thẻ ATM:</label>
                                <input type="text" value="{{$usr['bank_card']}}" class="form-control" id=""
                                       name="bank_card" disabled>
                                @error('bank_card')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="bank">Ngân hàng phát hành:</label>
                                <input type="text" value="{{$usr['bank']}}" class="form-control" id=""
                                       name="bank" disabled>
                                @error('bank')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <i class="fas fa-file-medical"></i>
                                <label class="font-weight-bold" for="insurance_number">Số thẻ BHYT::</label>
                                <input type="text" value="{{$usr['insurance_number']}}" class="form-control" id=""
                                       name="bank_card" disabled>
                                @error('bank_card')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>


                        <div class="col-md-12 col-lg-4 mb-3">
                            <div class="form-group">
                                <label class="font-weight-bold" for="birth_province">Tỉnh/Thành phố:</label>
                                <select name="birth_province" id="birth_province" class="custom-select" disabled>
                                    <option selected value="{{$usr->birth_province}}">{{$usr->show_birth_province->name}}</option>
                                    <option value="0">Chọn Tỉnh/Thành phố</option>
                                </select>
                                @error('birth_province')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="birth_district">Quận/Huyện: </label>
                                <select class="custom-select" id="birth_district" name="birth_district" disabled>
                                    <option selected value="{{$usr->birth_district}}">{{$usr->show_birth_district->name}}</option>
                                    <option value="0">Chọn Quận/Huyện</option>
                                </select>
                                @error('birth_district')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="birth_ward">Phường/Xã: </label>
                                <select class="custom-select" id="birth_ward" name="birth_ward" disabled>
                                    <option selected value="{{$usr->birth_ward}}">{{$usr->show_birth_ward->name}}</option>
                                    <option value="0">Chọn Phường/Xã</option>
                                </select>
                                @error('birth_ward')<p style="color: red">{{$message}}</p> @enderror
                            </div>

                        </div>

                        <div class="col-md-12 col-lg-4 mb-3">
                            <div class="form-group">
                                <label class="font-weight-bold" for="permanent_province">HKTT Tỉnh/Thành phố:</label>
                                <select name="permanent_province" id="permanent_province" class="custom-select" disabled>
                                    <option selected value="{{$usr->permanent_province}}">{{$usr->show_permanent_province->name}}</option>
                                    <option value="0">Chọn Tỉnh/Thành phố</option>
                                </select>
                                @error('permanent_province')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="permanent_district">HKTT Quận/Huyện: </label>
                                <select class="custom-select" id="permanent_district" name="permanent_district" disabled>
                                    <option selected value="{{$usr->permanent_district}}">{{$usr->show_permanent_district->name}}</option>
                                    <option value="0">Chọn Quận/Huyện</option>
                                </select>
                                @error('permanent_district')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="permanent_ward">HKTT Phường/Xã: </label>
                                <select class="custom-select" id="permanent_ward" name="permanent_ward" disabled>
                                    <option selected value="{{$usr->permanent_ward}}">{{$usr->show_permanent_ward->name}}</option>
                                    <option value="0">Chọn Phường/Xã</option>
                                </select>
                                @error('permanent_ward')<p style="color: red">{{$message}}</p> @enderror
                            </div>

                        </div>

                        <div class="col-md-12 col-lg-12 mb-3">
                            <div class="form-group">
                                <label class="font-weight-bold" for="description">Thông tin thêm: </label>
                                <textarea class="form-control" name="description" id="" rows="3" disabled>{{$usr->description}}</textarea>
                            </div>
                        </div>



                        <div class="col-md-12 col-lg-12 mb-3 text-center">
                            <a class="text-white" href="{{route('student.get.edit')}}">
                            <button type="submit" class="btn btn-primary bg-ctut2 mt-1" >
                                Chỉnh sửa
                            </button>
                            </a>
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

    </div>
</div>

@endsection
@section('js')

@endsection
