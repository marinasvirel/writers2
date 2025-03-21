<?php
session_start();

$desc;
$title;

$page = isset($_GET['page']) ? $_GET['page'] : 'main';
$path = "pages/$page.php";


if (file_exists($path)) {
  $content = $path;
} else {
  $title = "Нет такой страницы";
  $content = "pages/404.php";
}

require_once "elems/header.php";
require_once $content;
require_once "elems/footer.php";
