<?php

require_once(__DIR__.'/../model/ShopModel.php');
$shopModel = new ShopModel();

// Khóa/Mở người dùng
if (isset($_POST['id_shop']) && isset($_POST['trangThaiShop']) ){
    $id_shop = $_POST['id_shop'];
    $trangThaiShop = $_POST['trangThaiShop'];
    
    $result = $shopModel->KhoaMoCuaHang($id_shop, $trangThaiShop);

    echo "<script>alert('".$result."');</script>";
    
    header("Location: ../?viewpage=list-shop");
    
}
// Khóa/Mở người dùng


if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

$pageHeader = '<i class="fa fa-shopping-cart"></i>Quản lý cửa hàng';

switch ($action) {
    case '': {
        $pageTitle = 'Danh sách cửa hàng | Quản lý cửa hàng';
        
        
        $dataResult = $db->ShowAllData2Table('tbl_nguoidung', 'id_nguoiDung', 'tbl_shop');

        $count = $db->CountDataTable('tbl_shop');

        require_once(__DIR__ . '/../pages/Shop/ListShop.php');
        break;
    }

    case 'add': {
        //tiêu đề trang
        $pageTitle = 'Thêm cửa hàng | Quản lý cửa hàng';

        $dataUser = $db->ShowAllData('tbl_nguoidung');
        $result = $shopModel->ThemCuaHang();

        require_once(__DIR__ . '/../pages/Shop/AddShop.php');
        break;
    }

    case 'edit': {
        // tiêu đề trang
        $pageTitle = 'Sửa thông tin cửa hàng | Quản lý cửa hàng';

        if (isset($_GET['idShop'])){
            $idShop = $_GET['idShop'];   
        }

        $result = $shopModel->SuaCuaHang($idShop);
        
        require_once(__DIR__ . '/../pages/Shop/EditShop.php');
        break;
    }

    default: {
        $pageTitle = '404';
        require_once(__DIR__ . '/../404.php');
        break;
    }
}




?>