@extends('home.layouts.master')
@section('title','Lịch sử phát triển')
@section('content')
@section('breadcrumb_1','Lịch sử phát triển')
@section('breadcrumb_2')
    {{--<p class="text-center mb-3 "></p>
    <p class="bcrumb text-center"><a href="{{route('home.get.index')}}">Trang chủ</a>
        <span class="sep ion-android-arrow-dropright px-2"></span>
        <span class="current"><a href="{{route('home.get.welcome')}}">Giới thiệu</a></span>
    </p>--}}

    <p class="text-center mb-3 "></p>
    <p class="bcrumb text-center"><a href="{{route('home.get.index')}}">Trang chủ</a>
        <span class="sep ion-android-arrow-dropright px-2"></span>
        <span class="current"><a href="{{route('home.get.welcome')}}">Lịch sử phát triển</a></span>
    </p>

@endsection
<section class="site-section element-animate">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <div class="block-16">
                    <figure>
                        <img src="img/ctut_building.jpg" alt="Image placeholder" class="img-fluid">
                        <a href="/videos/ctut.mp4" class="play-button popup-vimeo"><span
                                class="ion-ios-play"></span></a>
                    </figure>
                </div>
            </div>
            <div class="col-md-6 order-md-1">

                <div class="block-15">
                    <div class="heading">
                        <h2>LỊCH SỬ PHÁT TRIỂN</h2>
                    </div>
                    <div class="text mb-5 text-black">
                        <p>Hơn 30 năm hình thành và phát triển, Trung tâm Đại học Tại chức Cần Thơ luôn hoàn thành xuất
                            sắc nhiệm vụ chính trị do Tỉnh ủy, Ủy ban nhân dân tỉnh Cần Thơ (nay là Thành ủy, Ủy ban
                            nhân dân thành phố Cần Thơ) giao chuẩn hóa cán bộ, nâng cao dân trí, thực hiện xã hội hóa
                            giáo dục, đóng góp đáng kể vào thành tích phát triển kinh tế - xã hội của các tỉnh Đồng bằng
                            sông Cửu Long nói chung và thành phố Cần Thơ nói riêng.</p>
                        <p>Ngày 29 tháng 01 năm 2013, Thủ tướng Chính phủ đã ra Quyết định số 249/QĐ-TTg thành lập <b
                                class="ctut-color">TRƯỜNG ĐẠI HỌC KỸ THUẬT - CÔNG NGHỆ CẦN THƠ</b> trên cơ sở nguồn nhân
                            lực, cơ sở vật chất của Trung tâm Đại học Tại chức Cần Thơ. Trường Đại học Kỹ thuật – Công
                            nghệ Cần Thơ trực thuộc Ủy ban nhân dân thành phố Cần Thơ, chịu sự quản lý nhà nước về giáo
                            dục của Bộ Giáo dục và Đào tạo. Trường có tư cách pháp nhân, con dấu và tài khoản riêng.</p>
                        <p>Các quyết định có liên quan đến quá trình phát triển:</p>
                        <p>- Quyết định số 363/QĐ.UBT.81, ngày 30 tháng 11 năm 1981 của Ủy ban nhân dân tỉnh Hậu Giang
                            về việc thành lập trường Kinh tế Kỹ thuật tỉnh Hậu Giang.- Quyết định số 82/QĐ.UBT.87, ngày
                            14 tháng 4 năm 1987 của Ủy ban nhân dân tỉnh Hậu Giang về việc đổi tên trường Kinh tế Kỹ
                            thuật tỉnh Hậu Giang thành Trung tâm Đào tạo Bồi dưỡng Tại chức tỉnh Hậu Giang.</p>
                        <p>- Quyết định số 02/QĐ.UBT.88, ngày 06 tháng 01 năm 1988 của Ủy ban nhân dân tỉnh Hậu Giang về
                            việc đổi tên Trung tâm Đào tạo Bồi dưỡng Tại chức tỉnh Hậu Giang thành Trung tâm Đại học Tại
                            chức tỉnh Hậu Giang </p>
                        <p>- Từ năm 1992, chia tỉnh Hậu Giang thành hai tỉnh Cần Thơ và Sóc Trăng, Trung tâm Đại học Tại
                            chức Hậu Giang mang tên Trung tâm Đại học Tại chức Cần Thơ.</p>
                        <p>- Quyết định số 1674/QĐ-UBND, ngày 03 tháng 6 năm 2009 của Ủy ban nhân dân thành phố Cần Thơ
                            về việc thành lập Trung tâm Đại học Tại chức Cần Thơ trực thuộc Ủy ban nhân dân thành phố
                            Cần Thơ.</p>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
<!-- END section -->







@endsection
@section('js')
    {{--    --}}
@endsection
