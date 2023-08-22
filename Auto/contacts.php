<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
</head>
<body>
    <?php require "blocks/header.php"?>
    <script>
        var currentPage = document.querySelector("#header-contacts")
        currentPage.classList.add("active")
        currentPage.setAttribute("aria-current", "page")
    </script>
</body>
</html>