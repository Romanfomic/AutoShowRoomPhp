<?php
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];

    if(strlen($login) < 5 || strlen($login) > 90){
        echo "Недопустимая длина логина";
        exit;
    }  else if(strlen($pass) < 5){
        echo "Недопустимая длина пароля";
        exit;
    }


    $pass = md5($pass);

    $mysql = new mysqli('Auto', 'root', '', 'registerUser');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `email`) VALUES('$login','$pass','$email')");
    $mysql->close();

    header('Location: /');
?>