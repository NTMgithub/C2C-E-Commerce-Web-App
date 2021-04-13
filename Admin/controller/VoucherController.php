<?php

require_once(__DIR__.'/../model/VoucherModel.php');
$voucherModel = new VoucherModel();

// Khóa/Mở người dùng
if (isset($_POST['id_voucher']) && isset($_POST['trangThaiVoucher']) ){
    $id_voucher = $_POST['id_voucher'];
    $trangThaiVoucher = $_POST['trangThaiVoucher'];
    
    $result = $voucherModel->KhoaMoKM($id_voucher, $trangThaiVoucher);

    echo "<script>alert('".$result."');</script>";
    
    header("Location: ../?viewpage=list-voucher");
    
}
// Khóa/Mở khyến mãi


if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

$pageHeader = '<i class="fa fa-gift"></i>Quản lý khuyến mãi';

switch ($action) {
    case '': {
        $pageTitle = 'Danh sách khuyến mãi | Quản lý khuyến mãi';
        
        
        $dataResult = $db->ShowAllData('tbl_khuyenmai');

        $count = $db->CountDataTable('tbl_khuyenmai');

        require_once(__DIR__ . '/../pages/Voucher/ListVoucher.php');
        break;
    }

    case 'add': {
        //tiêu đề trang
        $pageTitle = 'Thêm khuyến mãi | Quản lý khuyến mãi';

        $dataUser = $db->ShowAllData('tbl_khuyenmai');
        $result = $voucherModel->ThemKM();
        require_once(__DIR__ . '/../pages/Voucher/AddVoucher.php');
        break;
    }

    case 'edit': {
        // tiêu đề trang
        $pageTitle = 'Sửa thông tin khuyến mãi | Quản lý khuyến mãi';

        if (isset($_GET['idKM'])){
            $idKM = $_GET['idKM'];   
        }

        $result = $VoucherModel->SuaKM($idKM);
        
        require_once(__DIR__ . '/../pages/Voucher/EditVoucher.php');
        break;
    }

    default: {
        $pageTitle = '404';
        require_once(__DIR__ . '/../404.php');
        break;
    }
}




?>