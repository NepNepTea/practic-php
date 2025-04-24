<h1>Дисциплины</h1>
<a href="<?= app()->route->getUrl('/add_discipline') ?>">Добавить дисциплину</a>
<ol>
    <?php
    foreach ($disciplines as $discipline) {
        echo '<li>' . $discipline->name . '</li>';
    }
    ?>
</ol>