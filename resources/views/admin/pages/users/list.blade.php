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
                    <a>
                        <button class="btn btn-secondary float-right" onClick="window.location.reload();">Tải lại</button>
                    </a>
                    <a href="{{route('admin.users.create')}}">
                        <button class="btn btn-primary">Thêm Ứng Viên</button>
                    </a>

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
                            <th>Họ và tên</th>
                            <th>Giới tính</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usr as $key=> $val)
                            <tr>
                                <td width="3%">{{$key}}</td>
                                <td>{{$val->name}}</td>
                                <td>{{$val->gender}}</td>
                                <td>{{$val->phone_number}}</td>
                                <td>{{$val->email}}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{route('admin.users.show',$val->id)}}"><i class="fas fa-info-circle text-white"></i></a>
                                    <a class="btn btn-success" href="{{route('admin.users.edit',$val->id)}}"><i class="fas fa-pen"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Họ và tên</th>
                            <th>Giới tính</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
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
