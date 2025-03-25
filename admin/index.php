<?php
session_start();
require_once "../db.php";

$desc;
$title;

$page = isset($_GET['page']) ? $_GET['page'] : 'main';
$path = "$page.php";


if (file_exists($path)) {
  $content = $path;
} else {
  $title = "Нет такой страницы";
  $content = $_SERVER['DOCUMENT_ROOT'] . "/pages/404.php";
  header('HTTP/1.0 404 Not Found');
}

require_once "../elems/header.php";
require_once $content;
require_once "../elems/footer.php";
