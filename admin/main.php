<a href="?page=create">Добавить</a>
<ul>
  <?php foreach ($writers as $key => $value) : ?>
    <li>
      <p><?= "{$value['name']}&nbsp;{$value['surname']}" ?></p>
      <a href="?page=read&id=<?=$value['id'] ?>">смотреть</a>
      <a href="?page=update&id=<?=$value['id'] ?>">редактировать</a>
      <a href="?delete=<?=$value['id'] ?>">удалить</a>
    </li>
  <?php endforeach; ?>
</ul>