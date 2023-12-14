<?php
    class Companie{
        var $id;
        var $name;
        var $password;
        var $db;

        function __construct(){
            $con = new DataBase();
            $this->db = $con->connect();
        }

        function login(){
            $querySELECT = 'SELECT * FROM users WHERE name="'.$this->name.'" AND password="'.md5($this->password).'"; ';
			if($queryDB = mysqli_query($this->db, $querySELECT)){
                $result = mysqli_fetch_assoc($queryDB);
                $this->id = $result["idUser"];
                $this->name = $result["name"];
			    $this->password = $result["password"];
			    return true;
			}
	        return false;
        }

    }
?>