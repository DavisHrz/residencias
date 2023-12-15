<?php
    class Student{
        var $id;
        var $name;
        var $password;
        var $db;

        function __construct(){
            $con = new DataBase();
            $this->db = $con->connect();
        }

        function register($controlNumber, $name, $lastName, $secondSurName, $phone, $knowledge, $average){
            $queryINSERT = 'INSERT INTO Alumnos VALUES (null, "'.$_SESSION['id'].'", "'.$controlNumber.'", "'.$name.'", "'.$lastName.'", "'.$secondSurName.'", "'.$phone.'", "'.$knowledge.'", "'.$average.'");';
			if( mysqli_query($this->db, $queryINSERT )){
                $this->setFullData();
                return true;
			}
	        return false;
        }

        function setFullData(){
            $queryUPDATE = 'UPDATE Usuarios SET DatosLlenos = true WHERE IdUsuario = "'.$_SESSION['id'].'";';
            if( mysqli_query($this->db, $queryUPDATE )){
                return true;
			}
	        return false;
        }

    }
?>