<h1>Сотрудники</h1>
<ol>
    <?php
    foreach ($users as $user) {
        echo '<li>' . $user->first_name . '</li>';
    }
    ?>
</ol>