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
                            <a href="<?php if ( isset($_GET['action']) && ($_GET['action'] == 'add' ) ){
                                echo "javascript:history.go(0)";
                            }else{
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
                            <thead style="background-color: #f2f2f2;" >
                                <tr>
                                    <th>STT</th>
                                    <th>Ảnh</th>
                                    <th>Họ tên</th>
                                    <th>email</th>
                                    <th>Tên tài khoản</th>
                                    <th>Ngày tạo</th>
                                    <th>trạng thái</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $stt = 0;
                                    foreach ($dataResult as $value){
                                        $stt++;
                                ?>
                                <tr class="tr-shadow">
                                    <td><?php echo $stt; ?></td>
                                    <td>
                                        <img src="images/icon/avatar-01.jpg" alt="avatarUser" style="width: 100%;">
                                    </td>
                                    <td><?php echo $value['hoTen']; ?></td>
                                    <td>
                                        <span class="block-email"><?php echo $value['email']; ?></span>
                                    </td>
                                    <td class="desc"><?php echo $value['tenTaiKhoan']; ?></td>
                                    <td><?php echo $value['thoiGianTao']; ?></td>
                                    <td>
                                        <span class="badge badge-pill badge-success" style="font-size: 13px;">
                                        <?php 
                                            if ($value['trangThai']  == 1 ){
                                                echo "Mở";
                                            }else{
                                                echo "Khóa";
                                            }
                                        ?>
                                        </span>
                                    </td>

                                    <td>
                                        <div class="table-data-feature">
                                            <button type="button" class="btn btn-secondary" style="margin: 5px;" data-toggle="modal" data-target="#modalEdit">
                                                <i class="fa fa-edit"></i> Sửa
                                            </button>
                                            <button type="button" class="btn btn-danger" style="margin: 5px;"><i class="fa fa-lock"></i></button>

                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                <?php
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
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Sửa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Sửa thông tin</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Tên tài khoản:</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static">lorilori</p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Họ tên:</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="text-input" value="Lori Lynch" class="form-control">
                                            <small class="form-text text-muted">Nhập họ tên cần sửa</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Email:</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="email-input" name="email-input" value="lori@example.com" class="form-control">
                                            <small class="help-block form-text">Nhập email cần sửa</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="password-input" class=" form-control-label">SDT</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="password-input" name="password-input" value="03452353253" class="form-control">
                                            <small class="help-block form-text">Nhập số điện thoại cần sửa</small>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">Ảnh đại diện</label>
                                        </div>

                                        <div class="col-12 col-md-9">
                                            <img src="images/icon/avatar-01.jpg" alt="avatarUser" style="width: 20%;">
                                            <input type="file" id="file-input" name="file-input" class="form-control-file">
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary">Sửa</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal medium -->

    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>

</div>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
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


</body>

</html>
<!-- end document-->