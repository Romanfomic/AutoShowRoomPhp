<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
</head>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span class="fs-4">Black Lightning</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" id="header-main" class="nav-link">Главная</a></li>
        <li class="nav-item"><a href="/cars.php" id="header-cars" class="nav-link">Автомобили</a></li>
        <li class="nav-item"><a href="/contacts.php" id="header-contacts" class="nav-link">Контакты</a></li>
        <?php
            $cookieValue = $_COOKIE['user'];
            $cookieAdminValue = $_COOKIE['admin'];
            if($cookieValue == '' && $cookieAdminValue == ''):
        ?>
        <li class="nav-item"><a href="/loginForm.php" class="nav-link">Войти</a></li>
        <?php 
            else:
        ?>
        <li class="nav-item"><a href="/profile.php" id="header-profile" class="nav-link">Профиль</a></li>
        <?php
            endif;
        ?>
    </ul>
    </header>
</div>