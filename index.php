<?php
spl_autoload_register(function($class){
    if(file_exists("app/core/".$class.".php")){
        require_once "app/core/".$class.".php";
    }
    if(file_exists("app/model/".$class.".php")){
        require_once "app/model/".$class.".php";
    }
    if(file_exists("app/controller/".$class.".php")){
        require_once "app/controller/".$class.".php";
    }
    if(file_exists("app/view/".$class.".php")){
        require_once "app/view/".$class.".php";
    }
    if(file_exists("app/config/".$class.".php")){
        require_once "app/config/".$class.".php";
    }
});
define("BASE_URL", "http://localhost/projetos/crud_mvc");
Conection::conectionMethod();
Core::start();