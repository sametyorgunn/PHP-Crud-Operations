<?php
include 'Controller/ConnectionString.php';
include 'Controller/Func.php';
$url = $_SERVER['REQUEST_URI'];
$menu = explode('/',$url);

include 'View/Layout/Header.php';

if ($menu[2]!='') {
    if (function_exists($menu[2])) {
        $menu[2]();
    } else {
        Login(); // Fonksiyon Bulunamadı
    }
} else {
    Login(); // Karşılama Ekranı
}

include 'View/Layout/Footer.php';