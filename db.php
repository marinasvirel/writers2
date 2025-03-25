<?php
// Подключение к базе
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';          // пароль
$name = 'personaly-writers';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);

function selectAll($link)
{
  $query = "SELECT * FROM `writers`";
  $res = mysqli_query($link, $query);
  for ($writers = []; $row = mysqli_fetch_assoc($res); $writers[] = $row);
  return $writers;
}
$writers = selectAll($link);

function del($link)
{
  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM `writers` WHERE `id`='$id'";
    mysqli_query($link, $query);
    header("Location: " . $_SERVER['PHP_SELF']);
  }
}
del($link);

function selectById($link)
{
  if ($_GET['id']) {
    $id = $_GET['id'];
    $query = "SELECT * FROM writers WHERE `id`= '$id'";
    $res = mysqli_query($link, $query);
    return mysqli_fetch_assoc($res);
  }
}
$writer = selectById($link);
