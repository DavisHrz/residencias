<?php
    class Assessor{
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

        function get_my_applications(){
            $applications = array();
            $querySELECT = 'SELECT * FROM application WHERE idAlumno="'.$this->id.'";';
			if( $queryDB = mysqli_query($this->db, $querySELECT )){
                while ( $result = mysqli_fetch_assoc($queryDB) ){
                    $application = array();
                    array_push($application, $result["idApplication"]);
                    array_push($application, $result["name"]);
                    array_push($application, $result["data"]);

                    array_push($applications, $application);
                }
			}
	        return $applications;
        }

    }
?>