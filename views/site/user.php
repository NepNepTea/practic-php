<h1>Сотрудники</h1>
<ul class="w-75">
    <div class="p-2 d-flex justify-content-evenly align-items-center"><p class="p-2 w-25">ID</p><p class="p-2 w-25">Фамилия</p><p class="p-2 w-25">Имя</p></div>
    <?php
    foreach ($users as $user) {
        echo '<li class="border border-primary p-2 d-flex justify-content-evenly align-items-center"><div class="p-2 w-25"> ' . $user->id . ' </div><div class="p-2 w-25"> ' . $user->last_name . ' </div><div class="p-2 w-25"> ' . $user->first_name . '</div></li>';
    }
    ?>
</ul>