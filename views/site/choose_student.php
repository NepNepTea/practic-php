<h1>Выберите студента</h1>
<ol class="w-75">
    <div class="p-2 d-flex justify-content-evenly align-items-center"><p class="p-2 w-25">Фамилия</p><p class="p-2 w-25">Имя</p><p class="p-2 w-25">Отчество</p></div>
    <?php
    foreach ($students as $student) {
        echo '<li class="border border-primary p-2"><div class="d-flex justify-content-evenly align-items-center"><div class="p-2 w-25"> ' . $student->last_name . ' </div><div class="p-2 w-25"> ' . $student->first_name . '</div><div class="p-2 w-25"> ' . $student->patronym . ' </div></div><a href="' . app()->route->getUrl('/choose_grade') . '/?student_id=' . $student->id . '">Поставить оценку</a></li>';
    }
    ?>
</ol>