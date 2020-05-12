<header role="banner">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand absolute" href="{{route('student.get.welcome')}}"><img src="/img/ctut_logo.png" alt=""
                                                          style="width: 80px; height: 80px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('student.get.index')}}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('student.get.welcome')}}">Giới thiệu</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Ngành học</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="courses.html">Khoa học máy tính</a>
                            <a class="dropdown-item" href="courses.html">Khoa học dữ liệu</a>
                            <a class="dropdown-item" href="courses.html">Hệ thống thông tin</a>
                            <a class="dropdown-item" href="courses.html">Công nghệ thông tin</a>
                            <a class="dropdown-item" href="courses.html">Kỹ thuật phần mềm</a>
                            <a class="dropdown-item" href="courses.html">Kỹ thuật hệ thống công nghiệp</a>
                            <a class="dropdown-item" href="courses.html">Quản lý công nghiệp</a>
                            <a class="dropdown-item" href="courses.html">Logistics và quản lý chuỗi cung ứng</a>
                            <a class="dropdown-item" href="courses.html">Quản lý xây dựng</a>
                            <a class="dropdown-item" href="courses.html">Công nghệ kỹ thuật công trình xây dựng</a>
                            <a class="dropdown-item" href="courses.html">Công nghệ kỹ thuật năng lượng</a>
                            <a class="dropdown-item" href="courses.html">Công nghệ kỹ thuật cơ điện tử</a>
                            <a class="dropdown-item" href="courses.html">Công nghệ kỹ thuật điện, điện tử</a>
                            <a class="dropdown-item" href="courses.html">Công nghệ kỹ thuật điều khiển và tự động hóa</a>
                            <a class="dropdown-item" href="courses.html">Công nghệ thực phẩm</a>
                            <a class="dropdown-item" href="courses.html">Công nghệ sinh học</a>
                        </div>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Tin tức</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown05">
                            <a class="dropdown-item" href="#">Thông tin nhà trường</a>
                            <a class="dropdown-item" href="#">Tuyển sinh</a>
                            <a class="dropdown-item" href="#">Công bố kết quả</a>

                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Liên hệ</a>
                    </li>

                </ul>
                <ul class="navbar-nav absolute-right">
                    @if(!Auth::guard('student')->check())
                        <li>
                            <a href="{{route('student.get.login')}}">Đăng nhập</a>
                        </li>
                    @endif
                    @if(Auth::guard('student')->check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">{{Auth::guard('student')->user()->name}}</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown05">
                                <a class="dropdown-item" href="{{route('student.get.info')}}">Thông tin cá nhân</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">Thay đổi
                                    mật khẩu</a>
                                <a class="dropdown-item" href="{{route('student.get.logout')}}">Đăng xuất</a>
                            </div>

                        </li>
                    @endif

                </ul>

            </div>
        </div>
    </nav>
</header>
