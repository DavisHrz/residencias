<?php

    if( isset($_POST['comportamiento']) && !empty($_POST['comportamiento']) &&
    isset($_POST['idProyecto']) && !empty($_POST['idProyecto']) &&
    isset($_POST['idAlumno']) && !empty($_POST['idAlumno']) &&
    isset($_POST['calificacionAceptacion']) && !empty($_POST['calificacionAceptacion']) ){

        $comportamiento = $_POST['comportamiento'];
        $idProyecto = $_POST['idProyecto'];
        $idAlumno = $_POST['idAlumno'];
        $calificacionAceptacion = $_POST['calificacionAceptacion'];

        if($company->setReseña($idProyecto, $idAlumno, $comportamiento, $calificacionAceptacion)){

            echo "<script>
                Swal.fire({
                    title: 'Registro exitoso',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false
                }).then((result) => {
                    window.location.href = 'index.php?page=4&project=".$idProyecto."&student=".$idAlumno.";
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