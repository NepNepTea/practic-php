<?php
foreach ($users as $user) {
    echo '
    <h1>Сотрудник ' . $user->last_name . ' ' . $user->first_name . '</h1>
    <p>Роль: ' . $user->role . ' </p>
    <p>Логин: ' . $user->login . ' </p>
    ';
}
?>