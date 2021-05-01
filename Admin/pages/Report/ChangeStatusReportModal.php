<div class="modal fade" id="LockUnlockModal<?php echo $value['id_gopy']; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content" style="width: 115%;">
            <form action="../Admin/controller/ReportController.php" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">
                    <?php if ($value['trangThaiGopY'] == 1 ) echo "Xác nhận đã xong báo cáo"; 
                    else echo "Xác nhận thay đổi trạng thái báo cáo";       
                    ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                    <?php if ($value['trangThaiGopY'] == 1 ) echo "Bạn có chắc muốn ĐÁNH DẤU LÀ ĐÃ XONG báo cáo <span style='color: blue;'>".$value['tenGopY']."</span> không?"; 
                        else echo "Bạn có chắc muốn GỠ ĐÁNH DẤU LÀ ĐÃ XONG báo cáo <span style='color: blue;'>".$value['tenGopY']."</span> không?";             
                    ?>
                    </p>
                    <input type="hidden" name="id_gopy" value="<?php echo $value['id_gopy']; ?>" >
                    <input type="hidden" name="trangThaiGopY" value="<?php echo $value['trangThaiGopY']; ?>" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-<?php if ($value['trangThaiGopY'] == 1 ) echo "success"; 
                    else echo "warning"; ?>"><?php if ($value['trangThaiGopY'] == 1 ) echo "ĐÃ XONG"; 
                    else echo "Thay đổi trạng thái"; ?></button>
                </div>
            </form>
        </div>
    </div>
</div>