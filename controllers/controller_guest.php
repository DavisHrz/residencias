<?php

    if($operationIsNotEmpty && $operationIsExist){
        $operation = $_GET['operation'];
        $pathOperation = './validations/guest';

        switch ($operation) {
            case 1:
                require_once  $pathOperation.'/validation_login.php';
                break;

            case 2:
                require_once  $pathOperation.'/validation_register.php';
                break;
        }
        exit();
    }


    $pathView = './views/guest';

    if($pageIsExist && $pageIsNotEmpty){
        $pageNumber = $_GET['page'];

        switch ($pageNumber) {
            case 1:
                require_once $pathView.'/view_login.php';
                break;
            
            case 2:
                require_once  $pathView.'/view_register.php';
                break;
            
            default:
                require_once $pathView.'/view_login.php';
                break;
        }
    }else{
        require_once $pathView.'/view_login.php';
    }

?>