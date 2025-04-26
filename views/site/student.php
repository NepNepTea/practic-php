<h1>Студенты</h1>
<a class="align-self-end me-5 btn btn-primary" href="<?= app()->route->getUrl('/add_group') ?>">Добавить студента</a>
<ul class="w-75">
    <div class="p-2 d-flex justify-content-evenly align-items-center"><p class="p-2 w-25">ID</p><p class="p-2 w-25">Фамилия</p><p class="p-2 w-25">Имя</p><p class="p-2 w-25">Отчество</p><p class="p-2 w-25">ID группы</p></div>
    <?php
    foreach ($students as $student) {
        echo '<li class="border border-primary p-2 d-flex justify-content-evenly align-items-center"><div class="p-2 w-25"> ' . $student->id . ' </div><div class="p-2 w-25"> ' . $student->last_name . ' </div><div class="p-2 w-25"> ' . $student->first_name . '</div><div class="p-2 w-25"> ' . $student->patronym . ' </div><div class="p-2 w-25"> ' . $student->group . ' </div></li>';
    }
    ?>
</ul>