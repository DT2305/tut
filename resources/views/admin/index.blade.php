@extends('admin.layouts.admin-master')
@section('title','Dashboard Mẫu')
@section('content-header')
    <b>Trang chủ ADMIN</b>
@endsection
@section('content')
    <!-- Small boxes (Stat box 1) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$admin}}</h3>

                    <p>Admin</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <a href="#" class="small-box-footer">Xem chi tiết <i class="far fa-eye"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
{{--                    <h3>53<sup style="font-size: 20px">%</sup></h3>--}}
                    <h3>{{$new}}</h3>

                    <p>Tin tức</p>
                </div>
                <div class="icon">
                   <i class="fas fa-newspaper"></i>
                </div>
                <a href="#" class="small-box-footer">Xem chi tiết <i class="far fa-eye"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$student}}</h3>

                    <p>Sinh viên</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <a href="#" class="small-box-footer">Xem chi tiết <i class="far fa-eye"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$user}}</h3>

                    <p>Ứng cử viên</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-clock"></i>
                </div>
                <a href="#" class="small-box-footer">Xem chi tiết <i class="far fa-eye"></i></a>
            </div>
        </div>
        <!-- ./col -->
        {{Auth::guard('admin')->user()->username}}
        {{Auth::guard('admin')->user()->email}}
    </div>
    <!-- /.row -->


@endsection
