@extends('admin.layouts.admin-master')
@section('title','Danh sách sinh viên')
@section('content-header')
    <b>Danh sách sinh viên</b>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin.students.get.create')}}">
                        <button class="btn btn-primary">Thêm Sinh Viên</button>
                    </a>
                    <a>
                        <button class="btn btn-secondary" onClick="window.location.reload();">Tải lại</button>
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">

                        <thead>
                        <tr>
                            <th>Mã số sinh viên</th>
                            <th>Họ và tên</th>
{{--                            <th>Giới tính</th>--}}
                            <th>Lớp</th>
{{--                            <th>Ngành</th>--}}
{{--                            <th>Khoa</th>--}}
                            <th>Hành động</th>
                        </tr>
                        </thead>
                            <tbody>
                            @foreach($std as $val)
                                <tr>
                                <td>{{$val->student_code}}</td>
                                <td>{{$val->name}}</td>
{{--                                <td>{{$val->gender}}</td>--}}
                                <td>{{$val->showCourse->name}}</td>
{{--                                <td>{{$val->showCourse->showFaculty->name}}</td>--}}
{{--                                <td>{{$val->showCourse->showFaculty->showDepartment->name}}</td>--}}
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
                            <th>Mã số sinh viên</th>
                            <th>Họ và tên</th>
{{--                            <th>Giới tính</th>--}}
                            <th>Lớp</th>
{{--                            <th>Ngành</th>--}}
{{--                            <th>Khoa</th>--}}
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
