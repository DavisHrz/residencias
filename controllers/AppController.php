<?php

class AppController {
  
    
    function index($parametros){
        require_once "./views/view_helloWorld.php";
        require_once "./views/view_helloWorld2.php";
    }

    function helloworld(){
        require_once "./views/view_helloWorld2.php";
    }
    
    
}

?>
