<?php

define('BASE_URL', 'http://multipaymart.local');

$cssPath = $_SERVER['DOCUMENT_ROOT'] . '/assets/css/style.css';
$cssVersion = file_exists($cssPath) ? filemtime($cssPath) : time();