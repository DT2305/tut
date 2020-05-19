@extends('home.layouts.home-master')
@section('title','Cập nhật thông tin')
@section('content')
    <style>
        label{
            font-weight: bold;
        }
    </style>
    <div class="col-md-9 ">

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
        <div class="card mb-4">
            <div class="card-header bg-ctut text-white">
                <form action="{{route('home.post.edit')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-9">
                        <h2>Thông tin cá nhân</h2>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary bg-ctut2 float-right mt-1">Cập nhật</button>
                    </div>
                </div>
            </div>
            <div class="card-body">


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Họ và tên:</label>
                                <input type="text"
                                       @if($user['name'])
                                       value="{{$user['name']}}"
                                       @endif
                                       class="form-control" id="" name="name">
                                @error('name')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Giới tính:</label>
                                <select name="gender" class="custom-select">
                                    <option selected value="{{$user['gender']}}"> {{$user['gender']}}</option>
                                    @if($user['gender'] == "Nam")
                                        <option value="Nữ">Nữ</option>
                                    @else
                                        <option value="Nam">Nam</option>
                                    @endif


                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Ngày sinh:</label>
                                <input type="date" value="{{$user['birthday']}}" class="form-control" id="" name="birthday">
                                @error('birthday')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Số điện thoại:</label><small> Dùng để đăng nhập, không thể thay đổi</small>
                                <input type="tel" value="{{$user['phone_number']}}" class="form-control" id=""
                                       name="phone_number"  disabled>
                                @error('phone_number')<p style="color: red">{{$message}}</p> @enderror

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Số chứng minh nhân dân:</label>
                                <input type="tel" value="{{$user['identity_number']}}" class="form-control" id=""
                                       name="identity_number">
                                @error('identity_number')<p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" value="{{$user['email']}}" class="form-control" id="" name="email">
                        @error('email')<p style="color: red">{{$message}}</p> @enderror
                    </div>


                    <div class="form-group">
                        <label for="">Địa chỉ:</label>
                        <input type="text" value="{{$user['address']}}" class="form-control" id="" name="address">
                        @error('address')<p style="color: red">{{$message}}</p> @enderror
                    </div>

            </div>
            <div class="card-footer">

            </div>
        </div>



        <div class="card">
            <div class="card-header bg-ctut text-white">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Thông tin ứng tuyển</h2>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary bg-ctut2 float-right mt-1">Cập nhật</button>
                    </div>
                </div>

            </div>
            <div class="card-body">

                <h4>Nguyện vọng 1:</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Ngành:</label>
                            <input type="text" class="form-control" id="" name="major_1" value="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Tổ hợp</label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Điểm đạt được:</label>
                            <input type="number" class="form-control" id="" name="point_1" value="{{$user['point_1']}}" min="0" max="40">
                        </div>
                    </div>
                </div><!--/row-->
                <h4>Nguyện vọng 2:</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Ngành:</label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Tổ hợp</label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Điểm đạt được:</label>
                            <input type="number" class="form-control" id="" name="point_2" value="{{$user['point_2']}}" min="0" max="40">
                        </div>
                    </div>
                </div><!--/row-->
                <h4>Nguyện vọng 3:</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Ngành:</label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Tổ hợp</label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Điểm đạt được:</label>
                            <input type="number" class="form-control" id="" name="point_3" value="{{$user['point_3']}}" min="0" max="40">
                        </div>
                    </div>
                </div><!--/row-->
                <div class="control-group">
                    <div class="controls"><label for="">Ảnh chụp bảng điểm:</label>
                        <input type="file" style="display:none;" id="basicinput" name="point_img"
                               class="span8 img-upload">
                        <br>
                        <img style="padding: 10px 10px;
                                        background-color: white;
                                        box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
                                        -moz-box-shadow: 0 1px 2px rgba(34,25,25,0.4);
                                        -webkit-box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);" class="img-bnupload"
                             @if($user['point_img'])
                             src="{{asset($user['point_img'])}}"
                             @endif
                             @if(!$user['point_img'])
                             src="{{asset('images/user_img/point_img.png')}}"
                             @endif
                             width="200px" height="200px">
                    </div>
                </div>
                <br>


                <div class="form-group">
                    <label for="">Khu vực:</label>
                    <input type="text" class="form-control" id="" name="">
                </div>
                <div class="form-group">
                    <label for="">Ưu tiên:</label>
                    <input type="text" class="form-control" id="" name="">
                </div>

            </div>



            <div class="card-footer">

            </div>
            </form>
        </div>

    </div>
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
@endsection



