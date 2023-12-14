<?php
    class Guest{
        var $id;
        var $idRol;
        var $rol;
        var $email;
        var $password;
        var $confirm;
        var $fullData;
        var $db;

        function __construct(){
            $con = new DataBase();
            $this->db = $con->connect();
        }

        function login(){
            $querySELECT = 'SELECT u.*, r.Rol FROM usuarios AS u, roles AS r WHERE u.IdRol = r.IdRol AND u.Correo="'.$this->email.'" AND u.Contrasena="'.md5($this->password).'"; ';
			if($queryDB = mysqli_query($this->db, $querySELECT)){
                $result = mysqli_fetch_assoc($queryDB);
                $this->id = $result["IdUsuario"];
                $this->rol = $result["Rol"];
                $this->confirm = $result["Confirmado"];
                $this->fullData = $result["DatosLlenos"];
			    return true;
			}
	        return false;
        }

        function register(){
            $querySELECT = 'INSERT INTO usuarios VALUES (null, "'.$this->idRol.'", "'.$this->email.'", "'.md5($this->password).'", false, false, now()); ';
			if(mysqli_query($this->db, $querySELECT)){
			    return true;
			}
	        return false;
        }

    }
?>