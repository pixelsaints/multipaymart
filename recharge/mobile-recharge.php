<?php 
include '../config.php';

$title = "Utilities & Pay Bills - MultiPay Mart";
$show_back = false;
$show_location = false;
$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'Mobile Recharge',
    'show_back' => true,
    'show_home' => false,
    'show_notifications' => true,
    'show_coins' => true,
    'show_profile' => false
  ],
];

include '../components/header.php';
?>


<?php include '../components/footer.php' ?>