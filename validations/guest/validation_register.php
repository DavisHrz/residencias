<?php

    if( isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['password']) && !empty($_POST['password']) &&
    isset($_POST['rol']) && !empty($_POST['rol']) ){

        $email = $_POST['email'];
        $password = $_POST['password'];
        $rol = $_POST['rol'];

        $guest->email = $email;
        $guest->password = $password;
        $guest->idRol = $rol;

        if($guest->register()){
            echo "<script>
                Swal.fire({
                    title: 'Peticion de registro enviada al administrador',
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