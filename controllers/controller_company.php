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

            case 3:
                require_once  $pathOperation.'/validation_project.php';
                break;

            case 4:
                require_once  $pathOperation.'/validation_comment.php';
                break;

            case 5:
                require_once  $pathOperation.'/validation_respond.php';
                break;
        }
        exit();
    }


    $pathView = './views/company';
    if($_SESSION["isFullData"]){
        $company->getData();
    }

    if($_SESSION['registerConfirm'] == false){
        require_once './views/view_wait.php';
        
    }else if($_SESSION['isFullData'] == false){
        require_once $pathView.'/view_company_register.php';

    }else  if($pageIsExist && $pageIsNotEmpty){
        $pageNumber = $_GET['page'];

        switch ($pageNumber) {
            case 1:
                require_once $pathView.'/view_header.php';
                require_once $pathView.'/view_company.php';
                break;
            
            case 2:
                require_once $pathView.'/view_header.php';
                require_once  $pathView.'/view_create_proyect.php';
                break;

            case 3:
                require_once $pathView.'/view_header.php';
                require_once  $pathView.'/view_company_projects.php';
                break;
                
            case 4:
                require_once $pathView.'/view_header.php';
                require_once $pathView.'/view_company_projectRequest.php';
                break;

            case 5:
                require_once $pathView.'/view_header.php';
                require_once $pathView.'/view_company_student_Profile.php';
                break;
            
            default:
                require_once $pathView.'/view_header.php';
                require_once $pathView.'/view_company.php';
                break;
        }
    }else{
        require_once $pathView.'/view_header.php';
        require_once $pathView.'/view_company.php';
    }

?>