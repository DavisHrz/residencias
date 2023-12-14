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
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo "<script>
                Swal.fire({
                    title: 'Registro exitoso',
                    text: 'La peticion de registro se le ha enviado al administrador',
                    icon: 'success',
                    timer: 2000,
                    showConfirmButton: false
                }).then((result) => {
                    window.location.href = 'index.php';
                });
            </script>";
            exit();
        }
    }

?>