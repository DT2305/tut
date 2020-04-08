<nav class="navbar navbar-expand-lg navbar-dark bg-ctut">
    <div class="container">
        <div class="navbar-brand">Đại học Kỹ thuật Công nghệ Cần Thơ</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-auto" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <i class="fas fa-home nav-icon"></i> </a>
                </li>
                @if(!Auth::guard('student')->check())
                    <li class="nav-item active">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#loginModal">
                            Đăng nhập
                        </button>
                    </li>
                @endif
                @if(Auth::guard('student')->check())

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            {{Auth::guard('student')->user()->name}}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Thông tin cá nhân</a>
{{--                            <a class="dropdown-item" href="#">Thông tin ứng tuyển</a>--}}
                            <a class="dropdown-item" href="{{route('student.get.logout')}}">Đăng xuất</a>
                        </div>

                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
