<?php

    if( isset($_POST['controlNumber']) && !empty($_POST['controlNumber']) &&
    isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['lastName']) && !empty($_POST['lastName']) &&
    isset($_POST['secondSurName']) && !empty($_POST['secondSurName']) &&
    isset($_POST['phoneNumber']) && !empty($_POST['phoneNumber']) && 
    isset($_POST['knowledge']) && !empty($_POST['knowledge']) && 
    isset($_POST['average']) && !empty($_POST['average']) ){

        $controlNumber = $_POST['controlNumber'];
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $secondSurName = $_POST['secondSurName'];
        $phone = $_POST['phoneNumber'];
        $knowledge = $_POST['knowledge'];
        $average = $_POST['average'];

        if($student->register($controlNumber,  $name, $lastName, $secondSurName, $phone, $knowledge, $average)){
            $_SESSION["isFullData"] = true;

            echo "<script>
                Swal.fire({
                    title: 'Registro exitoso',
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