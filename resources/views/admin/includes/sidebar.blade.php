<aside class="main-sidebar sidebar-dark-primary elevation-4" style="opacity: 0.9">
    <!-- Brand Logo -->
{{--    <a href="index3.html" class="brand-link">--}}
{{--        <img src="/img/CTUT_logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"--}}
{{--             style="opacity: .8">--}}
{{--        <span class="brand-text font-weight-light"><strong>CTUT</strong></span>--}}
{{--    </a>--}}

    <!-- Sidebar -->
    <div class="sidebar" >
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <a href="{{route('admin.get.index')}}">
                    <img src="/img/CTUT_logo.png" class="img-circle elevation-2" alt="User Image">
                </a>
            </div>
            <div class="info">
                <a href="{{route('admin.get.index')}}" class="d-block">CTUT</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.get.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Trang chủ
{{--                            <span class="right badge badge-danger">New</span>--}}
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview menu-open">
                    <a  class="nav-link ">
                        <i class="nav-icon fas fa-user-shield "></i>
                        <p>
                            {{Auth::guard('admin')->user()->username}}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.get.logout')}}" class="nav-link text-danger active" >
                                <i class="fas fa-power-off nav-icon"></i>
                                <p>Đăng xuất</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link text-success" data-toggle="modal" data-target="#myModal">
                                <i class="fas fa-key nav-icon"></i>
                                <p>Đổi mật khẩu</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">
                    Người dùng
                </li>

{{--                Quản trị viên--}}
                <li class="nav-item has-treeview ">
                    <a  class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Quản trị viên
                            <i class="right fas fa-angle-left"></i>
                            <span class="badge badge-danger right">{{$admin}}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.managers.index')}}" class="nav-link ">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Danh sách Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.managers.create')}}" class="nav-link">
                                <i class="far fa-plus-square nav-icon"></i>
                                <p>Thêm Admin</p>
                            </a>
                        </li>
                    </ul>
                </li>
{{--                Sinh viên--}}
                <li class="nav-item has-treeview ">
                    <a  class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Sinh viên
                            <i class="right fas fa-angle-left"></i>
                            <span class="badge badge-success right">{{$student}}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.students.index')}}" class="nav-link ">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Danh sách sinh viên</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.students.create')}}" class="nav-link">
                                <i class="far fa-plus-square nav-icon"></i>
                                <p>Thêm sinh viên</p>
                            </a>
                        </li>
                    </ul>
                </li>
{{--                Ứng viên--}}
                <li class="nav-item has-treeview ">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-user-clock"></i>
                        <p>
                            Ứng cử viên
                            <i class="right fas fa-angle-left"></i>
                            <span class="badge badge-primary right">{{$user}}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.users.index')}}" class="nav-link ">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Danh sách ứng viên</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.users.create')}}" class="nav-link">
                                <i class="far fa-plus-square nav-icon"></i>
                                <p>Thêm ứng viên</p>
                            </a>
                        </li>
                    </ul>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a  class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-th"></i>--}}
{{--                        <p>--}}
{{--                            Simple Link--}}
{{--                            <span class="right badge badge-danger">New</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="nav-header">
                    Đào tạo
                </li>

                {{--                Khoa--}}
                <li class="nav-item has-treeview ">
                    <a  class="nav-link">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                            Khoa
                            <i class="right fas fa-angle-left"></i>
                            <span class="badge badge-danger right">{{$department}}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.departments.index')}}" class="nav-link ">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Danh sách Khoa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.departments.create')}}" class="nav-link">
                                <i class="far fa-plus-square nav-icon"></i>
                                <p>Thêm Khoa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--                Ngành--}}
                <li class="nav-item has-treeview ">
                    <a  class="nav-link">
                        <i class="nav-icon fas fa-school"></i>
                        <p>
                            Ngành
                            <i class="right fas fa-angle-left"></i>
                            <span class="badge badge-success right">{{$faculty}}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.faculties.index')}}" class="nav-link ">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Danh sách ngành</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.faculties.create')}}" class="nav-link">
                                <i class="far fa-plus-square nav-icon"></i>
                                <p>Thêm ngành</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--                Lớp--}}
                <li class="nav-item has-treeview ">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Lớp
                            <i class="right fas fa-angle-left"></i>
                            <span class="badge badge-primary right">{{$course}}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.courses.index')}}" class="nav-link ">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Danh sách lớp học</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.courses.create')}}" class="nav-link">
                                <i class="far fa-plus-square nav-icon"></i>
                                <p>Thêm lớp học</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">
                    Thông tin
                </li>

                <li class="nav-item has-treeview ">
                    <a  class="nav-link ">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Tin tức
                            <i class="right fas fa-angle-left"></i>
                            <span class="badge badge-warning right">{{$post}}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.posts.index')}}" class="nav-link ">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Danh sách bài đăng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.posts.create')}}" class="nav-link">
                                <i class="far fa-plus-square nav-icon"></i>
                                <p>Thêm Bài đăng</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item has-treeview ">
                    <a  class="nav-link ">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Thể loại
                            <i class="right fas fa-angle-left"></i>
                            <span class="badge badge-secondary right">{{$category}}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.categories.index')}}" class="nav-link ">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Danh sách thể loại</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.categories.create')}}" class="nav-link">
                                <i class="far fa-plus-square nav-icon"></i>
                                <p>Thêm thể loại</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
