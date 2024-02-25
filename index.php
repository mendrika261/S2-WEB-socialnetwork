<?php

session_start();
include 'function/db_connect.php';
include 'function/global.php';

include 'global/header.php';

if(isset($_GET['module'], $_GET['page'])) {
    $page = "module/".$_GET['module']."/".$_GET['page'].".php";

    if($_GET['page'] != 'login' and $_GET['page'] and 'logout' and $_GET['page'] != 'sign-in') {
        include 'global/nav.php';
        include 'global/left-main.php';
    }

    if(is_file($page))
        include $page;
    else header('Location:index.php?module=home&page=main');

} else header('Location:index.php?module=home&page=main');

include 'global/footer.php';
