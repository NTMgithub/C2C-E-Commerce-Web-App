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
                            Danh sách người dùng
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
                            <a href="<?php if (isset($_GET['action']) && ($_GET['action'] == 'add')) {
                                            echo "javascript:history.go(0)";
                                        } else {
                                            echo $db->MergeURL('action=add');
                                        } ?>">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>Thêm người dùng
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead style="background-color: #f2f2f2;">
                                <tr>
                                    <th>STT</th>
                                    <th>Ảnh</th>
                                    <th>Họ tên</th>
                                    <th>SDT</th>
                                    <th>Tên tài khoản</th>
                                    <th>Ngày tạo</th>
                                    <th>trạng thái</th>

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
                                        <td>
                                            <img src="uploads/user/<?php echo $value['anhDaiDien']; ?>" alt="avatarUser" style="width: 150px;height: 100px;">
                                        </td>
                                        <td><?php echo $value['hoTen']; ?></td>
                                        <td>
                                            <span class="block-email"><?php echo $value['sdt']; ?></span>
                                        </td>
                                        <td class="desc"><?php echo $value['tenTaiKhoan']; ?></td>
                                        <td><?php echo $value['thoiGianTao']; ?></td>
                                        <td>
                                            <?php
                                            if ($value['trangThai']  == 1) {
                                                echo "<span class='badge badge-pill badge-success' style='font-size: 13px;'>Mở</span>";
                                            } else {
                                                echo "<span class='badge badge-pill badge-danger' style='font-size: 13px;'>Khóa</span>";
                                            }
                                            ?>
                                        </td>

                                        <td>
                                            <div class="table-data-feature">
                                                <a href="?viewpage=list-user&action=edit&idNguoiDung=<?php echo $value['id_nguoiDung']; ?>" onclick="return popitup('?viewpage=list-user&action=edit&idNguoiDung=<?php echo $value['id_nguoiDung']; ?>')">
                                                    <button type="button" class="btn btn-secondary" style="margin: 5px;" id="editButton" >
                                                        <i class="fa fa-edit"></i> Sửa
                                                    </button>
                                                </a>
                                                <?php
                                                if ($value['trangThai']  == 1) {
                                                    $lockButton = "<button type='button' class='btn btn-danger' style='margin: 5px;' data-placement='top' title='Khóa tài khoản'
                                                    data-toggle='modal' data-target='#LockUnlockModal".$value['id_nguoiDung']."' ><i class='fa fa-lock'></i></button>";
                                                    echo $lockButton;
                                                } else {
                                                    $unlockButton = "<button type='button' class='btn btn-warning' style='margin: 5px;' data-placement='top' title='Mở khóa tài khoản'
                                                    data-toggle='modal' data-target='#LockUnlockModal".$value['id_nguoiDung']."' ><i class='fa fa-unlock'></i></button>";
                                                    echo $unlockButton;
                                                }
                                                ?>

                                                <button type="button" class="btn btn-primary" style="margin: 5px;" data-toggle="modal" data-target='#ResetPasswordModal<?php echo $value['id_nguoiDung']; ?>' data-placement="top" title="Reset mật khẩu"><i class="fa fa-refresh"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>

                                <?php
                                    include('LockUnlockUserModal.php');
                                    include('ResetPasswordModal.php');
                                }
                                ?>
                            </tbody>
                        </table>


                        <nav aria-label="...">
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
                        </nav>
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
<script src="vendor/select2/select2.min.js">
</script>

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