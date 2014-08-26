<?php
$title = basename($_SERVER['SCRIPT_NAME'], '.php');
$title = str_replace('_', ' ', $title);
if ($title == 'index') {
  $title = 'Top Marketing Agency | Mobile & Web Design';
  }
$title = ucwords($title);
?>