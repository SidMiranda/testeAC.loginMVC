<?php

class HomeController
{
    public function index()
    {
        $homePage = $_SERVER['DOCUMENT_ROOT'] . '/testeAC/application/views/Home.php';
        include $homePage;    
    }
}
