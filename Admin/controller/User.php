<?php
    if ( isset($_GET['action']) ) {
        $action = $_GET['action'];
    }else {
        $action = '';
    }

    switch ($action) {
        case '':{
            require_once(__DIR__.'/../pages/User/index.php');
            break;
        }
                    
        default:
            
            break;
    }



?>