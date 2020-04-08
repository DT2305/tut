<div class="modal" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ứng viên - Đăng nhập</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Cảnh báo</h5>
                    {{session('error')}}
                </div>
            @endif

        <!-- Modal body -->
            <div class="modal-body">
                <form action="{{route('home.post.login')}}" method="get">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user white"></i></span>
                        </div>
                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                               placeholder="Số điện thoại">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" id="password" name="password"
                               placeholder="Mật khẩu">
                    </div>
                    {{--                    <div class="row align-items-center remember">--}}
                    {{--                        <input type="checkbox">Remember Me--}}
                    {{--                    </div>--}}
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            </div>

        </div>
    </div>
</div>

