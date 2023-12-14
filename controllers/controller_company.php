<?php

    if($operationIsNotEmpty && $operationIsExist){
        $operation = $_GET['operation'];
        $pathOperation = './validations/company';

        switch ($operation) {
            case 1:
                require_once  './validations/validation_logout.php';
                break;

            case 2:
                require_once  $pathOperation.'/validation_register.php';
                break;
        }
        exit();
    }


    $pathView = './views/company';

    if($_SESSION['registerConfirm'] == false){
        require_once './views/view_wait.php';
        
    }else if($_SESSION['isFullData'] == false){
        require_once $pathView.'/view_company_register.php';

    }else  if($pageIsExist && $pageIsNotEmpty){
        $pageNumber = $_GET['page'];

        switch ($pageNumber) {
            case 1:
                //require_once $pathView.'/view_login.php';
                break;
            
            case 2:
                //require_once  $pathView.'/view_register.php';
                break;
            
            default:
                //require_once $pathView.'/view_login.php';
                break;
        }
    }else{
        //require_once $pathView.'/view_login.php';
    }

?>