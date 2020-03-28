
<div class="modal" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ứng viên - Đăng nhập</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="" method="get">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user white"></i></span>
                        </div>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Số điện thoại">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                    </div>
                    {{--                    <div class="row align-items-center remember">--}}
                    {{--                        <input type="checkbox">Remember Me--}}
                    {{--                    </div>--}}
                    <div class="form-group text-center">
                        <div class="btn btn-default" style="background: #000166; color: white">Đăng nhập</div>
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

