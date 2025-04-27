<?php
foreach ($students as $student) {
    echo '
    <h1>Студент ' . $student->last_name . ' ' . $student->first_name . ' ' . $student->patronym . '</h1>
    <p>Пол: ' . $student->gender . ' </p>
    <p>Дата рождения: ' . $student->birth_date . ' </p>
    <p>Адрес прописки: ' . $student->address . ' </p>
    <p>ID добавившего сотрудника: ' . $student->created_by . ' </p>
    <p>ID группы: ' . $student->group . ' </p>
    ';
}
?>