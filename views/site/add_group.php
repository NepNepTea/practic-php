<h1>Добавить группу</h1>
<form method="post" class="d-flex flex-column border border-primary w-50 p-2">
    <label>Название (номер) группы <input type="text" name="name"></label>
    <p>Специальность</p>
    <select class="w-25" name="speciality">
        <?php
        foreach ($specialities as $speciality) {
            echo '<option value=" ' . $speciality->id . ' "> ' . $speciality->name . ' </option>';
        }
        ?>
    </select>
    <button type="submit" class="w-25 align-self-center">Создать</button>
</form>