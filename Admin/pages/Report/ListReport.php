<?php
require_once('header.php');
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: 2%;">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-2" style="text-transform: uppercase;">
                            <i class="fa fa-list"></i>
                            Danh sách báo cáo
                        </h2>
                        <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->

                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Tìm kiếm...">
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="table-data__tool-right">
                            
                        </div>
                    </div>
                   
                    <div class="table-responsive table-responsive-data2">
                        <!-- Load nội dung table vào đây -->
                        <!-- <div id="loading"><img src="/WebC2C/Admin/pages/User/loading.gif" /></div> -->

                        <table class="table table-data2">
                            <thead style="background-color: #f2f2f2;">
                                <tr>
                                    <th>STT</th>
                                    <th>Người dùng góp ý</th>
                                    <th>Loại góp ý</th>
                                    <th>Tiêu đề góp ý</th>
                                    <th>Thời gian góp ý</th>
                                    <th>Trạng thái</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $stt = 0;
                                foreach ($dataResult as $value) {
                                    $stt++;
                                ?>
                                    <tr class="tr-shadow">
                                        <td><?php echo $stt; ?></td>
                                        
                                        <td><?php echo $value['hoTen']; ?></td>

                                        <td><?php echo $value['id_loaiGopY']; ?></td>
                                        
                                        <td><?php echo $value['tenGopY']; ?></td>

                                        <td><?php echo $value['thoiGianGopY']; ?></td>
                                        
                                        <td>
                                            <?php
                                            if ($value['trangThaiGopY']  == 1) {
                                                echo "<span class='badge badge-pill badge-warning' style='font-size: 13px;'>Chưa xong</span>";
                                            } else {
                                                echo "<span class='badge badge-pill badge-success' style='font-size: 13px;'>Đã xong</span>";
                                            }
                                            ?>
                                        </td>

                                        <td>
                                            <div class="table-data-feature">
                                                
                                                <?php
                                                echo "<button type='button' class='btn btn-info' style='margin: 5px;' data-placement='top' title='Xem chi tiết'
                                                data-toggle='modal' data-target='#XemChiTiet" .$value['id_gopy']."'><i class='fa fa-eye'></i>Xem chi tiết</button>'";

                                                if ($value['trangThaiGopY']  == 1) {
                                                    $lockButton = "<button type='button' class='btn btn-success' style='margin: 5px;' data-placement='top' title='Khóa tài khoản'
                                                    data-toggle='modal' data-target='#LockUnlockModal" . $value['id_gopy'] . "' ><i class='fa fa-check'></i></button>";
                                                    echo $lockButton;
                                                } else {
                                                    $unlockButton = "<button type='button' class='btn btn-warning' style='margin: 5px;' data-placement='top' title='Mở khóa tài khoản'
                                                    data-toggle='modal' data-target='#LockUnlockModal" . $value['id_gopy'] . "' ><i class='fa fa-repeat'></i></button>";
                                                    echo $unlockButton;
                                                }
                                                ?>

                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>

                                <?php
                                    include('ViewDetailsReport.php');
                                    include('ChangeStatusReportModal.php');
                                    
                                }
                                ?>
                            </tbody>
                        </table>

                        <!-- <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav> -->

                        

                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>


        </div>

    </div>

    <!-- modal medium -->

    <!-- end modal medium -->

</div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>

</div>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<script src="vendor/jquery.validate.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>

<!-- Main JS-->
<script src="js/main.js"></script>
<script language="javascript" type="text/javascript">
    function popitup(url) { //Popup cửa sổ
        newwindow = window.open(url, 'name', 'height=580,width=700');
        if (window.focus) {
            newwindow.focus()
        }
        return false;
    }
</script>


</body>

</html>
<!-- end document-->