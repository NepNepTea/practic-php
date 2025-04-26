<h1>Добавить студента</h1>
<form method="post" class="d-flex flex-column border border-primary w-50 p-2">
    <input type="hidden" name="created_by" value="<?= app()->auth::user()->id ?>" />
    <label>Фамилия <input type="text" name="last_name"></label>
    <label>Имя <input type="text" name="first_name"></label>
    <label>Отчество <input type="text" name="patronym"></label>
    <p>Пол</p>
    <div class="d-flex">
        <input type="radio" id="m" name="gender" value="М">
        <label for="m">М</label>
        <input type="radio" id="f" name="gender" value="Ж">
        <label for="f">Ж</label>
    </div>
    <label>Дата рождения <input type="date" name="birth_date"></label>
    <label>Адрес прописки <input type="text" name="address"></label>
    <p>Группа</p>
    <select class="w-25" name="group">
        <?php
        foreach ($groups as $group) {
            echo '<option value=" ' . $group->id . ' "> ' . $group->name . ' </option>';
        }
        ?>
    </select>
    <button type="submit" class="w-25 align-self-center">Создать</button>
</form>