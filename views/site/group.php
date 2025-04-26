<h1>Группы</h1>
<a class="align-self-end me-5 btn btn-primary" href="<?= app()->route->getUrl('/add_group') ?>">Добавить группу</a>
<ol class="w-50">
    <div class="p-2 d-flex justify-content-evenly align-items-center"><p class="p-2 w-25">Название</p><p class="p-2 w-25">ID Специальности</p></div>
    <?php
    foreach ($groups as $group) {
        echo '<li class="border border-primary p-2"><div class="d-flex justify-content-evenly align-items-center"><div class="p-2 w-25"> ' . $group->name . ' </div><div class="p-2 w-25"> ' . $group->speciality . '</div></div></li>';
    }
    ?>
</ol>