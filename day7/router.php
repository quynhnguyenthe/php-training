<?php
include_once 'Controller/login.php';
use Controller\Login;
$url = $_REQUEST['url'] ?? '';
$method = $_SERVER['REQUEST_METHOD'];
switch ($url) {
    case 'login':
        if ($method == 'GET')
            include_once 'View/login.php';
        if ($method == 'POST') {
            $login = new Login();
            $login->checkLogin();
        }
        break;
    case 'list-user':
        if ($method == 'GET')
            include_once 'View/list-user.php';
        break;
    default:
        include_once 'View/login.php';
}
