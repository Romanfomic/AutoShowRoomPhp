<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автосалон</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <?php require "blocks/header.php" ?>
        <script>
            var currentPage = document.querySelector("#header-main")
            currentPage.classList.add("active")
            currentPage.setAttribute("aria-current", "page")
        </script>
        <div class="container mt-5">
            <h3 class="mb-5">Хиты продаж</h3>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                    $cookieAdminValue = $_COOKIE['admin'];
                    for($i = 0; $i < 6; $i++): 
                ?>
                    <?php require "card.php"?>
                <?php endfor ?>
                </div>

        </div>
    </body>
</html>