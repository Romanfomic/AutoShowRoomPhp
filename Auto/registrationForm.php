<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
</head>
<body>
    <div class="container mt-4">
        <h1>Регистрация</h1>
        <form action="check.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Логин">
            <br/>
            <input type="email" class="form-control" name="email" id="email" placeholder="email">
            <br/>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль">
            <br/>
            <button class="btn btn-success" type="submit">Регистрация</button>
        </form>
    </div>
</body>
</html>