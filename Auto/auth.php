<?php
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $pass = md5($pass);

    $mysql = new mysqli('Auto', 'root', '', 'registerUser');
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();

    $adminResult = $mysql->query("SELECT * FROM `admins` WHERE `login` = '$login' AND `pass` = '$pass'");
    $admin = $adminResult->fetch_assoc();

    if(!$user && !$admin) {
        echo "Пользователь не найден!";
        exit();
    }

    if(!$admin){
        $cookieVal = $user['login'];
        setcookie('user', $cookieVal, time() + 3600, '/');
    } else {
        $cookieVal = $admin['login'];
        setcookie('admin', $cookieVal, time() + 3600, '/');
    }

    $mysql->close();
    header('Location: /');
?>