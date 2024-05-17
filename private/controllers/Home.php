<?php 

class Home extends Controller{

    function index(){

        $URL = $this->getURL();

        $this->view(strtolower($URL[0]));
    }

    private function getURL(){
        $url = isset($_GET['url'])?$_GET['url']: "home";
        return explode("/",filter_var(trim($url,"/")),FILTER_SANITIZE_URL);
    }
}
