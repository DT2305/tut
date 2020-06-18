@extends('home.layouts.master')
@section('title','Trang chủ')
@section('content')
@section('breadcrumb_1','Trang chủ')
@section('breadcrumb_2')
    <p class="text-center mb-3 "></p>
    <p class="bcrumb text-center"><a href="">Trang chủ</a>
{{--        <span class="sep ion-android-arrow-dropright px-2"></span>--}}
{{--        <span class="current"> <a >Tin tức</a></span>--}}
@endsection
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-9 order-md-2">
                <div class="row">
                    @include('home.pages.posts.posts')
                </div>

                <div class="row mb-5 text-center">
                    <div class="col-md-6 ">
                        {{$pos->links()}}
                    </div>
                </div>
            </div>
            <!-- END content -->
            <div class="col-md-6 col-lg-3 order-md-1">
                @include('home.includes.sidebar')
            </div>
            <!-- END Sidebar -->
        </div>
    </div>
</div>

@endsection
@section('js')
    {{--    --}}
@endsection
