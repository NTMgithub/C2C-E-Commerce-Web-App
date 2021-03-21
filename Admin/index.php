<?php
    require('../ModelChung/DBConfig.php');
    $db = new Database();

    if ( isset($_GET['viewpage']) ){
        $viewpage = $_GET['viewpage'];
    }else{
        $viewpage = '';
    }

    switch ($viewpage) {
        case '':{
            $pageTitle = 'Trang tổng quan';
            $pageHeader = '<i class="fas fa-tachometer-alt"></i>Trang tổng quan';

            require_once('home.php');
            break;
        }

        case 'list-user':{
            require_once('controller/UserController.php');
            break;
        }
                    
        default:{
            require_once('404.php');
            break;
        }
            
    }    



?>