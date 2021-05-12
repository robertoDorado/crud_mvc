<?php
class controller {

    public function loadView($viewName, $viewData = array()){
        require_once "app/view/" . $viewName . ".php";
    }

    public function loadHeader(){
        require_once "app/view/header.php";
    }

    public function loadFooter(){
        require_once "app/view/footer.php";
    }
}