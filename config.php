<?php

define('BASE_URL', '/multipaymart');

$cssPath = $_SERVER['DOCUMENT_ROOT'] . BASE_URL . '/assets/css/style.css';
$cssVersion = file_exists($cssPath) ? filemtime($cssPath) : time();