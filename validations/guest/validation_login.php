<?php

    if( isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['password']) && !empty($_POST['password']) ){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $guest->email = $email;
        $guest->password = $password;

        if($guest->login()){
            $_SESSION["id"] = $guest->id;
            $_SESSION["rol"] = $guest->rol;
            $_SESSION["registerConfirm"] = $guest->confirm;
            $_SESSION["isFullData"] = $guest->fullData;

            header("Location: index.php");
            exit();
        }else{
            echo "<script>
                Swal.fire({
                    title: 'Credenciales no validas',
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
                    title: 'Llene todos los campos',
                    icon: 'error',
                    timer: 3000,
                    showConfirmButton: false
                }).then((result) => {
                    window.location.href = 'index.php';
                });
            </script>";
    }

?>