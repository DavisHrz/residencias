<?php
    class Company{
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
                return true;
			}
	        return false;
        }

    }
?>