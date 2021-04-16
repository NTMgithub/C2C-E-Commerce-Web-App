<div class="modal fade" id="LockUnlockModal<?php echo $value['id_banner']; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content" style="width: 115%;">
            <form action="../Admin/controller/BannerController.php" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">
                    <?php if ($value['trangThaiBanner'] == 1 ) echo "Xác nhận ẩn banner"; 
                    else echo "Xác nhận hiện banner";       
                    ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                    <?php if ($value['trangThaiBanner'] == 1 ) echo "Bạn có chắc muốn ẨN banner <span style='color: blue;'>".$value['tenBanner']."</span> không?"; 
                        else echo "Bạn có chắc muốn HIỆN banner <span style='color: blue;'>".$value['tenBanner']."</span> không?";             
                    ?>
                    </p>
                    <input type="hidden" name="id_banner" value="<?php echo $value['id_banner']; ?>" >
                    <input type="hidden" name="trangThaiBanner" value="<?php echo $value['trangThaiBanner']; ?>" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-<?php if ($value['trangThaiBanner'] == 1 ) echo "danger"; 
                    else echo "warning"; ?>"><?php if ($value['trangThaiBanner'] == 1 ) echo "Ẩn"; 
                    else echo "Hiện"; ?></button>
                </div>
            </form>
        </div>
    </div>
</div>