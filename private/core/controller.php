<?php 

class Controller{

   public function view($view, $data = array()){

        extract($data);

        if(file_exists("../private/views/".$view.".view.php")){

           require ("../private/views/".$view.".view.php");
           
        }else{
            
            require ("../private/views/404.view.php");
        }
           
    }
}



 //return file_get_contents("../private/views/".$view.".view.php");
 //return file_get_contents("../private/views/404.view.php");