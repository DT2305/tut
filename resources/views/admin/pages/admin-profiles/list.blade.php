@extends('admin.layouts.admin-master')
@section('title','Danh sách Quản trị viên')
@section('content-header')
    <b>Danh sách quản trị viên</b>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">

                        <thead>
                        <tr>
                            <th>Tên đăng nhập</th>
                            <th>Tên đầy đủ</th>
                            <th>Cấp bậc</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                            <tbody>
                            @foreach($check as $val)
                                <tr>
                                <td>{{$val->username}}</td>
                                <td>{{$val->full_name}}</td>
                                <td>{{$val->status}}</td>
                                <td>{{$val->phone_number}}</td>
                                <td>
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    <button class="btn btn-success"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        <tfoot>
                        <tr>
                            <th>Tên đăng nhập</th>
                            <th>Tên đầy đủ</th>
                            <th>Cấp bậc</th>
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
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,

                // "columns": [
                //     null,
                //     null,
                //     null,
                //     null,
                //     { "width": "15%" }
                // ]

                // "columnDefs": [
                //     { "width": "20%", "targets": 0 }
                // ]
            });
        });
    </script>
@endsection
