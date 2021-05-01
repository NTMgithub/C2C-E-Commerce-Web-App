<?php

class ReportModel
{
        
        //Hàm mở/khóa cửa hàng
        public function KhoaMoReport($idGopY, $trangThaiGopY){
            require_once(__DIR__.'/../../ModelChung/DBConfig.php');
            $db = new Database();

            if ($trangThaiGopY == 1){
                $sqlquery = "UPDATE tbl_gopy SET trangThaiGopY = 0 WHERE id_gopy = $idGopY ";
            }else{
                $sqlquery = "UPDATE tbl_gopy SET trangThaiGopY = 1 WHERE id_gopy = $idGopY ";
            }
            
            $lockUnlockReport = $db->ExcuteQuery($sqlquery);

            if ($trangThaiGopY == 1){
                if ($lockUnlockReport) {
                    $result = "<div class='alert alert-success'>Đánh dấu ĐÃ XONG thành công!</div>";
                    return $result;
                } else {
                    $result = "<div class='alert alert-danger'>Đánh dấu ĐÃ XONG thất bại!</div>";
                    return $result;
                }
            }else{
                if ($lockUnlockReport) {
                    $result = "<div class='alert alert-success'>Thay đổi trạng thái thành công!</div>";
                    return $result;
                } else {
                    $result = "<div class='alert alert-danger'>Thay đổi trạng thái thất bại!</div>";
                    return $result;
                }
            }

        }



}

?>