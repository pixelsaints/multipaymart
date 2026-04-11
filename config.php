<?php

define('BASE_URL', 
  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') .
  '://' . $_SERVER['HTTP_HOST'] . 
  '/multipaymart'
);

$cssPath = $_SERVER['DOCUMENT_ROOT'] . BASE_URL . '/assets/css/style.css';
$cssVersion = file_exists($cssPath) ? filemtime($cssPath) : time();