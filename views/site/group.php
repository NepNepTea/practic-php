<h1>Группы</h1>
<a class="align-self-end me-5 btn btn-primary" href="<?= app()->route->getUrl('/add_group') ?>">Добавить группу</a>
<ol>
    <?php
    foreach ($groups as $group) {
        echo '<li class="border border-primary p-2">' . $group->name . '</li>';
    }
    ?>
</ol>