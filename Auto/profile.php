<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <title>Профиль</title>
</head>
<body>
    <?php require "blocks/header.php" ?>    
    <script>
        var currentPage = document.querySelector("#header-profile")
        currentPage.classList.add("active")
        currentPage.setAttribute("aria-current", "page")
    </script>
    <div class="container mt-4">
        <h1>Профиль</h1>
        <div class="card shadow-sm">
            <div class="card-body">
                <?php 
                    $mysql = new mysqli('Auto', 'root', '', 'registerUser');
                    $userLogin = $_COOKIE['user'];
                    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$userLogin'");
                    $user = $result->fetch_assoc();
                    $userEmail = $user['email'];
                    if(!$user){
                        $userLogin = $_COOKIE['admin'];
                        $userEmail = "Отсутствует";
                    }
                    $mysql->close();
                ?>
                <p class="card-text">Login: <?php echo $userLogin?></p>
                <p class="card-text">Email: <?php echo $userEmail?></p>

                <?php 
                    if(isset($_POST['btn-exit'])){
                        setcookie('user', $userLogin, time() - 1);
                        setcookie('admin', $userLogin, time() - 1);
                        header('Location: /');
                    }
                ?>
                
                <form method="post">
                    <button class="btn btn-danger px-5" name="btn-exit" type="submit">Выйти</button>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>