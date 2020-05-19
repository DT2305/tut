@extends('student.layouts.student-master')
@section('title', 'Cập nhật thông tin - Sinh viên')
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
            <div class="card-header bg-ctut2 text-white">
                <form action="{{route('student.post.edit')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-9">
                            <h2>Thông tin cá nhân</h2>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary float-right mt-1">Cập nhật</button>
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
                            <label for="">Số điện thoại:</label>
                            <input type="tel" value="{{$user['phone_number']}}" class="form-control" id=""
                                   name="phone_number" >
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
            </form>


    </div>


@endsection
