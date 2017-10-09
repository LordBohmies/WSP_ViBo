<?php
header("Content-type: text/html; charset=utf-8");
if (empty($_GET['name'])) {
  echo '<h1>Hej på dig!</h1>';
} else {
  echo '<h1>Haj ', filter_input('INPUT_GET', 'name', FILTER_SANITIZE_SPECIAL_CHARS), '</h1>';
}
