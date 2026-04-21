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
      <a href="<?= BASE_URL ?>/recharge/recharge-type.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-mobile-icon.avif" class="w-auto h-[80px] mb-2" alt="">
        <span class="text-[14px]">Mobile</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/recharge-type.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-broadband-icon.avif" class="w-auto h-[80px] mb-2" alt="">
        <span class="text-[14px]">Broadband</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/recharge-type.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-dth-icon.avif" class="w-auto h-[80px] mb-2" alt="">
        <span class="text-[14px]">DTH</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/recharge-type.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-metro.png" class="w-auto h-[80px] mb-2" alt="">
        <span class="text-[14px]">Metro</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/recharge-type.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-toll-icon.avif" class="w-auto h-[80px] mb-2" alt="">
        <span class="text-[14px]">FastTag</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/recharge-type.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-landline-icon.avif" class="w-auto h-[80px] mb-2" alt="">
        <span class="text-[14px]">Lanline</span>
      </a>
    </div>
  </section>

  <section class="my-8">
    <h3 class="font-medium mb-4">Utilities</h3>

    <div class="grid grid-cols-3 gap-4">
      <a href="<?= BASE_URL ?>/recharge/recharge-type.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-elec-icon.avif" class="w-auto h-[80px] mb-2" alt="">
        <span class="text-[14px]">Electricity</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/recharge-type.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-water-icon.avif" class="w-auto h-[80px] mb-2" alt="">
        <span class="text-[14px]">Water Bill</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/recharge-type.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-gas-icon.avif" class="w-auto h-[80px] mb-2" alt="">
        <span class="text-[14px]">LPG Gas</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/recharge-type.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-png-gas.png" class="w-auto h-[80px] mb-2" alt="">
        <span class="text-[14px]">PNG Gas</span>
      </a>
    </div>
  </section>

  <section class="my-8">
    <h3 class="font-medium mb-4">Finance & Taxes</h3>

    <div class="grid grid-cols-3 gap-4">
       <a href="<?= BASE_URL ?>/recharge/recharge-type.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-credit-card-icon.avif" class="w-auto h-[80px] mb-2" alt="">
        <span class="text-[14px]">Credit Cards</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/recharge-type.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-loans.png" class="w-auto h-[80px] mb-2" alt="">
        <span class="text-[14px]">Loans</span>
      </a>
      <a href="<?= BASE_URL ?>/recharge/recharge-type.php" class="bg-blue-100 rounded-lg border border-blue-200 flex flex-col items-center justify-between py-3">
        <img src="../assets/images/icons/utils-insurance.png" class="w-auto h-[80px] mb-2" alt="">
        <span class="text-[14px]">Insurance</span>
      </a>
    </div>
  </section>
</div>

<?php include '../components/footer.php' ?>