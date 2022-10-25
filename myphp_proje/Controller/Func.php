<?php
function Cikis()
{
    session_destroy();
    header("Location: Login");
}
include 'View/LoginPage.php';
include 'View/HomePage.php';
include 'View/UpdatePage.php';
include 'View/ListPage.php';
