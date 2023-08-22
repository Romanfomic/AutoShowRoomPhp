<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
</head>
<body>
    <div class="container mt-4">
        <h1>Авторизация</h1>
        <form action="auth.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Логин">
            <br/>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль">
            <br/>
            <button class="btn btn-success px-5" type="submit">Вход</button>
            <a href="/registrationForm.php">Зарегистрироваться</a>
        </form>
    </div>
</body>
</html>