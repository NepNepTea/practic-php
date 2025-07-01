<h1>Успеваемость</h1>
<ol class="w-75">
    <div class="p-2 d-flex justify-content-evenly align-items-center"><p class="p-2 w-25">Дисциплина</p><p class="p-2 w-25">Оценка</p><p class="p-2 w-25">Количество часов</p><p class="p-2 w-25">Метод контроля</p><p class="p-2 w-25">Семестр</p></div>
    <?php
    foreach ($grades as $grade) {
        echo '<li class="border border-primary p-2"><div class="d-flex justify-content-evenly align-items-center"><div class="p-2 w-25"> ' . $grade->discipline . ' </div>
        <div class="p-2 w-25"> ' . $grade->grade . ' </div><div class="p-2 w-25"> ' . $grade->hours . ' </div>
        <div class="p-2 w-25"> ' . $grade->control . ' </div><div class="p-2 w-25"> ' . $grade->semester . ' </div></div></li>';
    }
    ?>
</ol>