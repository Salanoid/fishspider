<?php
    class HomeController {
        public function index() {
            require('./views/home.php');
        }
    }
    
    $controller = new HomeController;
    $controller->index();
