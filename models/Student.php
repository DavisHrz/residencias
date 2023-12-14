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

        function register($id, $controlNumber, $name, $lastName, $secondSurName, $phone, $average){
            $queryINSERT = 'INSERT INTO Alumnos VALUES (null, "'.$id.'", "'.$controlNumber.'", "'.$name.'", "'.$lastName.'", "'.$secondSurName.'", "'.$phone.'", "'.$average.'");';
			if( mysqli_query($this->db, $queryINSERT )){
                $this->setFullData($id);
                return true;
			}
	        return false;
        }

        function setFullData($id){
            $queryUPDATE = 'UPDATE Usuarios SET DatosLlenos = true WHERE IdUsuario = "'.$id.'";';
            if( mysqli_query($this->db, $queryUPDATE )){
                return true;
			}
	        return false;
        }

    }
?>