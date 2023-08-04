<?php
class AuthController
{
    public function login()
    {
        $loginPage = $_SERVER['DOCUMENT_ROOT'] . '/testeAC/application/views/Login.php';
        include $loginPage;    
    }

    public function authenticate()
    {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        if (!empty($username) && !empty($password)) {
            $_SESSION['user'] = $username;
            header('Location: index.php');
            exit();
        }
    }
}
