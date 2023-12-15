<?php

    if( isset($_POST['experiencia']) && !empty($_POST['experiencia']) &&
    isset($_POST['proyectoAsignado']) && !empty($_POST['proyectoAsignado']) &&
    isset($_POST['calificacion']) && !empty($_POST['calificacion']) ){

        $calificacion = $_POST['calificacion'];
        $experiencia = $_POST['experiencia'];
        $proyectoAsignado = $_POST['proyectoAsignado'];

        if($student->setComment($proyectoAsignado, $experiencia, $calificacion)){

            echo "<script>
                Swal.fire({
                    title: 'Comentario registrado',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false
                }).then((result) => {
                    window.location.href = 'index.php?page=4';
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