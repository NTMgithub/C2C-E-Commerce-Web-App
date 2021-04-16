<?php

require_once(__DIR__.'/../model/ReportModel.php');
$reportModel = new ReportModel();

// // Khóa/Mở người dùng
if (isset($_POST['id_gopy']) && isset($_POST['trangThaiGopY']) ){
    $id_gopy = $_POST['id_gopy'];
    $trangThaiGopY = $_POST['trangThaiGopY'];
    
    $result = $reportModel->KhoaMoReport($id_gopy, $trangThaiGopY);

    echo "<script>alert('".$result."');</script>";
    
    header("Location: ../?viewpage=list-report");

}
// Khóa/Mở người dùng


if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

$pageHeader = '<i class="fas fa-flag"></i>Quản lý báo cáo';

switch ($action) {
    case '': {
        $pageTitle = 'Danh sách báo cáo | Quản lý báo cáo';
        
        
        $dataResult = $db->ShowAllData2Table('tbl_gopy', 'id_nguoiDung', 'tbl_nguoidung');

        $count = $db->CountDataTable('tbl_gopy');

        require_once(__DIR__ . '/../pages/Report/ListReport.php');
        break;
    }


    default: {
        $pageTitle = '404';
        require_once(__DIR__ . '/../404.php');
        break;
    }
}




?>