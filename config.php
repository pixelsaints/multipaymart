<?php

if ($_SERVER['HTTP_HOST'] === 'multipaymart.local') {
  define('BASE_URL', 'http://multipaymart.local');
} else {
  define('BASE_URL', 'https://nothingmatters.in/multipaymart');
}

$cssPath = $_SERVER['DOCUMENT_ROOT'] . '/multipaymart/assets/css/style.css';
$cssVersion = file_exists($cssPath) ? filemtime($cssPath) : time();