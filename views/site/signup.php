<h2>Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <label>Роль <input type="text" name="role"></label>
    <label>Имя <input type="text" name="first_name"></label>
    <label>Фамилия <input type="text" name="last_name"></label>
    <label>Логин <input type="text" name="login"></label>
    <label>Пароль <input type="password" name="password"></label>
    <button>Зарегистрироваться</button>
</form>