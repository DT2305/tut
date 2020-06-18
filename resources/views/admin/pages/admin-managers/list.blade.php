@extends('admin.layouts.admin-master')
@section('title','Danh sách Quản trị viên')
@section('content-header')
    <b>Danh sách quản trị viên</b>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <a class="btn btn-success" href="{{route('admin.managers.create')}}">Thêm quản trị viên</a>
                    <a class="btn btn-secondary text-white" onClick="window.location.reload();">Tải lại</a>

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
{{--                            <th>Tên đăng nhập</th>--}}
                            <th>Tên đầy đủ</th>
                            <th>Cấp bậc</th>
{{--                            <th>Trạng thái</th>--}}
                            <th>Hành động</th>
                        </tr>
                        </thead>
                            <tbody>
                            @foreach($check as $val)
                                <tr>
{{--                                <td>{{$val->username}}</td>--}}
                                <td>{{$val->full_name}}</td>
                                <td>{{$val->level}}</td>
{{--                                <td>{{$val->status}}</td>--}}
                                <td>
{{--                                    <a class="btn btn-warning" href="{{route('admin.managers.show',$val->id)}}"><i class="fas fa-info-circle text-white"></i></a>--}}
{{--                                    <a class="btn btn-success" href="{{route('admin.managers.edit',$val->id)}}"><i class="fas fa-pen"></i></a>--}}
{{--                                    <a class="btn btn-danger confirmClick" href="{{route('admin.managers.destroy',$val->id)}}"><i class="fas fa-trash-alt"></i></a>--}}

                                    <div class="dropdown dropleft float-right">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                data-toggle="dropdown">
                                            Hành động
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('admin.managers.show',$val->id)}}">
                                                <i class="fas fa-info text-warning mr-2"></i>Xem chi tiết</a>
                                            <a class="dropdown-item" href="{{route('admin.managers.edit',$val->id)}}">
                                                <i class="fas fa-pen text-success mr-2"></i>Sửa</a>
                                            <a class="dropdown-item confirmClick"
                                               href="{{route('admin.managers.destroy',$val->id)}}">
                                                <i class="fas fa-trash-alt text-danger mr-2"></i>Xóa</a>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        <tfoot>
                        <tr>
{{--                            <th>Tên đăng nhập</th>--}}
                            <th>Tên đầy đủ</th>
                            <th>Cấp bậc</th>
{{--                            <th>Trạng thái</th>--}}
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
                    "search": "Tìm kiếm",
                }
            });

        });

    </script>

@endsection
