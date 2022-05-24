<?php
class Controller {
    public function __construct() {

    }

    public function invoke() {
        if(isset($_GET['controller'])){
            $controllerClass = ucfirst($_GET['controller']); //homeController -> HomeController
            require_once "./Controller/$controllerClass.php";
            $controller = new $controllerClass;
            $controller->invoke();
        }
    }
}