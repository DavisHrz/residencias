<?php

    if( isset($_GET['valor']) && !empty($_GET['valor']) &&
    isset($_GET['id']) && !empty($_GET['id']) &&
    isset($_GET['idAlumno']) && !empty($_GET['idAlumno']) ){

        $valor = $_GET['valor'];
        $id = $_GET['id'];
        $idAlumno = $_GET['idAlumno'];

        if($valor == "aceptar"){
            echo "1.- ".$id." 2.-".$idAlumno;
            $company->setAccept($id, $idAlumno);
            $company->setStudentToProject($id, $idAlumno);
            echo "<script>
                Swal.fire({
                    title: 'Alumno aceptado',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false
                }).then((result) => {
                    window.location.href = 'index.php?page=4';
                });
            </script>";
            exit();
        }else{
            $company->setReject($id);
            echo "<script>
                Swal.fire({
                    title: 'Alumno rechazado',
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