<?php

    if($operationIsNotEmpty && $operationIsExist){
        $operation = $_GET['operation'];
        $pathOperation = './validations/administrator';

        switch ($operation) {
            case 1:
                require_once  './validations/validation_logout.php';
                break;

            case 2:
                require_once  $pathOperation.'/validation_select_semester.php';
                break;
            
            case 3:
                require_once  $pathOperation.'/validation_add_semester.php';
                break;

            case 4:
                require_once  $pathOperation.'/validation_registration.php';
                break;
        }
    }


    $pathView = './views/administrator';

    if( empty($_SESSION['idSemestre']) ){

        if($pageIsExist && $pageIsNotEmpty){
            $pageNumber = $_GET['page'];
    
            switch ($pageNumber) {
                case 1:
                    require_once $pathView.'/view_header1.php';
                    require_once $pathView.'/view_select_semester.php';
                    break;
                
                case 2:
                    require_once $pathView.'/view_header1.php';
                    require_once $pathView.'/view_add_semester.php';
                    break;
    
                case 3:
                    require_once $pathView.'/view_header1.php';
                    require_once $pathView.'/view_registration_request.php';
                    break;
                
                default:
                    require_once $pathView.'/view_header1.php';
                    require_once $pathView.'/view_select_semester.php';
                    break;
            }
        }else{
            require_once $pathView.'/view_header1.php';
            require_once $pathView.'/view_select_semester.php';
        }


    }else {

        if($pageIsExist && $pageIsNotEmpty){
            $pageNumber = $_GET['page'];
    
            switch ($pageNumber) {
                case 1:
                    //require_once $pathView.'/view_header1.php';
                    //require_once $pathView.'/view_select_semester.php';
                    break;
                
                case 2:
                    //require_once $pathView.'/view_header1.php';
                    //require_once $pathView.'/view_add_semester.php';
                    break;
    
                case 3:
                    //require_once $pathView.'/view_header1.php';
                    //require_once $pathView.'/view_registration_request.php';
                    break;
                
                default:
                    //require_once $pathView.'/view_header1.php';
                    //require_once $pathView.'/view_select_semester.php';
                    break;
            }
        }else{
            //require_once $pathView.'/view_header1.php';
            //require_once $pathView.'/view_select_semester.php';
        }
    }

?>