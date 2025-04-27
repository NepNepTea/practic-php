<h1>Сотрудники</h1>

<ol class="w-50">
    <div class="p-2 d-flex justify-content-evenly align-items-center"><p class="p-2 w-25">ID</p><p class="p-2 w-25">Логин</p><p class="p-2 w-25">Фамилия</p></div>
    <?php
    foreach ($users as $user) {
        echo '<li class="border border-primary p-2"><div class="d-flex justify-content-evenly align-items-center"><div class="p-2 w-25"> ' . $user->id . ' </div><div class="p-2 w-25"> ' . $user->login . '</div><div class="p-2 w-25"> ' . $user->last_name . '</div><a href="' . app()->route->getUrl('/user_info') . '/?id=' . $user->id . '">Подробнее</a></li>';
    }
    ?>
</ol>