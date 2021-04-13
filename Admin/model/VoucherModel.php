<?php

class VoucherModel
{
        // Hàm thêm người dùng
        public function ThemKM()
        {
            require_once(__DIR__.'/../../ModelChung/DBConfig.php');
            $db = new Database();
            $result = '';
            
            if (
                isset($_POST['idNguoiDung_input']) && isset($_POST['tenCuaHang_input']) && isset($_POST['diaChiCuaHang_input']) && 
                isset($_POST['moTaCuaHang_input']) && isset($_FILES)
            ){
                $idNguoiDung = $db->conn->real_escape_string($_POST['idNguoiDung_input']);
                $tenCuaHang = $db->conn->real_escape_string($_POST['tenCuaHang_input']);
                $diaChiCuaHang = $db->conn->real_escape_string($_POST['diaChiCuaHang_input']);
                $moTaCuaHang = $db->conn->real_escape_string($_POST['moTaCuaHang_input']);
                $ngayTao = date("Y-m-d H:i:s");

                //Check file
                //Kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads
                $permited = array('jpg','jpeg','png','gif');
                $file_name = $_FILES['anhCuaHang_input']['name'];
                $file_temp = $_FILES['anhCuaHang_input']['tmp_name'];

                $div = explode('.', $file_name); //Phân tách 2 phần giữa dấu chấm
                $file_ext = strtolower(end($div)); //end: lấy đuôi file, chuyển về string lower
                $unique_image = substr((time()), 0, 10).'.'.$file_ext ; //Random số từ 0-10 tạo tên mới
                $uploaded_image  =  "uploads/shop/".$unique_image;
                //Kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads

                //Kiểm tra trùng tên tài khoản
                
                if ( $db->CountDataTable('tbl_shop') > 1 ){
                    $dataResult = $db->ShowAllData('tbl_shop'); //Dùng cho kiểm tra trùng

                    foreach ($dataResult as $value){
                        if ($value['tenShop'] == $tenCuaHang ){
                            $result = "<div class='alert alert-danger'>Tên cửa hàng đã được sử dụng! <br> Vui lòng nhập tên tài khoản khác!</div>";
                            return $result;
                        }
                    }
                }

                //Kiểu dữ liệu truyền vào các tham số
                $tableName   = 'tbl_shop'; //tên table
                $tableProps = implode(",", [
                    'id_nguoiDung', 'tenShop', 'diaChiShop', 'moTaShop', 'ngayTaoShop','anhShop'
                ]); //thuộc tính table


                if (!empty($file_name)){
                    //Nếu người dùng chọn ảnh
                    
                    if (in_array($file_ext, $permited) == false) //Chỉ được upload đuôi ảnh trong $permited
                    {
                        $result = "<div class= 'alert alert-danger' >Chỉ được upload:-".implode('.', $permited)."</div>";
                        return $result;
                    }
                    //Check file

                    move_uploaded_file($file_temp, $uploaded_image);

                    $value = implode(",", [
                        "'" . $idNguoiDung. "'", "'" . $tenCuaHang . "'", "'" . $diaChiCuaHang . "'","'" .$moTaCuaHang."'",
                        "'" . $ngayTao."'","'".$unique_image."'"
                    ]); //giá trị table

                    $insertShop = $db->InsertData($tableName, $tableProps, $value);

                    //Đổi trạng thái có shop trong tbl_nguoidung (dangKyShop)
                    $QueryUpdateDangKyShop = "UPDATE tbl_nguoidung SET dangKyShop = 1 WHERE id_nguoiDung = $idNguoiDung ";
                    $updateDangKyShop = $db->ExcuteQuery($QueryUpdateDangKyShop);

                    if ($insertShop) {
                        if ($updateDangKyShop){
                            $result = "<div class='alert alert-success'>Thêm cửa hàng thành công!</div>";
                            return $result;
                        }else{
                            $result = "<div class='alert alert-danger'>Đổi trạng thái đã đăng ký shop thất bại!</div>";
                            return $result;
                        }
                        
                    } else {
                        $result = "<div class='alert alert-danger'>Thêm cửa hàng thất bại!</div>";
                        return $result;
                    }

                }else{
                    $result = "<div class='alert alert-danger'>Vui lòng chọn ảnh cửa hàng!</div>";
                    return $result;
                }

            }
        }   

