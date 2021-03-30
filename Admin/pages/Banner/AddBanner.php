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
                            Thêm banner
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
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal" id="formThemBanner">

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b>Thông tin banner</b>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="tenBanner_input" class="form-control-label">Tên banner</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="tenBanner_input" name="tenBanner_input" placeholder="Nhập tên banner..." class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="noiDungBanner_input" class="form-control-label">Nội dung banner</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="noiDungBanner_input" name="noiDungBanner_input" placeholder="Nhập nội dung banner..." class="form-control" required>

                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="moTaBanner_input" class=" form-control-label">Mô tả banner</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="moTaBanner_input" name="moTaBanner_input" placeholder="Nhập mô tả banner..." class="form-control" required>

                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="anhBanner_input" class=" form-control-label">Ảnh banner</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="anhBanner_input" name="anhBanner_input" accept="image/*" onchange="loadFile(event)" class="form-control-file">
                                            <img id="output" style="width: 20%;" />
                                        </div>
                                    </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-plus-circle"></i> Thêm
                                </button>
                                <button type="reset" class="btn btn-danger" id="resetButton" onclick="ResetForm()" style="margin-left: 2%">
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
        document.getElementById("formThemCuaHang").reset();
    }

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
        $("#formThemBanner").validate({
            errorClass: 'is-invalid errorMessage',
            rules: {
                tenBanner_input: {
                    required: true,
                    maxlength: 50,
                    minlength: 6,
                },
                noiDungBanner_input: {
                    required: true,
                    maxlength: 50,
                    minlength: 6,
                },
                moTaBanner_input: {
                    required: true,
                    maxlength: 100,
                    minlength: 15,
                },
                
                anhBanner_input: {
                    required: true,
                },

            },
            messages: {
                tenBanner_input: {
                    required: "Vui lòng nhập tên banner",
                    maxlength: "Tên banner tối đa 50 kí tự",
                    minlength: "Tên banner tối thiểu 6 kí tự",
           
                },
                noiDungBanner_input: {
                    required: "Vui lòng nhập nội dung banner",
                    maxlength: "Nội dung banner tối đa 50 kí tự",
                    minlength: "Nội dung banner tối thiểu 6 kí tự",

                },

                moTaBanner_input: {
                    required: "Vui lòng nhập mô tả banner",
                    maxlength: "Mô tả banner tối đa 100 kí tự",
                    minlength: "Mô tả banner tối thiểu 15 kí tự",
                },

                anhBanner_input: {
                    required: "Vui lòng chọn ảnh banner",
                   
                },
               
            }
        });
    });

    // jQuery.validator.addMethod("phoneVN", function(phone_number, element) {
    //     phone_number = phone_number.replace(/\s+/g, "");
    //     return this.optional(element) || phone_number.length > 9 &&
    //         phone_number.match(/(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/);
    // }, "Số điện thoại không đúng định dạng Việt Nam! Ví dụ hợp lệ: 0932451234");


    
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