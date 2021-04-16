<!-- modal medium -->
<div class="modal fade" id="XemChiTiet<?php echo $value['id_gopy']; ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Tiêu đề góp ý: <span style="color: dimgrey" ><?php echo $value['tenGopY']; ?></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="font-weight: bold;" >Thông tin góp ý</p>
                <span style="font-weight: bold;">Tên người gửi: </span><span style="font-style: italic;" ><?php echo $value['hoTen']; ?></span>
                <br>
                <span style="font-weight: bold;" >Ngày gửi: </span><span style="font-style: italic;" ><?php echo $value['thoiGianGopY']; ?></span>
                <hr>
                <p style="font-weight: bold;" >Nội dung</p>
                <p>
                   <?php echo $value['noiDungGopY']; ?>
                </p>
            </div>
            <div class="modal-footer">
            
            </div>
        </div>
    </div>
</div>
<!-- end modal medium -->