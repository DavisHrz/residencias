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

        function register($id, $companyName,  $giro, $phoneCompany, $namePerson, $phoneNumber, $emailPerson){
            $queryINSERT = 'INSERT INTO Empresas VALUES (null, "'.$id.'", "'.$companyName.'", "'.$giro.'", "'.$phoneCompany.'", "'.$namePerson.'", "'.$emailPerson.'", "'.$phoneNumber.'");';
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