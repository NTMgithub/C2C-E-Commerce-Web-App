<?php

require_once(__DIR__.'/../model/BannerModel.php');
$bannerModel = new BannerModel();

// // Khóa/Mở người dùng
if (isset($_POST['id_banner']) && isset($_POST['trangThaiBanner']) ){
    $id_banner = $_POST['id_banner'];
    $trangThaiBanner = $_POST['trangThaiBanner'];
    
    $result = $bannerModel->KhoaMoBanner($id_banner, $trangThaiBanner);

    echo "<script>alert('".$result."');</script>";
    
    header("Location: ../?viewpage=list-banner");

}
// Khóa/Mở người dùng


if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

$pageHeader = '<i class="fas fa-picture-o"></i>Quản lý banner';

switch ($action) {
    case '': {
        $pageTitle = 'Danh sách banner | Quản lý banner';
        
        
        $dataResult = $db->ShowAllData('tbl_banner');

        $count = $db->CountDataTable('tbl_banner');

        require_once(__DIR__ . '/../pages/Banner/ListBanner.php');
        break;
    }

    case 'add': {
        //tiêu đề trang
        $pageTitle = 'Thêm banner | Quản lý banner';

        $result = $bannerModel->ThemBanner();

        require_once(__DIR__ . '/../pages/Banner/AddBanner.php');
        break;
    }

    case 'edit': {
        // tiêu đề trang
        $pageTitle = 'Sửa thông tin banner | Quản lý banner';

        if (isset($_GET['idBanner'])){
            $idBanner = $_GET['idBanner'];   
        }

        $result = $bannerModel->SuaBanner($idBanner);
        
        require_once(__DIR__ . '/../pages/Banner/EditBanner.php');
        break;
    }

    default: {
        $pageTitle = '404';
        require_once(__DIR__ . '/../404.php');
        break;
    }
}




?>