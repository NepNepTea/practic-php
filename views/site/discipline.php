<h1>Дисциплины</h1>
<a class="align-self-end me-5 btn btn-primary" href="<?= app()->route->getUrl('/add_discipline') ?>">Добавить дисциплину</a>
<ol class="w-50">
    <div class="p-2 d-flex justify-content-evenly align-items-center"><p class="p-2 w-25">Название</p></div>
    <?php
    foreach ($disciplines as $discipline) {
        echo '<li class="border border-primary p-2"><div class="d-flex justify-content-evenly align-items-center"><div class="p-2 w-25"> ' . $discipline->name . ' </div></div></li>';
    }
    ?>
</ol>