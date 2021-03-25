<?php

require_once(__DIR__.'/../model/UserModel.php');
$userModel = new UserModel();

//Khóa/Mở người dùng
if (isset($_POST['id_nguoiDung']) && isset($_POST['trangThaiND']) ){
    $id_nguoiDung = $_POST['id_nguoiDung'];
    $trangThai = $_POST['trangThaiND'];
    
    $result = $userModel->KhoaMoNguoiDung($id_nguoiDung, $trangThai);

    echo "<script>alert('".$result."');</script>";
    
    header("Location: ../?viewpage=list-user");
    
}
//Khóa/Mở người dùng

//Reset mật khẩu người dùng
if (isset($_POST['matKhauMoi']) && isset($_POST['id_nguoiDung']) ){
    $matKhauMoi = $_POST['matKhauMoi'];
    $xacNhanMatKhauMoi = $_POST['xacNhanMatKhauMoi'];
    
    $result = $userModel->KhoaMoNguoiDung($id_nguoiDung, $trangThai);

    echo "<script>alert('".$result."');</script>";
    

    header("Location: ../?viewpage=list-user&resultReset=success");

    
}
//Reset mật khẩu người dùng


if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

$pageHeader = '<i class="fa fa-group"></i>Quản lý người dùng';

switch ($action) {
    case '': {
        $pageTitle = 'Danh sách người dùng | Quản lý người dùng';

        $dataResult = $db->ShowAllData('tbl_nguoidung');
        $count = $db->CountDataTable('tbl_nguoidung');

        require_once(__DIR__ . '/../pages/User/ListUser.php');
        break;
    }

    case 'add': {
        //tiêu đề trang
        $pageTitle = 'Thêm người dùng | Quản lý người dùng';

        $result = $userModel->ThemNguoiDung();

        require_once(__DIR__ . '/../pages/User/AddUser.php');
        break;
    }

    case 'edit': {
        //tiêu đề trang
        $pageTitle = 'Sửa thông tin người dùng | Quản lý người dùng';

        if (isset($_GET['idNguoiDung'])){
            $idNguoiDung = $_GET['idNguoiDung'];
        }

        $result = $userModel->SuaNguoiDung($idNguoiDung);
        
        require_once(__DIR__ . '/../pages/User/EditUser.php');
        break;
    }

    default: {
        $pageTitle = '404';
        require_once(__DIR__ . '/../404.php');
        break;
    }
}




?>