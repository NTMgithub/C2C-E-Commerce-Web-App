<?php

    if ( isset($_GET['viewpage']) ){
        $viewpage = $_GET['viewpage'];
    }else{
        $viewpage = '';
    }

    switch ($viewpage) {
        case '':{
            require_once('home.php');
            break;
        }

        case 'list-user':{
            require_once('controller/User.php');
            break;
        }
                    
        default:{
            require_once('404.php');
            break;
        }
            
    }    



?>