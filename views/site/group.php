<h1>Группы</h1>
<ol>
    <?php
    foreach ($groups as $group) {
        echo '<li>' . $group->name . '</li>';
    }
    ?>
</ol>