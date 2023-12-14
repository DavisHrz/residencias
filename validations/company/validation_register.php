<?php

    if( isset($_POST['companyName']) && !empty($_POST['companyName']) &&
    isset($_POST['giro']) && !empty($_POST['giro']) &&
    isset($_POST['phoneCompany']) && !empty($_POST['phoneCompany']) &&
    isset($_POST['namePerson']) && !empty($_POST['namePerson']) &&
    isset($_POST['phoneNumber']) && !empty($_POST['phoneNumber']) && 
    isset($_POST['emailPerson']) && !empty($_POST['emailPerson']) ){

        $companyName = $_POST['companyName'];
        $giro = $_POST['giro'];
        $phoneCompany = $_POST['phoneCompany'];
        $namePerson = $_POST['namePerson'];
        $phoneNumber = $_POST['phoneNumber'];
        $emailPerson = $_POST['emailPerson'];

        if($company->register($_SESSION['id'], $companyName,  $giro, $phoneCompany, $namePerson, $phoneNumber, $emailPerson)){
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