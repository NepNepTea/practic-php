<h1>Студенты</h1>
<a class="align-self-end me-5 btn btn-primary" href="<?= app()->route->getUrl('/add_student') ?>">Добавить студента</a>
<ol>
    <?php
    foreach ($students as $student) {
        echo '<li class="border border-primary p-2">' . $student->last_name . $student->first_name . '</li>';
    }
    ?>
</ol>