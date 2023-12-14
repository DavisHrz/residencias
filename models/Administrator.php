<?php
    require_once("DataBase.php");

    class Administrator{
        var $id;
        var $db;

        function __construct(){
            $con = new DataBase();
            $this->db = $con->connect();
        }

        function getSemestres(){
            $semestres = array();
            $querySELECT = 'SELECT * FROM Semestres;';
			if( $queryDB = mysqli_query($this->db, $querySELECT )){
                while ( $result = mysqli_fetch_assoc($queryDB) ){
                    $semestre = array();
                    array_push($semestre, $result["IdSemestre"]);
                    array_push($semestre, $result["Semestre"]);
                    array_push($semestre, $result["Estado"]);

                    array_push($semestres, $semestre);
                }
			}
	        return $semestres;
        }

        function addSemester($periodo){
            $queryINSERT = 'INSERT INTO Semestres VALUES (null, "'.$periodo.'", true)';
			if( mysqli_query($this->db, $queryINSERT )){
                return true;
			}
	        return false;
        }

        function endSemester($idSemestre){
            $queryUPDATE = 'UPDATE Semestres SET Estado = false WHERE IdSemestre = "'.$idSemestre.'";';
			if(mysqli_query($this->db, $queryUPDATE)){
			    return true;
			}
	        return false;
        }

        function getRequestRegister(){
            $users = array();
            $querySELECT = 'SELECT u.*, r.Rol FROM usuarios AS u, roles AS r WHERE u.IdRol = r.IdRol AND Confirmado = false;';
			if( $queryDB = mysqli_query($this->db, $querySELECT )){
                while ( $result = mysqli_fetch_assoc($queryDB) ){
                    $user = array();
                    array_push($user, $result["IdUsuario"]);
                    array_push($user, $result["Correo"]);
                    array_push($user, $result["Rol"]);

                    array_push($users, $user);
                }
			}
	        return $users;
        }

        function declineRegistration($idUsuario){
            $queryDELETE = 'DELETE FROM usuarios WHERE IdUsuario = "'.$idUsuario.'";';
            if(mysqli_query($this->db, $queryDELETE)){
                return true;
            }
            return false;
        }

        function acceptRegistration($idUsuario){
            $queryDELETE = 'UPDATE Usuarios SET Confirmado = true WHERE IdUsuario = "'.$idUsuario.'";';
            if(mysqli_query($this->db, $queryDELETE)){
                return true;
            }
            return false;
        }

    }
?>