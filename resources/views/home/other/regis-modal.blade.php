<div class="modal" id="regisModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ứng viên - Đăng ký</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="" method="post">
                    {{ csrf_field() }}
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user "></i></span>
                        </div>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Họ và tên">

                    </div>


                      <div class="input-group form-group">
                          <div class="row">
                              <div class="form-check pl-5">
                                  <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="gender">Nam
                                  </label>
                              </div>
                              <div class="form-check pl-5">
                                  <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="gender">Nữ
                                  </label>
                              </div>
                          </div>
                      </div>


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope "></i></span>
                        </div>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-id-card "></i></span>
                        </div>
                        <input type="text" class="form-control" name="identify_number" id="identify_number" placeholder="Chứng minh nhân dân">

                    </div>

                    <lable><strong>Số điện thoại sẽ được dùng để đăng nhập</strong></lable>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone "></i></span>
                        </div>
                        <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Số điện thoại">
                    </div>


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Nhập lại mật khẩu">
                    </div>
                    {{--                    <div class="row align-items-center remember">--}}
                    {{--                        <input type="checkbox">Remember Me--}}
                    {{--                    </div>--}}
                    <div class="form-group text-center">
                        <div class="btn btn-default" style="background: #000166; color: white">Đăng ký</div>
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

