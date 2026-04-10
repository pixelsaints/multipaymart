<?php 
include 'config.php';

$title = "Scan QR Code";
$url = 'scan';
$topBar_style = [
  'page-header' => [
  'top-bar-title' => 'Scan QR Code',
  'show_back' => false,
  'show_home' => true,
  'show_notifications' => true,
  'show_coins' => true,
  'show_profile' => false
  ]
];
include 'components/header.php';
?>

<div class="flex flex-col min-h-[90vh] items-center justify-between bg-slate-900 -mb-[80px] pb-[120px]">
  <h3 class="text-[20px] text-white pt-8">Scan your QR Codes</h3>

  <img src="./assets/images/qr-frame.png" alt="">

  <a href="#" class="btn btn-scan">
    <i class="fa-solid fa-qrcode"></i> Scan QR Code
  </a>
</div>

<?php include 'components/footer.php'; ?>