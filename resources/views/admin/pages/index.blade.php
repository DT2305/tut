@extends('admin.layouts.admin-master')
@section('title','Trang quản trị')
@section('content-header')
    <b>Trang chủ ADMIN</b>
@endsection
@section('content')
    <h3 class="mt-3">Đào tạo</h3>
    <!-- Small boxes (Stat box 1) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-1a">
                <div class="inner">
                    <h3>{{$department}}</h3>

                    <p>Khoa</p>
                </div>
                <div class="icon">
                    <i class="fas fa-university"></i>
                </div>
                <a href="{{route('admin.departments.index')}}" class="small-box-footer">Xem chi tiết <i
                        class="far fa-eye"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-2a ">
                <div class="inner">
                    {{--                    <h3>53<sup style="font-size: 20px">%</sup></h3>--}}
                    <h3>{{$faculty}}</h3>

                    <p>Ngành</p>
                </div>
                <div class="icon">
                    <i class="fas fa-school"></i>
                </div>
                <a href="{{route('admin.faculties.index')}}" class="small-box-footer">Xem chi tiết <i
                        class="far fa-eye"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-3a ">
                <div class="inner">
                    <h3>{{$course}}</h3>

                    <p>Lớp</p>
                </div>
                <div class="icon">
                    <i class="fas fa-building"></i>
                </div>
                <a href="{{route('admin.courses.index')}}" class="small-box-footer">Xem chi tiết <i
                        class="far fa-eye"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-5a">
                <div class="inner">
                    {{--                    <h3>53<sup style="font-size: 20px">%</sup></h3>--}}
                    <h3>{{$student}}</h3>

                    <p>Sinh viên</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <a href="{{route('admin.students.index')}}" class="small-box-footer">Xem chi tiết <i
                        class="far fa-eye"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <h3>Người dùng</h3>
    <!-- Small boxes (Stat box 2) -->
    <div class="row">
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-4a">
                <div class="inner">
                    <h3>{{$admin}}</h3>

                    <p>Quản trị viên</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <a href="{{route('admin.managers.index')}}" class="small-box-footer">Xem chi tiết <i
                        class="far fa-eye"></i></a>
            </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-6a">
                <div class="inner">
                    <h3>{{$user}}</h3>

                    <p>Ứng viên</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-clock"></i>
                </div>
                <a href="{{route('admin.users.index')}}" class="small-box-footer">Xem chi tiết <i
                        class="far fa-eye"></i></a>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <h3>Tin tức</h3>
    <!-- Small boxes (Stat box 3) -->
    <div class="row">
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-7a ">
                <div class="inner">
                    <h3>{{$post}}</h3>

                    <p>Bài đăng</p>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <a href="{{route('admin.posts.index')}}" class="small-box-footer">Xem chi tiết <i
                        class="far fa-eye"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6 ">
            <!-- small box -->
            <div class="small-box bg-8a ">
                <div class="inner">
{{--                                        <h3>53<sup style="font-size: 20px">%</sup></h3>--}}
                    <h3>{{$category}}</h3>

                    <p>Thể loại</p>
                </div>
                <div class="icon">
                    <i class="fas fa-th-large"></i>
                </div>
                <a href="{{route('admin.categories.index')}}" class="small-box-footer">Xem chi tiết <i
                        class="far fa-eye"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
@endsection
