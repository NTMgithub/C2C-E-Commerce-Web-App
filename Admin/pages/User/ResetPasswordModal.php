<div class="modal fade" id="ResetPasswordModal<?php echo $value['id_nguoiDung']; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content" style="width: 150%;">
            <form action="../Admin/controller/UserController.php" method="POST" id="formResetPassword" >
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">Reset mật khẩu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Reset mật khẩu tài khoản <span style="color: blue;" ><?php echo $value['tenTaiKhoan']; ?></span></p>
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="matKhauMoi" class="form-control-label">Mật khẩu mới</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="matKhauMoi" name="matKhauMoi" placeholder="Nhập mật khẩu mới..." class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="xacNhanMatKhauMoi" class="form-control-label">Xác nhận mật khẩu mới</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="xacNhanMatKhauMoi" name="xacNhanMatKhauMoi" placeholder="Nhập lại mật khẩu mới..." class="form-control">
                        </div>
                    </div>
                    
                    <input type="hidden" name="id_nguoiDung" value="<?php echo $value['id_nguoiDung']; ?>" >

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-primary">Reset mật khẩu</button>
                </div>
            </form>
        </div>
    </div>
</div>