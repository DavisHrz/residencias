<?php
    if( isset($_POST['periodo']) && !empty($_POST['periodo']) ){
        $periodo = $_POST['periodo'];

        $_SESSION["idSemestre"] = $periodo;

        header("Location: index.php");
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