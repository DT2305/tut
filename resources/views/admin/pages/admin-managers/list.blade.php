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
                    <a class="btn btn-primary" href="{{route('admin.managers.create')}}">Thêm quản trị viên</a>
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
                                <td>{{$val->level}}</td>
                                <td>{{$val->status}}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{route('admin.managers.show',$val->id)}}"><i class="fas fa-info-circle text-white"></i></a>
                                    <a class="btn btn-success" href="{{route('admin.managers.edit',$val->id)}}"><i class="fas fa-pen"></i></a>
                                    <a class="btn btn-danger" href="{{route('admin.managers.destroy',$val->id)}}"><i class="fas fa-trash-alt"></i></a>


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
