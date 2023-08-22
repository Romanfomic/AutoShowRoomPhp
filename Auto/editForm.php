<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <?php require "blocks/header.php" ?>
    <div class="container mt-4">
        <h1>Редактирование</h1>
        <div class="card shadow-sw">
            <div class="card-body">
                <div>Описание</div>
                <?php 
                    $textValue = "Описание, подлежащее редактированию"//take description
                ?>
                <textarea rows="4" cols="100" name="text"><?php echo htmlspecialchars($textValue); ?></textarea>
                
                <?php 
                    if(isset($_POST['btn-save'])){
                        //save description
                        header('Location: /');
                    }
                ?>

                <form method="post">
                    <button class="btn btn-success" name="btn-save" type="submit">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>