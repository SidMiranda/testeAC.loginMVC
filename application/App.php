<?php
class App
{
    public function run()
    {
      session_start();

      if(isset($_GET['logout']) == 'user'){
        session_destroy();
        header('Location: index.php');
        exit();
      }
      if (isset($_SESSION['user'])) {
        require_once "controllers/HomeController.php";
        $controllerInstance = new HomeController();
        $controllerInstance->index();
        exit();
      } 
      
      if(isset($_GET['login']) == 'user'){
        require_once "controllers/AuthController.php";
        $controllerInstance = new AuthController();
        $controllerInstance->authenticate();
      }

      require_once "controllers/AuthController.php";
        $controllerInstance = new AuthController();
        $controllerInstance->login();
      }
}
