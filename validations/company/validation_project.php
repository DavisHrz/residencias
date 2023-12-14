<?php

    if( isset($_POST['nombre']) && !empty($_POST['nombre']) &&
    isset($_POST['perfilRequerido']) && !empty($_POST['perfilRequerido']) &&
    isset($_POST['descripcion']) && !empty($_POST['descripcion']) &&
    isset($_POST['semestre']) && !empty($_POST['semestre']) &&
    isset($_POST['tipoProyecto']) && !empty($_POST['tipoProyecto']) &&
    isset($_POST['fechaAsignacion']) && !empty($_POST['fechaAsignacion']) && 
    isset($_POST['fechaTermino']) && !empty($_POST['fechaTermino']) &&
    isset($_POST['horas']) && !empty($_POST['horas']) && 
    isset($_POST['cantidad']) && !empty($_POST['cantidad']) ){

        $nombre = $_POST['nombre'];
        $perfilRequerido = $_POST['perfilRequerido'];
        $descripcion = $_POST['descripcion'];
        $semestre = $_POST['semestre'];
        $tipoProyecto = $_POST['tipoProyecto'];
        $fechaAsignacion = $_POST['fechaAsignacion'];
        $fechaTermino = $_POST['fechaTermino'];
        $horas = $_POST['horas'];
        $cantidad = $_POST['cantidad'];

        if($company->insertProject($_SESSION['id2'], $semestre, $nombre, $perfilRequerido, $tipoProyecto, $descripcion, $fechaAsignacion, $fechaTermino, $horas, $cantidad)){

            echo "<script>
                Swal.fire({
                    title: 'Registro exitoso',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false
                }).then((result) => {
                    window.location.href = 'index.php';
                });
            </script>";
            exit();
        }else{
            echo "<script>
                Swal.fire({
                    title: 'Hubo un problema con el servidor',
                    icon: 'error',
                    timer: 3000,
                    showConfirmButton: false
                }).then((result) => {
                    window.location.href = 'index.php';
                });
            </script>";
        }
    }else{
        echo "<script>
                Swal.fire({
                    title: 'Porfavor llene todos los datos',
                    icon: 'error',
                    timer: 3000,
                    showConfirmButton: false
                }).then((result) => {
                    window.location.href = 'index.php';
                });
            </script>";
    }

?>