<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Деканат</title>
    <script defer src="./assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">
</head>
<body>
<header class="mb-3">
    <nav class="d-flex p-2 justify-content-evenly bg-info-subtle border border-info">
        <a href="<?= app()->route->getUrl('/disciplines') ?>">Дисциплины</a>
        <a href="<?= app()->route->getUrl('/users') ?>">Сотрудники</a>
        <a href="<?= app()->route->getUrl('/groups') ?>">Группы</a>
        <a href="<?= app()->route->getUrl('/students') ?>">Студенты</a>
        <?php
        if (!app()->auth::check()):
            ?>
            <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
            <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
        <?php
        else:
            ?>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        <?php
        endif;
        ?>
    </nav>
</header>
<main class="d-flex align-items-center flex-column">
    <?= $content ?? '' ?>
</main>

</body>
</html>