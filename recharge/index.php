<?php 
include '../config.php';

$title = "Utilities & Pay Bills - MultiPay Mart";
$show_back = false;
$show_location = false;
$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'Recharge & Bills',
    'show_back' => false,
    'show_home' => true,
    'show_notifications' => true,
    'show_coins' => true,
    'show_profile' => false
  ],
];

include '../components/header.php';
?>

<div class="recharge container">
  <section class="my-8">
    
  </section>

  <section class="my-8">
    <h3 class="font-medium mb-4">Recharges</h3>

    <div class="grid grid-cols-3 gap-4">
      <a href="<?= BASE_URL ?>/recharge/mobile-recharge.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-mobile-icon.avif" class="w-auto h-[60px] mb-2" alt="">
        <span class="text-[14px]">Mobile</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/credit-card.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-credit-card-icon.avif" class="w-auto h-[60px] mb-2" alt="">
        <span class="text-[14px]">Credit Card</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/dth.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-dth-icon.avif" class="w-auto h-[60px] mb-2" alt="">
        <span class="text-[14px]">DTH</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/landline.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-landline-icon.avif" class="w-auto h-[60px] mb-2" alt="">
        <span class="text-[14px]">Landline</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/recharge.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-broadband-icon.avif" class="w-auto h-[60px] mb-2" alt="">
        <span class="text-[14px]">Broadband</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/fastag.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-toll-icon.avif" class="w-auto h-[60px] mb-2" alt="">
        <span class="text-[14px]">FastTag</span>
      </a>
    </div>
  </section>

  <section class="my-8">
    <h3 class="font-medium mb-4">Recharges</h3>

    <div class="grid grid-cols-3 gap-4">
      <a href="<?= BASE_URL ?>/recharge/mobile-recharge.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-mobile-icon.avif" class="w-auto h-[60px] mb-2" alt="">
        <span class="text-[14px]">Mobile</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/recharge.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-broadband-icon.avif" class="w-auto h-[60px] mb-2" alt="">
        <span class="text-[14px]">Broadband</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/landline.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-landline-icon.avif" class="w-auto h-[60px] mb-2" alt="">
        <span class="text-[14px]">Landline</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/dth.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-dth-icon.avif" class="w-auto h-[60px] mb-2" alt="">
        <span class="text-[14px]">DTH</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/fastag.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-toll-icon.avif" class="w-auto h-[60px] mb-2" alt="">
        <span class="text-[14px]">FastTag</span>
      </a>
    </div>
  </section>
</div>

<?php include '../components/footer.php' ?>