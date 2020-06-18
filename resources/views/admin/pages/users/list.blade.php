@extends('admin.layouts.admin-master')
@section('title','Danh sách Ứng viên')
@section('content-header')
    <b>Danh sách ứng viên</b>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <a class="btn btn-success" href="{{route('admin.users.create')}}">Thêm ứng viên</a>
                    <a class="btn btn-secondary text-white" onClick="window.location.reload();">Tải lại</a>

                </div>
            </div>
        </div>
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">

                        <thead>
                        <tr>
                            <th>STT</th>
{{--                            <th>ID</th>--}}
                            <th>Họ và tên</th>
                            <th>Giới tính</th>
                            <th>Số điện thoại</th>
                            {{--<th>Email</th>--}}
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usr as $key=> $val)
                            <tr>
                                <td width="3%">{{$key}}</td>
{{--                                <td>{{$val->id}}</td>--}}
                                <td>{{$val->name}}</td>
                                <td>{{$val->gender}}</td>
                                <td>{{$val->phone_number}}</td>
                                {{--<td>{{$val->email}}</td>--}}
                                <td>
                                    <div class="dropdown dropleft float-right">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                data-toggle="dropdown">
                                            Hành động
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('admin.users.show',$val->id)}}">
                                                <i class="fas fa-info text-warning mr-2"></i>Xem chi tiết</a>
                                            <a class="dropdown-item" href="{{route('admin.users.edit',$val->id)}}">
                                                <i class="fas fa-pen text-success mr-2"></i>Sửa</a>
                                            <a class="dropdown-item confirmClick"
                                               href="{{route('admin.users.destroy',$val->id)}}">
                                                <i class="fas fa-trash-alt text-danger mr-2"></i>Xóa</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{route('admin.users.move',$val->id)}}">
                                                <i class="fas fa-plus text-primary mr-2"></i>Thêm sinh viên</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>STT</th>
{{--                            <th>ID</th>--}}
                            <th>Họ và tên</th>
                            {{--                            <th>Giới tính</th>--}}
                            <th>Số điện thoại</th>
                            {{--                            <th>Email</th>--}}
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
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
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

                // "columns": [
                //     { "width": "20%" },
                //     { "width": "20%" },
                //     { "width": "20%" },
                //     { "width": "20%" },
                //     { "width": "20%" }
                // ]

                // "columnDefs": [
                //     { "width": "20%", "targets": 0 }
                // ]
            });
        });
    </script>
@endsection
