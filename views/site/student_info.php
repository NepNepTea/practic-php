<h1>Студент </h1>
<ol>
    <?php
    foreach ($students as $student) {
        echo '<li>' . $student->last_name . '</li>';
    }
    ?>
</ol>