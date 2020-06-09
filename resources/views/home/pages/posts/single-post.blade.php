@extends('home.layouts.master')
@foreach($pos as $val)
@section('title',$val->title)
@section('content')
@section('breadcrumb_1',$val->title)
@section('breadcrumb_2')

    <p class="text-center mb-3 ">

    <p class="bcrumb text-center">
        <small>Đăng bởi</small> <em>{{$val->origional_author}}</em>
        <small>ngày</small> <em>{{ \Carbon\Carbon::parse($val->created_at)->format('d/m/Y')}}</em>

    </p>
@endsection
<div class="site-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-lg-8 order-md-2">
                <?php echo $val->content;?>
            </div>
            <!-- END content -->
            <div class="col-md-6 col-lg-4 order-md-1">
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
@endforeach
