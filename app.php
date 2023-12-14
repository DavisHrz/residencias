<?php
    session_start();
    require_once 'models/DataBase.php';

    $database = new DataBase();
    $guest = new Guest();

    $pageIsNotEmpty = !empty($_GET['page']);
    $pageIsExist = isset($_GET['page']);

    $operationIsNotEmpty = !empty($_GET['operation']);
    $operationIsExist = isset($_GET['operation']);


    $userRol = empty($_SESSION['rol']) ? 'invitado' : $_SESSION['rol'];
    
    switch ($userRol) {
        case 'invitado':
            require_once 'models/Guest.php';
            $guest = new Guest();

            require_once './controllers/controller_guest.php';
            break;

        case 'Alumno':
            require_once 'models/Student.php';
            $student = new Student();

            require_once './controllers/controller_student.php';
            break;

        case 'Maestro':
            require_once 'models/Assessor.php';
            $assessor = new Assessor();

            require_once './controllers/controller_assessor.php';
            break;
    
        case 'Empresa':
            require_once 'models/Companie.php';
            $companie = new Companie();

            require_once './controllers/controller_assessor.php';
            break;

        case 'Administrador':
            require_once 'models/Administrator.php';
            $admin = new Administrator();

            require_once './controllers/controller_administrator.php';
            break;

        default:
            break;
    }
    
/*
    if(empty($_SESSION['usr'])){
        $siEsVacio = empty($_GET["p"]);
        $siExiste = isset($_GET["p"]);
        $path = "vistas/inicio";
    
        require_once "validaciones/v_registro.php";
        require_once "validaciones/v_login.php";
        if (!$siEsVacio && $siExiste) {
            $numeroPagina = $_GET["p"];
            require_once $path."/vista_navegacion_inicio.php";//header
            switch ($numeroPagina) {//cuerpo de la pagina
                case 1:
                    require_once $path."/vista_pagina_inicio.php";
                    break;
                case 2:
                    require_once $path."/vista_login.php" ;            
                    break;
                case 3:
                    require_once $path."/vista_singup.php";
                    break;
                default:
                    require_once $path."/vista_pagina_inicio.php";
                    break;
            }
            require_once $path."/vista_footer.php";//footer
        }else{
            require_once $path."/vista_navegacion_inicio.php";
            require_once $path."/vista_pagina_inicio.php";
            require_once $path."/vista_footer.php";
        }
    }else if($_SESSION['tipo'] == 1){
        require_once "controladores/controladorAdmin.php";
    }else{
        require_once "controladores/controladorStart.php";
    }
*/

?>