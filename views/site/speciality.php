<h1>Специальности</h1>
<ol>
    <?php
    foreach ($specialities as $speciality) {
        echo '<li>' . $speciality->name . '</li>';
    }
    ?>
</ol>