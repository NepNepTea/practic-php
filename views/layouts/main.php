<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Деканат</title>
</head>
<body>
<header>
    <nav>
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
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>