<section class="site-hero site-sm-hero overlay darken-pseudo" data-stellar-background-ratio="0.5"
         style="background-image: url(img/ctut_building_press.jpg);">
    <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
            <div class="col-md-12 text-center">
                <div class="mb-5 element-animate">
                    <div class="block-17 py-3">
                        @if(!Auth::check())
                            <h2 class="heading text-center mb-4 font-weight-bold">Bước đầu để trở thành sinh viên chính thức</h2>
                            <p class="text-center mb-3 ">Đăng ký để cập nhật thêm thông tin tuyển sinh</p>
                            <p class="text-center"><a href="{{route('home.get.regis')}}" class="btn py-3 px-5">Đăng ký ngay</a></p>
                        @endif
                        @if(Auth::check())
                            <h2 class="heading text-center mb-4 font-weight-bold">@yield('breadcrumb_1')</h2>
                            @yield('breadcrumb_2')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->


{{--<section class="site-hero overlay darken-pseudo" data-stellar-background-ratio="0.5" style="background-image: url(img/ctut_building.jpg);">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center justify-content-center site-hero-inner">--}}
{{--            <div class="col-md-10">--}}

{{--                <div class="mb-5 element-animate ">--}}
{{--                    <div class="block-17 py-3">--}}
{{--                        @if(!Auth::check())--}}
{{--                            <h2 class="heading text-center mb-4 font-weight-bold">Bước đầu để trở thành sinh viên chính thức</h2>--}}

{{--                            <p class="text-center mb-3 ">Đăng ký để cập nhật thêm thông tin tuyển sinh</p>--}}
{{--                            <p class="text-center"><a href="{{route('home.get.regis')}}" class="btn py-3 px-5">Đăng ký ngay !!!</a></p>--}}
{{--                        @endif--}}
{{--                        @if(Auth::check())--}}
{{--                                <h2 class="heading text-center mb-4 font-weight-bold">@yield('breadcrumb_1')</h2>--}}

{{--                                @yield('breadcrumb_2')--}}


{{--                        @endif--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
