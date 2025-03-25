<form action="forms/create-script.php" method="post" enctype="multipart/form-data">
  <label for="name">Имя</label>
  <input type="text" name="name" id="name" value="<?= @$_POST['name']?>" placeholder="Имя" pattern="[А-Яа-яЁё]{2,}" title="не менее 2 кириллических букв" required>
  <label for="surname">Фамилия</label>
  <input type="text" name="surname" id="surname" value="<?= @$_POST['surname']?>" placeholder="Фамилия" pattern="[А-Яа-яЁё\-]{2,}" title="не менее 2 кириллических букв" required>
  <label for="patronymic">Отчество</label>
  <input type="text" name="patronymic" id="patronymic" value="<?= @$_POST['patronymic']?>" placeholder="Отчество" pattern="[А-Яа-яЁё]{2,}" title="не менее 2 кириллических букв" required>
  <label for="date-birth">Дата рождения</label>
  <input type="date" name="date-birth" id="date-birth" required>
  <label for="date-died">Дата смерти</label>
  <input type="date" name="date-died" id="date-died" required>
  <label for="file">Изображение писателя</label>
  <input type="file" name="file" id="file" accept="image/*" required>
  <label for="biography">Биография</label>
  <textarea name="biography" id="biography" required placeholder="Биография"><?= @$_POST['biography']?></textarea>
  <label for="works">Произведения</label>
  <textarea name="works" id="works" required placeholder="Произведения. Писать через ;"><?= @$_POST['works']?></textarea>
  <button name="create" type="submit">Создать</button>
</form>