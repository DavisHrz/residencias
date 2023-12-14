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

            header("Location: index.php");
            exit();
        }
    }

?>