<form action="forms/log.php" method="post">
  <label for="login">Логин</label>
  <input type="text" name="login" value="<?= @$_POST['login'] ?>" id="login" pattern="[A-Za-z]{5,}" title="не менее 5 латинских букв" required>
  <label for="password">Пароль</label>
  <input type="password" name="password" value="<?= @$_POST['password'] ?>" id="password" pattern="[A-Za-z]{4,}" title="не менее 4 латинских букв" required>
  <button type="submit" name="log">Войти</button>
</form>