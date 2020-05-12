<nav class="navbar navbar-expand-lg navbar-dark bg-ctut2">
    <div class="container">
        <div class="navbar-brand">Đại học Kỹ thuật Công nghệ Cần Thơ</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="ml-auto row">
            <ul class="nav ">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#"> <i class="fas fa-home nav-icon"></i> </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#" onclick="Dmode()"> <i class="fas fa-moon nav-icon" ></i> </a>
                </li>
            </ul>

            <div class="collapse navbar-collapse mt-auto" id="navbarNavDropdown">


                <ul class="navbar-nav  ">

                    @if(!Auth::guard('student')->check())
                        <li class="nav-item active">
                            <button type="button" class="btn btn-default" ><a href="{{route('student.get.login')}}"> Đăng nhập</a>

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
                                <a class="dropdown-item" href="{{route('student.get.edit')}}">Cập nhật thông tin cá nhân</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">Thay đổi mật khẩu</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item xacnhan" href="{{route('student.get.logout')}}">Đăng xuất</a>
                            </div>

                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>



