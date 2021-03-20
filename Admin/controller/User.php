<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

$pageHeader = '<i class="fa fa-group"></i>Quản lý người dùng';

switch ($action) {
    case '': {
            $pageTitle = 'Quản lý người dùng';

            $dataResult = $db->ShowAllData('tbl_nguoidung');

            require_once(__DIR__ . '/../pages/User/ListUser.php');
            break;
        }

    case 'add': {
            //tiêu đề trang
            $pageTitle = 'Thêm người dùng | Quản lý người dùng';

            $result = ThemNguoiDung();

            require_once(__DIR__ . '/../pages/User/AddUser.php');
            break;
        }

    default: {
            $pageTitle = '404';
            require_once(__DIR__ . '/../404.php');
            break;
        }
}

// Hàm thêm người dùng
function ThemNguoiDung()
{
    require_once(__DIR__.'/../../ModelChung/DBConfig.php');
    $db = new Database();
    $result = '';
    $dataResult = $db->ShowAllData('tbl_nguoidung'); //Dùng cho kiểm tra trùng

    //Trường hợp thêm mà KHÔNG ảnh đại diện
    if (
        isset($_POST['hoTen_input']) && isset($_POST['email_input']) && isset($_POST['sdt_input']) &&
        isset($_POST['gioiTinh']) && isset($_POST['ngaySinh_input']) && isset($_POST['tenTaiKhoan_input'])
        && isset($_POST['matKhau_input'])
    ){
        $hoTen = $db->conn->real_escape_string($_POST['hoTen_input']);
        $email = $db->conn->real_escape_string($_POST['email_input']);
        $sdt = $db->conn->real_escape_string($_POST['sdt_input']);
        $gioiTinh = $db->conn->real_escape_string($_POST['gioiTinh']);
        $ngaySinh = $db->conn->real_escape_string($_POST['ngaySinh_input']);
        $tenTaiKhoan = $db->conn->real_escape_string($_POST['tenTaiKhoan_input']);
        $matKhau = md5($db->conn->real_escape_string($_POST['matKhau_input']));
        $ngayTao = date("Y-m-d H:i:s");

        //Kiểm tra trùng tên tài khoản
        foreach ($dataResult as $value){
            if ($value['tenTaiKhoan'] == $tenTaiKhoan ){
                $result = "<div class='alert alert-danger'>Tên tài khoản đã được sử dụng! <br> Vui lòng nhập tên tài khoản khác!</div>";
                return $result;
            }else if ($value['email'] == $email ){
                $result = "<div class='alert alert-danger'>Email đã được sử dụng! <br> Vui lòng nhập Email khác!</div>";
                return $result;
            }else if ($value['sdt'] == $sdt ){
                $result = "<div class='alert alert-danger'>Số điện thoại đã được sử dụng! <br> Vui lòng nhập số điện thoại khác!</div>";
                return $result;
            }
        }

        //Kiểu dữ liệu truyền vào các tham số
        $tableName   = 'tbl_nguoidung'; //tên table
        $tableProps = implode(",", [
            'tenTaiKhoan', 'matKhau', 'email', 'sdt', 'hoTen', 'ngaySinh',
            'gioiTinh', 'thoiGianTao', 'trangThai', 'thoiGianSua', 'anhDaiDien'
        ]); //thuộc tính table

        $value = implode(",", [
            "'" . $tenTaiKhoan . "'", "'" . $matKhau . "'", "'" . $email . "'", "'" . $sdt . "'",
             "'" . $hoTen . "'", "'" . $ngaySinh . "'", "'" . $gioiTinh . "'", "'" . $ngayTao . "'", '1', 'NULL', 'NULL'
        ]); //giá trị table
        
        $insertUser = $db->InsertData($tableName, $tableProps, $value);

        if ($insertUser) {
            $result = "<div class='alert alert-success'>Thêm người dùng thành công!</div>";
            return $result;
        } else {
            $result = "<div class='alert alert-danger'>Thêm người dùng thất bại!</div>";
            return $result;
        }

    } 
     //Trường hợp thêm CÓ ảnh đại diện
    else if ( isset($_POST['hoTen_input']) && isset($_POST['email_input']) && isset($_POST['sdt_input']) &&
        isset($_POST['gioiTinh']) && isset($_POST['ngaySinh_input']) && isset($_POST['tenTaiKhoan_input'])
        && isset($_POST['matKhau_input']) && isset($_POST['avatar_input'])
    ){
        $hoTen = $db->conn->real_escape_string($_POST['hoTen_input']);
        $email = $db->conn->real_escape_string($_POST['email_input']);
        $sdt = $db->conn->real_escape_string($_POST['sdt_input']);
        $gioiTinh = $db->conn->real_escape_string($_POST['gioiTinh']);
        $ngaySinh = $db->conn->real_escape_string($_POST['ngaySinh_input']);
        $tenTaiKhoan = $db->conn->real_escape_string($_POST['tenTaiKhoan_input']);
        $matKhau = md5($db->conn->real_escape_string($_POST['matKhau_input']));
        $ngayTao = date("Y-m-d H:i:s");

        $avatar = $db->conn->real_escape_string($_POST['avatar_input']);





        

        //Kiểm tra trùng tên tài khoản
        foreach ($dataResult as $value){
            if ($value['tenTaiKhoan'] == $tenTaiKhoan ){
                $result = "<div class='alert alert-danger'>Tên tài khoản đã được sử dụng! <br> Vui lòng nhập tên tài khoản khác!</div>";
                return $result;
            }else if ($value['email'] == $email ){
                $result = "<div class='alert alert-danger'>Email đã được sử dụng! <br> Vui lòng nhập Email khác!</div>";
                return $result;
            }else if ($value['sdt'] == $sdt ){
                $result = "<div class='alert alert-danger'>Số điện thoại đã được sử dụng! <br> Vui lòng nhập số điện thoại khác!</div>";
                return $result;
            }
        }

        //Kiểu dữ liệu truyền vào các tham số
        $tableName   = 'tbl_nguoidung'; //tên table
        $tableProps = implode(",", [
            'tenTaiKhoan', 'matKhau', 'email', 'sdt', 'hoTen', 'ngaySinh',
            'gioiTinh', 'thoiGianTao', 'trangThai', 'thoiGianSua', 'anhDaiDien'
        ]); //thuộc tính table

        $value = implode(",", [
            "'" . $tenTaiKhoan . "'", "'" . $matKhau . "'", "'" . $email . "'", "'" . $sdt . "'",
             "'" . $hoTen . "'", "'" . $ngaySinh . "'", "'" . $gioiTinh . "'", "'" . $ngayTao . "'", '1', 'NULL', 'NULL'
        ]); //giá trị table
        
        $insertUser = $db->InsertData($tableName, $tableProps, $value);

        if ($insertUser) {
            $result = "<div class='alert alert-success'>Thêm người dùng thành công!</div>";
            return $result;
        } else {
            $result = "<div class='alert alert-danger'>Thêm người dùng thất bại!</div>";
            return $result;
        }


    }


}


?>