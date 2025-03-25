<h1>Биографии писателей</h1>
<ul>
  <?php foreach ($writers as $key => $value) : ?>
    <a href="?page=read&id=<?= $value['id']?>">
      <li><?= "{$value['name']}&nbsp;{$value['surname']}" ?></li>
    </a>
  <?php endforeach; ?>
</ul>