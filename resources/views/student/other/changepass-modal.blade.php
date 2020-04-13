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
                <form class="chpass" method="POST" action="{{route('student.post.changepass')}}">
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" id="luu" class="btn btn-info">Change</button>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<script>

    $('#luu').click(function(event){
        event.preventDefault();
        $.ajax({
            url: '{{route('home.post.changepass')}}',
            type: 'post',
            data: $('.chpass').serialize(),
        })
            .done(function(data) {
                $('#ketqua').html(data);
            });
    });
</script>
