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

<div class="container">
  
  <section class="my-8 space-y-6">

    <div class="mb-8">
      <span class="text-[14px] mb-4 block">Account Type</span>
      <div class="radio-button flex flex-row flex-wrap gap-x-3 gap-y-3">
        <label>
          <input type="radio" name="denomination_type" value="self" class="hidden" checked>
          <div class="text-[14px]">Postpaid</div>
        </label>
        <label>
          <input type="radio" name="denomination_type" value="self" class="hidden">
          <div class="text-[14px]">Prepaid</div>
        </label>
      </div>
    </div>

    <div>
      <label for="account-number" class="flex flex-col">
        <span class="text-[14px] text-slate-500 mb-2">Account/Mobile Number</span>
        <input id="account-number" type="text" class="p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded focus:placeholder-white transition">
      </label>
    </div>

    <div>
      <label for="service-provider" class="flex flex-col relative">
        <span class="text-[14px] text-slate-500 mb-2">Service Provider</span>
        <div class=" relative w-full">
          <input id="service-provider" type="text" class="w-full p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded focus:placeholder-white transition">
          <span class="absolute top-4 right-3 flex items-center text-slate-400">
            <i class="fa-solid fa-magnifying-glass"></i>
          </span>
        </div>
      </label>
    </div>

    <div>
      <label for="amount" class="flex flex-col">
        <span class="text-[14px] text-slate-500 mb-2">Amount</span>
        <div class="flex flex-row w-full">
          <input id="amount" class="p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded-tl rounded-bl w-[65%] ring-0 outline-0"/>
          <button class="text-[15px] bg-slate-100 p-3 border border-slate-300 border-l-0 rounded-tr rounded-br w-[35%]">Browse Plans</button>
        </div>
      </label>
    </div>

    <div>
      <a href="<?= BASE_URL . '/recharge/recharge-pay.php' ?>" class="text-center flex w-full items-center justify-center mt-8 p-3 bg-pri-500 rounded text-[18px] font-medium text-white">Pay Now</a>
    </div>

  </section>

</div>

<?php include '../components/footer.php' ?>