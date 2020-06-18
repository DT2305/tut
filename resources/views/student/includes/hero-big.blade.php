<section class="site-hero overlay darken-pseudo" data-stellar-background-ratio="0.5"
         style="background-image: url(img/ctut_building.jpg);">
    <div class="container">
        <div class="row align-items-center justify-content-center site-hero-inner">
            <div class="col-md-10">
                <div class="mb-5 element-animate ">
                    <div class="block-17 py-3">
                        @if(!Auth::guard('student')->check())
                            <h2 class="heading text-center mb-4 font-weight-bold">Chào mừng sinh viên chính thức</h2>
                            <p class="text-center mb-3 ">Đăng nhập để cập nhật thông tin tại trường</p>
                            <p class="text-center"><a href="{{route('student.get.login')}}" class="btn py-3 px-5">Đăng nhập</a></p>
                        @endif
                        @if(Auth::guard('student')->check())
                            <h2 class="heading text-center mb-4 font-weight-bold">@yield('breadcrumb_1')</h2>
                            @yield('breadcrumb_2')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
