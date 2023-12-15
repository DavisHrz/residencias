<?php

    if($operationIsNotEmpty && $operationIsExist){
        $operation = $_GET['operation'];
        $pathOperation = './validations/student';

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


    $pathView = './views/student';

    if($_SESSION['registerConfirm'] == false){
        require_once './views/view_wait.php';
        
    }else if($_SESSION['isFullData'] == false){
        require_once $pathView.'/view_student_register.php';

    }else  if($pageIsExist && $pageIsNotEmpty){
        $pageNumber = $_GET['page'];
        require_once $pathView.'/view_header.php';

        switch ($pageNumber) {
            case 1:
                require_once $pathView.'/view_student.php';
                break;
            
            case 2:
                require_once  $pathView.'/view_student_offers.php';
                break;
            
            default:
                require_once $pathView.'/view_student.php';
                break;
        }
    }else{
        require_once $pathView.'/view_header.php';
        require_once $pathView.'/view_student.php';
    }

?>