        // Hàm sửa thông tin người dùng
        function SuaKM($id_shop)
        {
            require_once(__DIR__.'/../../ModelChung/DBConfig.php');
            $db = new Database();
            $result = '';
            $dataResult = $db->ShowAllData('tbl_shop'); //Dùng cho kiểm tra trùng

            $data1 = $db->ShowDataWithID('tbl_shop', 'id_shop', $id_shop);

            if (
                isset($_POST['tenCuaHang_input']) && isset($_POST['diaChiCuaHang_input']) && 
                isset($_POST['moTaCuaHang_input']) && isset($_FILES)
            )
            {

                $tenCuaHang = $db->conn->real_escape_string($_POST['tenCuaHang_input']);
                $diaChiCuaHang = $db->conn->real_escape_string($_POST['diaChiCuaHang_input']);
                $moTaCuaHang = $db->conn->real_escape_string($_POST['moTaCuaHang_input']);
                // $ngayTao = date("Y-m-d H:i:s");

                $tenCuaHangString = "'".$tenCuaHang."'";
                $diaChiCuaHangString = "'".$diaChiCuaHang."'";
                $moTaCuaHangString = "'".$moTaCuaHang."'";

                //Check file
                //Kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads
                $permited = array('jpg','jpeg','png','gif');
                $file_name = $_FILES['anhCuaHang_input']['name'];
                $file_temp = $_FILES['anhCuaHang_input']['tmp_name'];

                $div = explode('.', $file_name); //Phân tách 2 phần giữa dấu chấm
                $file_ext = strtolower(end($div)); //end: lấy đuôi file, chuyển về string lower
                $unique_image = substr((time()), 0, 10).'.'.$file_ext ; //Random số từ 0-10 tạo tên mới
                $unique_imageString = "'".$unique_image."'";
                $uploaded_image  =  "uploads/shop/".$unique_image;
                //Kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads


                //Kiểm tra trùng tên cửa hàng
                foreach ($dataResult as $value){
                    if ($value['tenShop'] == $tenCuaHang)
                    {
                        $pathImageOld = $value['anhShop']; //Dùng cho xóa ảnh đại diện cũ
                        if (is_array($tenCuaHang) || is_object($tenCuaHang))
                        {
                            foreach ($data1 as $value1){
                                if ($value['tenShop'] != $value1['tenShop']){
                                    $result = "<div class='alert alert-danger'>Tên cửa hàng đã được sử dụng! <br> Vui lòng nhập tên khác!</div>";
                                    return $result;
                                }
                            }
                        }
                    }
                }

                //Kiểu dữ liệu truyền vào các tham số
                $tableName   = 'tbl_shop'; //tên table
                
                if (!empty($file_name)){
                    //Nếu người dùng chọn ảnh
                    
                    if (in_array($file_ext, $permited) == false) //Chỉ được upload đuôi ảnh trong $permited
                    {
                        $result = "<div class= 'alert alert-danger' >Chỉ được upload:-".implode('.', $permited)."</div>";
                        return $result;
                    }
                    //Check file

                    move_uploaded_file($file_temp, $uploaded_image);

                    $sqlquery = "UPDATE $tableName SET tenShop = $tenCuaHangString, diaChiShop = $diaChiCuaHangString, moTaShop = $moTaCuaHangString, anhShop = $unique_imageString WHERE id_shop = $id_shop ";

                    $editShop = $db->ExcuteQuery($sqlquery);

                    if ($editShop) {

                        //Xóa ảnh đại diện cũ
                        $pathImageDelete = "uploads/shop/".$pathImageOld;
                        unlink($pathImageDelete);

                        $result = "<div class='alert alert-success'>Sửa thông tin cửa hàng thành công!</div>";
                        return $result;
                    } else {
                        $result = "<div class='alert alert-danger'>Sửa thông tin cửa hàng thất bại!</div>";
                        return $result;
                    }

                }else{//Trường hợp không update ảnh

                    $sqlquery = "UPDATE $tableName SET tenShop = $tenCuaHangString, diaChiShop = $diaChiCuaHangString, moTaShop = $moTaCuaHangString WHERE id_shop = $id_shop ";
                        
                    $editShop = $db->ExcuteQuery($sqlquery);

                    if ($editShop) {
                        $result = "<div class='alert alert-success'>Sửa thông tin cửa hàng thành công!</div>";
                        return $result;
                    } else {
                        $result = "<div class='alert alert-danger'>Sửa thông tin cửa hàng thất bại!</div>";
                        return $result;
                    }

                }

            
            }
    
        }


        //Hàm mở/khóa cửa hàng
        public function KhoaMoKM($idKM, $trangThai){
            require_once(__DIR__.'/../../ModelChung/DBConfig.php');
            $db = new Database();

            if ($trangThai == 1){
                $sqlquery = "UPDATE tbl_shop SET trangThai = 0 WHERE id_shop = $idCuaHang ";
            }else{
                $sqlquery = "UPDATE tbl_shop SET trangThai = 1 WHERE id_shop = $idCuaHang ";
            }
            
            $lockUnlockShop = $db->ExcuteQuery($sqlquery);

            if ($trangThai == 1){
                if ($lockUnlockShop) {
                    $result = "<div class='alert alert-success'>Khóa cửa hàng thành công!</div>";
                    return $result;
                } else {
                    $result = "<div class='alert alert-danger'>Khóa cửa hàng thất bại!</div>";
                    return $result;
                }
            }else{
                if ($lockUnlockShop) {
                    $result = "<div class='alert alert-success'>Mở khóa cửa hàng thành công!</div>";
                    return $result;
                } else {
                    $result = "<div class='alert alert-danger'>Mở khóa cửa hàng thất bại!</div>";
                    return $result;
                }
            }

        }



}

?>