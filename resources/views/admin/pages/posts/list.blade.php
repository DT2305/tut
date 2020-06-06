@extends('admin.layouts.admin-master')
@section('title','Danh sách tin tức')
@section('content-header')
    <b>Danh sách tin tức</b>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <a class="btn btn-success" href="{{route('admin.posts.create')}}">Thêm tin tức</a>
                    <a class="btn btn-secondary text-white" onClick="window.location.reload()">Tải lại</a>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">

                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>
                            <th>Tác giả</th>
                            <th>Thể loại</th>
                            <th>Đối tượng</th>
                            <th>Ảnh bài đăng</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pos as $key=> $val)

                            <tr>
                                <td width="3%">{{$key}}</td>
                                <td>{{$val->title}}</td>
                                <td>{{$val->description}}</td>
                                <td>{{$val->author}}</td>
                                <td>{{$val->show_category->cate_name}}</td>
                                <td>
                                    @if($val->target==1)
                                        <p class="text-red">Ứng viên</p>
                                    @else
                                        <p class="text-blue">Sinh viên</p>
                                    @endif
                                </td>
                                <td><img src="{{asset($val->avatar)}}" width="50px" height="50px"></td>
                                <td>
                                    @if($val->status==1)
                                        <p class="text-black">Kích hoạt</p>
                                    @else
                                        <p class="text-gray">Ẩn</p>
                                    @endif
                                </td>
                                <td width="10%">
                                    <div class="dropdown dropleft float-right">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                data-toggle="dropdown">
                                            Hành động
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('admin.posts.show',$val->id)}}">
                                                <i class="fas fa-info text-warning mr-2"></i>Xem chi tiết</a>
                                            <a class="dropdown-item" href="{{route('admin.posts.edit',$val->id)}}">
                                                <i class="fas fa-pen text-success mr-2"></i>Sửa</a>
                                            <a class="dropdown-item confirmClick"
                                               href="{{route('admin.posts.destroy',$val->id)}}">
                                                <i class="fas fa-trash-alt text-danger mr-2"></i>Xóa</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>
                            <th>Tác giả</th>
                            <th>Thể loại</th>
                            <th>Đối tượng</th>
                            <th>Ảnh bài đăng</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        <!-- /.col -->
    </div>
@endsection
@section('js')
    <!-- DataTables -->
    <script src={{asset("dashboard_layout/plugins/datatables/jquery.dataTables.js")}}></script>
    <script src={{asset("dashboard_layout/plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}></script>
    <script>
        $(function () {
            $("#example2").DataTable({
                "language": {
                    "lengthMenu": "Hiển thị _MENU_ hàng mỗi trang",
                    "zeroRecords": "Không có kết quả nào - sorry :(",
                    "info": "Đang hiển thị trang _PAGE_ trong _PAGES_ trang ",
                    "infoEmpty": "Không có kết quả nào",
                    "infoFiltered": "(Lọc từ _MAX_ kết quả tổng cộng)",
                    "paginate": {
                        "previous": "<",
                        "next": ">"
                    },
                    "search":"Tìm kiếm",
                }
            });

        });

    </script>
@endsection
