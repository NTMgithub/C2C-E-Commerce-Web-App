<?php

require_once(__DIR__.'/../model/UserModel.php');
$userModel = new UserModel();

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