<?php
    if( isset($_POST['idUser']) && !empty($_POST['idUser']) &&
    isset($_POST['add']) && !empty($_POST['add'])){

        $idUser = $_POST['idUser'];
        $add = $_POST['add'];

        if($add == 'aceptada'){
            if( $admin->acceptRegistration($idUser) ){

                echo "<script>
                    Swal.fire({
                        title: 'Solicitud acceptada',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }).then((result) => {
                        window.location.href = 'index.php';
                    });
                </script>";
            }
        }else {
            if( $admin->declineRegistration($idUser) ){

                echo "<script>
                    Swal.fire({
                        title: 'Solicitud rechazada',
                        icon: 'error',
                        timer: 2000,
                        showConfirmButton: false
                    }).then((result) => {
                        window.location.href = 'index.php';
                    });
                </script>";
            }
        }
        
        exit();
    }else{
        echo "<script>
                Swal.fire({
                    title: 'Se ha tenido un problema con el servidor',
                    icon: 'error',
                    timer: 2000,
                    showConfirmButton: false
                }).then((result) => {
                    window.location.href = 'index.php';
                });
            </script>";
    }
?>