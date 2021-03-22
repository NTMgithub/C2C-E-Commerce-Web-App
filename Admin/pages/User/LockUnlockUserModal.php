<div class="modal fade" id="LockUnlockModal<?php echo $value['id_nguoiDung']; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content" style="width: 115%;">
            <form action="../Admin/controller/UserController.php" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">
                    <?php if ($value['trangThai'] == 1 ) echo "Xác nhận khóa người dùng"; 
                    else echo "Xác nhận mở khóa người dùng";       
                    ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                    <?php if ($value['trangThai'] == 1 ) echo "Bạn có chắc muốn KHÓA người dùng <span style='color: blue;'>".$value['tenTaiKhoan']."</span> không?"; 
                        else echo "Bạn có chắc muốn MỞ KHÓA người dùng <span style='color: blue;'>".$value['tenTaiKhoan']."</span> không?";             
                    ?>
                    </p>
                    <input type="hidden" name="id_nguoiDung" value="<?php echo $value['id_nguoiDung']; ?>" >
                    <input type="hidden" name="trangThaiND" value="<?php echo $value['trangThai']; ?>" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-<?php if ($value['trangThai'] == 1 ) echo "danger"; 
                    else echo "warning"; ?>"><?php if ($value['trangThai'] == 1 ) echo "Khóa"; 
                    else echo "Mở khóa"; ?></button>
                </div>
            </form>
        </div>
    </div>
</div>