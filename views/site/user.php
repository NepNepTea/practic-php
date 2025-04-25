<h1>Сотрудники</h1>
<a class="align-self-end me-5 btn btn-primary" href="<?= app()->route->getUrl('/add_user') ?>">Добавить сотрудника</a>
<ol>
    <?php
    foreach ($users as $user) {
        echo '<li class="border border-primary p-2">' . $user->last_name . $user->first_name . '</li>';
    }
    ?>
</ol>