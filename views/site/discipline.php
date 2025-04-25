<h1>Дисциплины</h1>
<a class="align-self-end me-5 btn btn-primary" href="<?= app()->route->getUrl('/add_discipline') ?>">Добавить дисциплину</a>
<ol>
    <?php
    foreach ($disciplines as $discipline) {
        echo '<li class="border border-primary p-2">' . $discipline->name . '</li>';
    }
    ?>
</ol>