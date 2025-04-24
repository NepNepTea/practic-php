<h1>Студенты</h1>
<ol>
    <?php
    foreach ($students as $student) {
        echo '<li>' . $student->last_name . '</li>';
    }
    ?>
</ol>