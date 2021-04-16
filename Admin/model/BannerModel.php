<?php

class BannerModel
{
        //Hàm thêm banner
        public function ThemBanner()
        {
            require_once(__DIR__.'/../../ModelChung/DBConfig.php');
            $db = new Database();
            $result = '';
            
            if (
                isset($_POST['tenBanner_input']) && isset($_POST['noiDungBanner_input']) && isset($_POST['moTaBanner_input'])
                 && isset($_FILES)
            ){
                $tenBanner = $db->conn->real_escape_string($_POST['tenBanner_input']);
                $noiDungBanner = $db->conn->real_escape_string($_POST['noiDungBanner_input']);
                $moTaBanner = $db->conn->real_escape_string($_POST['moTaBanner_input']);
                //$ngayTao = date("Y-m-d H:i:s");

                //Check file
                //Kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads
                $permited = array('jpg','jpeg','png','gif');
                $file_name = $_FILES['anhBanner_input']['name'];
                $file_temp = $_FILES['anhBanner_input']['tmp_name'];

                $div = explode('.', $file_name); //Phân tách 2 phần giữa dấu chấm
                $file_ext = strtolower(end($div)); //end: lấy đuôi file, chuyển về string lower
                $unique_image = substr((time()), 0, 10).'.'.$file_ext ; //Random số từ 0-10 tạo tên mới
                $uploaded_image  =  "uploads/banner/".$unique_image;
                //Kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads

                //Kiểm tra trùng tên tài khoản
                
                if ( $db->CountDataTable('tbl_banner') > 1 ){
                    $dataResult = $db->ShowAllData('tbl_banner'); //Dùng cho kiểm tra trùng

                    foreach ($dataResult as $value){
                        if ($value['tenBanner'] == $tenBanner ){
                            $result = "<div class='alert alert-danger'>Tên banner đã được sử dụng! <br> Vui lòng nhập tên banner khác!</div>";
                            return $result;
                        }
                    }
                }

                //Kiểu dữ liệu truyền vào các tham số
                $tableName   = 'tbl_banner'; //tên table
                $tableProps = implode(",", [
                    'id_banner', 'tenBanner', 'noiDungBanner', 'moTaBanner', 'urlBanner', 'trangThaiBanner'
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
                        "'NULL'", "'" .$tenBanner. "'", "'" . $noiDungBanner . "'","'" .$moTaBanner."'",
                        "'".$unique_image."'", "'1'",
                    ]); //giá trị table

                    $insertBanner = $db->InsertData($tableName, $tableProps, $value);

                    // //Đổi trạng thái có shop trong tbl_nguoidung (dangKyShop)
                    // $QueryUpdateDangKyShop = "UPDATE tbl_nguoidung SET dangKyShop = 1 WHERE id_nguoiDung = $idNguoiDung ";
                    // $updateDangKyShop = $db->ExcuteQuery($QueryUpdateDangKyShop);

                    if ($insertBanner) {
                        $result = "<div class='alert alert-success'>Thêm banner thành công!</div>";
                        return $result; 
                    }else {
                        $result = "<div class='alert alert-danger'>Thêm banner thất bại!</div>";
                        return $result;
                    }

                }else{
                    $result = "<div class='alert alert-danger'>Vui lòng chọn ảnh!</div>";
                    return $result;
                }

            }
        }   

        // Hàm sửa thông tin người dùng
        function SuaBanner($id_banner)
        {
            require_once(__DIR__.'/../../ModelChung/DBConfig.php');
            $db = new Database();
            $result = '';
            $dataResult = $db->ShowAllData('tbl_banner'); //Dùng cho kiểm tra trùng

            $data1 = $db->ShowDataWithID('tbl_banner', 'id_banner', $id_banner);

            if (
                isset($_POST['tenBanner_input']) && isset($_POST['noiDungBanner_input']) && isset($_POST['moTaBanner_input'])
                 && isset($_FILES)
            ){

                $tenBanner = $db->conn->real_escape_string($_POST['tenBanner_input']);
                $noiDungBanner = $db->conn->real_escape_string($_POST['noiDungBanner_input']);
                $moTaBanner = $db->conn->real_escape_string($_POST['moTaBanner_input']);
                // $ngayTao = date("Y-m-d H:i:s");

                $tenBannerString = "'".$tenBanner."'";
                $noiDungBannerString = "'".$noiDungBanner."'";
                $moTaBannerString = "'".$moTaBanner."'";

                //Check file
                //Kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads
                $permited = array('jpg','jpeg','png','gif');
                $file_name = $_FILES['anhBanner_input']['name'];
                $file_temp = $_FILES['anhBanner_input']['tmp_name'];

                $div = explode('.', $file_name); //Phân tách 2 phần giữa dấu chấm
                $file_ext = strtolower(end($div)); //end: lấy đuôi file, chuyển về string lower
                $unique_image = substr((time()), 0, 10).'.'.$file_ext ; //Random số từ 0-10 tạo tên mới
                $unique_imageString = "'".$unique_image."'";
                $uploaded_image  =  "uploads/banner/".$unique_image;
                //Kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads


                //Kiểm tra trùng tên cửa hàng
                foreach ($dataResult as $value){
                    if ($value['tenBanner'] == $tenBanner)
                    {
                        $pathImageOld = $value['urlBanner']; //Dùng cho xóa ảnh cũ
                        if (is_array($tenBanner) || is_object($tenBanner))
                        {
                            foreach ($data1 as $value1){
                                if ($value['tenBanner'] != $value1['tenBanner']){
                                    $result = "<div class='alert alert-danger'>Tên banner đã được sử dụng! <br> Vui lòng nhập tên khác!</div>";
                                    return $result;
                                }
                            }
                        }
                    }
                }

                //Kiểu dữ liệu truyền vào các tham số
                $tableName   = 'tbl_banner'; //tên table
                
                if (!empty($file_name)){
                    //Nếu người dùng chọn ảnh
                    
                    if (in_array($file_ext, $permited) == false) //Chỉ được upload đuôi ảnh trong $permited
                    {
                        $result = "<div class= 'alert alert-danger' >Chỉ được upload:-".implode('.', $permited)."</div>";
                        return $result;
                    }
                    //Check file

                    move_uploaded_file($file_temp, $uploaded_image);

                    $sqlquery = "UPDATE $tableName SET tenBanner = $tenBannerString, noiDungBanner = $noiDungBannerString, moTaBanner = $moTaBannerString, urlBanner = $unique_imageString WHERE id_banner = $id_banner ";

                    $editShop = $db->ExcuteQuery($sqlquery);

                    if ($editShop) {

                        //Xóa ảnh đại diện cũ
                        $pathImageDelete = "uploads/banner/".$pathImageOld;
                        unlink($pathImageDelete);

                        $result = "<div class='alert alert-success'>Sửa thông tin banner thành công!</div>";
                        return $result;
                    } else {
                        $result = "<div class='alert alert-danger'>Sửa thông tin banner thất bại!</div>";
                        return $result;
                    }

                }else{//Trường hợp không update ảnh

                    $sqlquery = "UPDATE $tableName SET tenBanner = $tenBannerString, noiDungBanner = $noiDungBannerString, moTaBanner = $moTaBannerString WHERE id_banner = $id_banner ";
                        
                    $editShop = $db->ExcuteQuery($sqlquery);

                    if ($editShop) {
                        $result = "<div class='alert alert-success'>Sửa thông tin banner thành công!</div>";
                        return $result;
                    } else {
                        $result = "<div class='alert alert-danger'>Sửa thông tin banner thất bại!</div>";
                        return $result;
                    }

                }

            
            }
    
        }


        //Hàm mở/khóa cửa hàng
        public function KhoaMoBanner($idBanner, $trangThaiBanner){
            require_once(__DIR__.'/../../ModelChung/DBConfig.php');
            $db = new Database();

            if ($trangThaiBanner == 1){
                $sqlquery = "UPDATE tbl_banner SET trangThaiBanner = 0 WHERE id_banner = $idBanner ";
            }else{
                $sqlquery = "UPDATE tbl_banner SET trangThaiBanner = 1 WHERE id_banner = $idBanner ";
            }
            
            $lockUnlockBanner = $db->ExcuteQuery($sqlquery);

            if ($trangThaiBanner == 1){
                if ($lockUnlockBanner) {
                    $result = "<div class='alert alert-success'>Ẩn banner thành công!</div>";
                    return $result;
                } else {
                    $result = "<div class='alert alert-danger'>Ẩn banner thất bại!</div>";
                    return $result;
                }
            }else{
                if ($lockUnlockBanner) {
                    $result = "<div class='alert alert-success'>Hiện banner thành công!</div>";
                    return $result;
                } else {
                    $result = "<div class='alert alert-danger'>Hiện banner thất bại!</div>";
                    return $result;
                }
            }

        }



}

?>