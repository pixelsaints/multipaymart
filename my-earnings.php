<?php 
include 'config.php';

$title = "My Earnings";
$url = 'my-earnings';

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'My Earnings',
    'show_back' => false,
    'show_home' => true,
    'show_notifications' => true,
    'show_coins' => true,
    'show_profile' => false
  ]
];
include 'components/header.php';
?>

<section class="my-6">
  <div class="container">
    <div class="bal-card">
      <div class="w-full flex flex-row justify-between items-center">
        <div class="total-amount flex flex-row items-center">
          <div class="total-amount-text">Total Cashback Point</div>
          <div class="total-amount-number">540</div>
          <span class="text-[14px]">Available for Withdrawal</span>
        </div>
      </div>

      <div class="logo">
        <img src="./assets/images/logo-white.png" alt="">
      </div>
    </div>
    <div class="bal-card-button">
      <div class="flex flex-row items-center justify-around w-full px-2">
        <div class="text-center">
          <div class="text-[30px] flex items-center justify-center flex-row gap-2 font-medium">
            <img src="./assets/images/logo.png" alt="" class="w-[24px] h-[20px]">
            <span class="text-pri-600">140</span>
          </div>
          <div class="text-[16px] text-slate-500">MPay Points</div>
        </div>

        <div class="text-center">
          <div class="text-[30px] text-pri-600 font-medium">₹ 1400</div>
          <div class="text-[16px] text-slate-500">Cash Value</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-8">
  <div class="container">
    <div class="grid grid-cols-2 gap-4 items-stretch justify-between">
      <div class="flex flex-col justify-center items-center bg-white border border-slate-200 rounded p-4">
          <span class="text-[12px] text-slate-500 mt-2 mb-3">Cashback Points</span>
          <span class="flex flex-row items-center gap-2 text-[24px] mb-2 font-semibold text-green-600"><i class="fa-solid fa-coins"></i> 2,500</span>
      </div>

      <div class="flex flex-col justify-center items-center bg-white border border-slate-200 rounded p-4">
          <span class="text-[12px] text-slate-500 mt-2 mb-3">Level Cashback Points</span>
          <span class="flex flex-row items-center gap-2 text-[24px] mb-2 font-semibold text-green-600"><i class="fa-solid fa-coins"></i> 1500</span>
      </div>
      
      <div class="flex flex-col justify-center items-center bg-white border border-slate-200 rounded p-4">
          <span class="text-[12px] text-slate-500 mt-2 mb-3">Bonus Cash Points</span>
          <span class="flex flex-row items-center gap-2 text-[24px] mb-2 font-semibold text-green-600"><i class="fa-solid fa-coins"></i> 500</span>
      </div>

      <div class="flex flex-col justify-center items-center bg-white border border-slate-200 rounded p-4">
          <span class="text-[12px] text-slate-500 mt-2 mb-3">Cashback From Vendors</span>
          <span class="flex flex-row items-center gap-2 text-[24px] mb-2 font-semibold text-green-600"><i class="fa-solid fa-coins"></i> 240</span>
      </div>
    </div>
  </div>
</section>

<!-- Exciting Offers -->
<section class="my-8">
  <div class="container">
    <div class="flex flex-row items-center justify-between">
      <h3 class="font-medium">Shop & Earn Points</h3>
      <a href="#" class="more-link">View All <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="offer-cards mt-5">
      <a class="card">
        <img src="./assets/images/banners/offer-banner-1.jpg" alt="" />
      </a>
      <a class="card">
        <img src="./assets/images/banners/offer-banner-2.jpg" alt="" />
      </a>
      <a class="card">
        <img src="./assets/images/banners/offer-banner-3.jpg" alt="" />
      </a>
    </div>
  </div>
</section>


<?php include 'components/footer.php'; ?>