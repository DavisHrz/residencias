<?php
    class DataBase {
        var $host;
        var $user;
        var $password;
        var $database;
        var $port;

        function __construct(){
            $this->host = "localhost";
            $this->user = "root";
            $this->password = "root";
            $this->database = "residencias";
            $this->port = "3307"; 
        }

        function connect(){
            $connection = mysqli_connect($this->host, $this->user, $this->password, $this->database, $this->port);

            if( !$connection ){
                die("Connection failed: " . mysqli_connect_error() );
            }

            return $connection;
        }
    }
?>