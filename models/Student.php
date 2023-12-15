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

        function getProjects(){
            $proyectos = array();
            $querySELECT = 'SELECT * FROM Proyectos;';
            if( $queryDB = mysqli_query($this->db, $querySELECT)){
                while ( $result = mysqli_fetch_assoc($queryDB) ){
                    $proyecto = array();
                    array_push($proyecto, $result["IdProyecto"]);
                    array_push($proyecto, $result["Nombre"]);
                    array_push($proyecto, $result["PerfilRequerido"]);
                    array_push($proyecto, $result["Descripcion"]);
                    array_push($proyecto, $result["CantidadResidentes"]);

                    array_push($proyectos, $proyecto);
                }
			}
	        return $proyectos;
        }

    }
?>