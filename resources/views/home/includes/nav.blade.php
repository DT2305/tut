<nav class="navbar navbar-expand-lg navbar-dark bg-ctut">
    <div class="container">

        <a class="navbar-brand" href="#"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mt-auto" id="navbarNavDropdown">
            <ul class="navbar-nav  ">
                <li class="nav-item pr-2">
                    <a class="nav-link" href="#"><i class="fas fa-home nav-icon pr-2"> </i>Trang chủ</a>
                </li>
                <li class="nav-item pr-2">
                    <a class="nav-link" href="#"> <i class="fas fa-phone nav-icon pr-2"></i>Liên hệ</a>
                </li>
                <li class="nav-item pr-2">
                    <a class="nav-link" href="#"><i class="fas fa-info-circle nav-icon pr-2"></i>Thông tin</a>
                </li>

            </ul>

        </div>
        <ul class="navbar-nav ml-auto ">
            @if(!Auth::check())
                <li class="nav-item ">
                    {{--                        <a class="nav-link" href="#" data-toggle="modal" data-target="#regisModal"> Đăng ký ứng tuyển </a>--}}
                    <a class="nav-link" href="#"> Đăng ký ứng tuyển </a>
                </li>
                <li class="nav-item ">
                    {{--                        <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal"> Đăng nhập </a>--}}
                    <a class="nav-link" href="{{route('home.get.login')}}" > Đăng nhập </a>
                </li>
            @endif
            @if(Auth::check())

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                        {{Auth::user()->phone_number}}
                        {{--                            {{$user['name']}}--}}
                        {{--                            {{$user['phone_number']}}--}}
                    </a>


                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">{{ Auth::user()->name }}
                            {{ Auth::user()->phone_number }}</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">Thay đổi mật khẩu</a>
                        <a class="dropdown-item" href="#">Thông tin cá nhân</a>
                        <a class="dropdown-item" href="#">Thông tin ứng tuyển</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item xacnhan" href="{{route('home.get.logout')}}">Đăng xuất</a>
                    </div>

                </li>
            @endif
        </ul>
    </div>
</nav>

<script>
    $('.xacnhan').click(function(e) {
        if (!confirm('Bạn chắc chắn không ? ')) {
e.preventDefault();
}
});

</script>
