@extends('home.layouts.master')
@section('title',$cat)
@section('content')
@section('breadcrumb_1',$cat)
@section('breadcrumb_2')

    <p class="text-center mb-3 "></p>
    <p class="bcrumb text-center"><a href="">Trang chủ</a>
        <span class="sep ion-android-arrow-dropright px-2"></span>
        <span class="current"> <a href="{{route('home.get.index')}}">Tin tức</a></span>
        <span class="sep ion-android-arrow-dropright px-2"></span>
        <span class="current"> <a>{{$cat}}</a></span>

@endsection
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-9 order-md-2">
                <div class="row">
                    @foreach($pos as $val)
                        <div class="col-md-12 col-lg-12 mb-5">
                            <div class="block-20 ">
                                @if($val->avatar == null)
                                @else
                                    <figure>
                                        <img src="post_avatar/{{$val->avatar }}" alt=""
                                             class="img-fluid card-img">
                                    </figure>
                                @endif


                                <div class="text">
                                    <h3 class="heading"><a
                                            href="{{route('home.get.content',$val->changedtitle)}}">{{$val->title}}</a>
                                    </h3>
                                    <div class="meta">
                                        <div><a><span
                                                    class="ion-android-calendar"></span> {{ \Carbon\Carbon::parse($val->created_at)->format('d/m/Y')}}
                                            </a></div>
                                        <div><a><span
                                                    class="ion-android-person"></span> {{$val->origional_author}}
                                            </a></div>
                                        <div><a><span class="ion-eye"></span> {{$val->view}}</a></div>
                                        <div><a><span
                                                    class="ion-code"></span> {{$val->show_category->cate_name}}
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
