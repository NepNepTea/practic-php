<h1>Поставить оценку</h1>
<form method="post" class="d-flex flex-column border border-primary w-50 p-2">
    <input type="hidden" name="student" value="<?= $student ?>" />
    <p>Дисциплина</p>
    <select class="w-25" name="discipline">
        <?php
        foreach ($disciplines as $discipline) {
            echo '<option value=" ' . $discipline->id . ' "> ' . $discipline->name . ' </option>';
        }
        ?>
    </select>
    <p>Оценка</p>
    <select class="w-25" name="grade">
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select><br><br>
    <label>Количество часов <input type="number" name="hours"></label>
    <p>Метод контроля</p>
    <select class="w-25" name="control">
        <option value="Экзамен">Экзамен</option>
        <option value="Дифзачет">Дифзачет</option>
    </select>
    <p>Семестр</p>
    <select class="w-25" name="semester">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
    </select><br><br>
    <button type="submit" class="w-25 align-self-center">Поставить</button>
</form>