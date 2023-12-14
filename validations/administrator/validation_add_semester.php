<?php
    if( isset($_POST['periodo']) && !empty($_POST['periodo']) ){
        $periodo = $_POST['periodo'];

        $admin->addSemester($periodo);

        echo "<script>
                Swal.fire({
                    title: 'Periodo añadido',
                    icon: 'success',
                    timer: 2000,
                    showConfirmButton: false
                }).then((result) => {
                    window.location.href = 'index.php';
                });
            </script>";
        exit();

    }else{
        echo "<script>
                Swal.fire({
                    title: 'Periodo no aceptado',
                    icon: 'error',
                    timer: 2000,
                    showConfirmButton: false
                }).then((result) => {
                    window.location.href = 'index.php';
                });
            </script>";
    }
?>