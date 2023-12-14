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

        function register($id, $companyName, $giro, $direccion, $phoneCompany, $namePerson, $phoneNumber, $emailPerson){
            $queryINSERT = 'INSERT INTO Empresas VALUES (null, "'.$id.'", "'.$companyName.'", "'.$giro.'", "'.$direccion.'", "'.$phoneCompany.'", "'.$namePerson.'", "'.$emailPerson.'", "'.$phoneNumber.'");';
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

        function getData(){
            $querySELECT = 'SELECT * FROM Usuarios AS u, Empresas AS e WHERE u.IdUsuario = e.IdUsuario AND u.IdUsuario = "'.$_SESSION["id"].'";';
			if( $queryDB = mysqli_query($this->db, $querySELECT )){
                $result = mysqli_fetch_assoc($queryDB);
                $_SESSION["id2"] = $result["IdEmpresa"];
                $_SESSION["razonSocial"] = $result["RazonSocial"];
                $_SESSION["giro"] = $result["GiroEmpresa"];
                $_SESSION["direccion"] = $result["Direccion"];
                $_SESSION["telefono"] = $result["Telefono"];
                $_SESSION["correo"] = $result["Correo"];
                $_SESSION["asesor"] = $result["NombreCompletoAsesor"];
                $_SESSION["correoAsesor"] = $result["CorreoAsesor"];
                $_SESSION["telefonoAsesor"] = $result["TelefonoAsesor"];
                return true;
			}
	        return false;
        }

    }
?>