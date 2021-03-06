<?php
require_once('header.php');

$db = new Database();

?>

<!-- MAIN CONTENT-->

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: 2%;">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-2" style="text-transform: uppercase;">
                            <i class="fa fa-edit"></i>
                            Sửa thông tin cửa hàng
                        </h2>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body card-block">
                                <?php
                                echo $result;
                                ?>
                                <?php
                                    $dataResult = $db->ShowDataWithID('tbl_shop', 'id_shop', $_GET['idShop']);
                                    
                                    foreach ($dataResult as $value){
                                ?>
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" id="formSuaCuaHang">

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b>Thông tin cửa hàng</b>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="tenCuaHang_input" class="form-control-label">Tên cửa hàng</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="tenCuaHang_input" name="tenCuaHang_input" placeholder="Nhập cửa hàng..." class="form-control" value="<?php echo $value['tenShop']; ?>" required>

                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="diaChiCuaHang_input" class=" form-control-label">Địa chỉ cửa hàng</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="diaChiCuaHang_input" name="diaChiCuaHang_input" placeholder="Nhập địa chỉ cửa hàng..." class="form-control" value="<?php echo $value['diaChiShop']; ?>" required>

                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="moTaCuaHang_input" class=" form-control-label">Mô tả cửa hàng</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="moTaCuaHang_input" name="moTaCuaHang_input" placeholder="Nhập mô tả cửa hàng..." class="form-control" value="<?php echo $value['moTaShop']; ?>" required>

                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="anhCuaHang_input" class=" form-control-label">Ảnh cửa hàng</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="anhCuaHang_input" name="anhCuaHang_input" accept="image/*" onchange="loadFile(event)" class="form-control-file">
                                            <img id="output" style="width: 150px;height: 100px;" src="uploads/shop/<?php echo $value['anhShop']; ?>" />
                                        </div>
                                    </div>

                                    <hr>

                                  
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-secondary">
                                  <i class="fa fa-edit" ></i>Sửa thông tin
                                </button>
                            </div>

                            </form>

                            <?php
                                }
                            ?>
                        </div>

                    </div>

                    <!-- END DATA TABLE -->
                </div>
            </div>


        </div>

    </div>

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
<script>

    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>

<style>
    .errorMessage {
        color: red;
    }
</style>

<!-- Check validation Jquery-->
<script>
    $(document).ready(function() {
        //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
        $("#formSuaNguoiDung").validate({
            errorClass: 'is-invalid errorMessage',
            rules: {
                hoTen_input: {
                    required: true,
                    maxlength: 20,
                    minlength: 6
                },
                email_input: {
                    required: true,
                    maxlength: 50,
                    minlength: 6,
                    email: true
                },
                sdt_input: {
                    required: true,
                    maxlength: 11,
                    minlength: 6,
                    digits: true,
                    phoneVN: true
                },
                gioiTinh: "required",
                ngaySinh_input: {
                    required: true,
                    date: true
                },


            },
            messages: {
                hoTen_input: {
                    required: "Vui lòng nhập họ tên",
                    maxlength: "Họ tên tối đa 20 kí tự",
                    minlength: "Họ tên tối thiểu 6 kí tự",
                },
                email_input: {
                    required: "Vui lòng nhập email",
                    maxlength: "Email tối đa 50 kí tự",
                    minlength: "Email tối thiểu 6 kí tự",
                    email: "Vui lòng nhập đúng định dạng email"
                },
                sdt_input: {
                    required: "Vui lòng nhập số điện thoại",
                    maxlength: "Số điện thoại tối đa 10 kí tự",
                    minlength: "Số điện thoại tối thiểu 10 kí tự",
                    digits: "Số điện thoại chỉ bao gồm số",
                },
                gioiTinh: "Vui lòng chọn giới tính",
                ngaySinh_input: "Vui lòng chọn ngày sinh",

            }
        });
    });

    jQuery.validator.addMethod("phoneVN", function(phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
        return this.optional(element) || phone_number.length > 9 &&
            phone_number.match(/(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/);
    }, "Số điện thoại không đúng định dạng Việt Nam! Ví dụ hợp lệ: 0932451234");
</script>

<!-- Lưu giá trị input sau khi refresh trang-->
<!-- <script type="text/javascript">
        document.getElementById("hoTen_input").value = getSavedValue("hoTen_input");
        document.getElementById("email_input").value = getSavedValue("email_input");
        document.getElementById("sdt_input").value = getSavedValue("sdt_input");
        document.getElementById("tenTaiKhoan_input").value = getSavedValue("tenTaiKhoan_input");

        function saveValue(e){
            var id = e.id;   
            var val = e.value;  
            localStorage.setItem(id, val);
        }

        function getSavedValue  (v){
            if (!localStorage.getItem(v)) {
                return "";
            }
            return localStorage.getItem(v);
        }

</script> -->


</body>

</html>
<!-- end document-->