<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thay đổi mật khẩu</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form class="chpass" method="POST" action="{{route('admin.info.post.changepass')}}">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="email">Mật khẩu cũ</label>
                            <input type="password" class="form-control span5 oldpass"  placeholder="Nhập mật khẩu cũ" name="oldpass">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Mật khẩu mới</label>
                            <input type="password" class="form-control span5 newpass"  placeholder="Nhập mật khẩu mới" name="newpass">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Nhập lại mật khẩu mới</label>
                            <input type="password" class="form-control span5 renewpass"  placeholder="Nhập lại mật khẩu mới" name="renewpass">
                        </div>
                        <div style="color:red" id="ketqua"></div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger text-white" data-dismiss="modal">Đóng</button>
                        <button type="submit" id="luu" class="btn btn-primary">Thay đổi</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>


