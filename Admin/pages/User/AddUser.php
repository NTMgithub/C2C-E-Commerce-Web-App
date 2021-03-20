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
                            <i class="fa fa-plus-circle"></i>
                            Thêm người dùng
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
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" id="formThemNguoiDung">

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b>Thông tin cá nhân</b>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hoTen_input" class="form-control-label">Họ tên</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input  type="text" id="hoTen_input" name="hoTen_input" placeholder="Nhập họ tên..." class="form-control" required>

                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email_input" class=" form-control-label">Email</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="email_input" name="email_input" placeholder="Nhập email..." class="form-control" required>

                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="sdt_input" class=" form-control-label">Số điện thoại</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="sdt_input" name="sdt_input" placeholder="Nhập số điện thoại..." class="form-control" required>

                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class="form-control-label">Giới tính</label>
                                        </div>
                                        <div class="col col-md-9">
                                            <div>
                                                <div class="radio">
                                                    <label for="gioiTinh_Nam" class="form-check-label">
                                                        <input type="radio" id="gioiTinh_Nam" name="gioiTinh" value="Nam" class="form-check_input" checked>Nam
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="gioiTinh_Nu" class="form-check-label">
                                                        <input type="radio" id="gioiTinh_Nu" name="gioiTinh" value="Nữ" class="form-check_input">Nữ
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="gioiTinh-Khac" class="form-check-label">
                                                        <input  type="radio" id="gioiTinh_Khac" name="gioiTinh" value="Khác" class="form-check_input">Khác
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="ngaySinh_input" class=" form-control-label">Ngày sinh</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="date" id="ngaySinh_input" name="ngaySinh_input" class="form-control" required>

                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="avatar_input" class=" form-control-label">Ảnh đại diện</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="avatar_input" name="avatar_input" class="form-control-file">
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b>Thông tin đăng nhập</b>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="tenTaiKhoan_input" class="form-control-label">Tên tài khoản</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input  type="text" id="tenTaiKhoan_input" name="tenTaiKhoan_input" placeholder="Nhập tên tài khoản..." class="form-control">

                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="matKhau_input" class=" form-control-label">Mật khẩu</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" id="matKhau_input" name="matKhau_input" placeholder="Nhập mật khẩu..." class="form-control">

                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="xacNhanMatKhau_input" class="form-control-label">Xác nhận mật khẩu</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" id="xacNhanMatKhau_input" name="xacNhanMatKhau_input" placeholder="Nhập lại mật khẩu..." class="form-control">

                                        </div>
                                    </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-plus-circle"></i> Thêm
                                </button>
                                <button type="reset" class="btn btn-danger" id="resetButton" onclick="ResetForm()" >
                                    <i class="fa fa-repeat"></i> Reset
                                </button>
                            </div>

                            </form>
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
    function ResetForm() {
        document.getElementById("formThemNguoiDung").reset();
    }
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
        $("#formThemNguoiDung").validate({
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
                
                tenTaiKhoan_input: {
                    required: true,
                    maxlength: 20,
                    minlength: 6,
                },
                matKhau_input: {
                    required: true,
                    maxlength: 20,
                    minlength: 6,
                },
                xacNhanMatKhau_input: {
                    required: true,
                    maxlength: 20,
                    minlength: 6,
                    equalTo: "#matKhau_input"
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

                tenTaiKhoan_input: {
                    required: "Vui lòng nhập tên tài khoản",
                    maxlength: "Tên tài khoản tối đa 20 kí tự",
                    minlength: "Tên tài khoản tối thiểu 6 kí tự",
                },
                matKhau_input: {
                    required: "Vui lòng nhập mật khẩu",
                    maxlength: "Mật khẩu tối đa 20 kí tự",
                    minlength: "Mật khẩu tối thiểu 6 kí tự",
                },
                xacNhanMatKhau_input: {
                    required: "Vui lòng nhập lại mật khẩu",
                    maxlength: "Mật khẩu tối đa 20 kí tự",
                    minlength: "Mật khẩu tối thiểu 6 kí tự",
                    equalTo: "Xác nhận mật khẩu không khớp với mật khẩu!"
                },
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