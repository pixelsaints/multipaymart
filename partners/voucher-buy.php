<?php 
include '../config.php';

$title = "Buy Cleartrip Hotel E-Gift Card";

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'E-Gift Vouchers',
    'show_back' => true,
    'show_home' => false,
    'show_notifications' => true,
    'show_coins' => false,
    'show_profile' => false,
    'show_cart' => true
  ]
];

include '../components/header.php';
?>

<section class="mt-6">
  <div class="container">

    <div class="font-medium text-lg mb-5">Order Summary</div>

    <div class="rounded-lg bg-white border border-slate-300 mb-6">
      <div class="flex flex-col justify-between gap-1 p-4 border-b border-slate-300">
        <div class="flex flex-row items-center w-full">
          <div class="text-[16px] text-slate-800 text-ellipsis overflow-hidden font-medium">Cleartrip Hotel E-Gift Card</div>
          <div class="quantity text-[13px] text-slate-700 font-medium mb-1 ml-auto px-2 py-1 bg-slate-200 rounded-md">₹ 500.00 X 2 </div>
        </div>
        <div class="price text-[18px] font-medium text-pri-600">₹ 1000.00</div>
      </div>
      <div class="flex flex-col gap-1 p-4 ">
        <div class="flex flex-row items-center w-full">
          <div class="text-[16px] text-slate-800 text-ellipsis overflow-hidden font-medium">BigBasket Gift Card</div>
          <div class="quantity text-[13px] text-slate-700 font-medium mb-1 ml-auto px-2 py-1 bg-slate-200 rounded-md">₹ 500.00 X 1 </div>
        </div>
        <div class="price text-[18px] font-medium text-pri-600">₹ 500.00</div>
      </div>
    </div>

    <div class="font-medium text-lg mb-5">Payment Methods</div>

    <!-- Payment Methods -->
    <div class="bg-white border border-slate-200 rounded-lg px-4 mb-6">

      <!-- Wallet -->
      <label class="flex items-center gap-3 py-4 cursor-pointer border-b border-slate-300">
        <input type="radio" name="payment" value="wallet" class="hidden peer" checked>

        <div class="w-10 h-10 flex items-center justify-center bg-gradient-to-b from-pri-50 to-pri-200 border border-pri-200 rounded-lg ">
          <i class="fa-solid fa-wallet text-xl bg-gradient-to-b from-pri-400 to-pri-600 bg-clip-text text-transparent"></i>
        </div>

        <div class="flex-1">
          <p class="text-[16px] font-medium text-slate-900">Wallet</p>
          <p class="text-[14px] text-gray-500">Balance: <span class="text-green-600 font-semibold">₹1,250</span></p>
        </div>
        <i class="text-[16px] fa-solid fa-circle-check text-slate-200 peer-checked:text-pri-600 scale-125"></i>
      </label>

      <!-- UPI -->
      <label class="flex items-center gap-3 py-4 cursor-pointer border-b border-slate-300">
        <input type="radio" name="payment" value="upi" class="hidden peer">

        <div class="w-10 h-10 flex items-center justify-center bg-gradient-to-b from-purple-50 to-purple-200 border border-purple-200 rounded-lg">
          <img src="../assets/images/upi-icon.svg" alt="" class="w-[22px]">
        </div>

        <div class="flex-1">
          <p class="text-[16px] font-medium text-slate-900">UPI</p>
          <p class="text-[14px] text-gray-500">Pay using any UPI app</p>
        </div>
        <i class="text-[16px] fa-solid fa-circle-check text-slate-200 peer-checked:text-pri-600 scale-125"></i>
      </label>

      <!-- Debit Card -->
      <label class="flex items-center gap-3 py-4 cursor-pointer border-b border-slate-300">
        <input type="radio" name="payment" value="debit" class="hidden peer">

        <div class="w-10 h-10 flex items-center justify-center bg-gradient-to-b from-green-50 to-green-200 border border-green-200  rounded-lg">
          <i class="text-xl fa-solid fa-credit-card bg-gradient-to-b from-green-400 to-green-600 bg-clip-text text-transparent"></i>
        </div>

        <div class="flex-1">
          <p class="text-[16px] font-medium text-slate-900">Debit Card</p>
          <p class="text-[14px] text-gray-500">Visa, Mastercard, RuPay</p>
        </div>
        <i class="text-[16px] fa-solid fa-circle-check text-slate-200 peer-checked:text-pri-600 scale-125"></i>
      </label>

      <!-- Credit Card -->
      <label class="flex items-center gap-3 py-4 cursor-pointer border-b border-slate-300">
        <input type="radio" name="payment" value="credit" class="hidden peer">

        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-b from-yellow-100 to-yellow-200">
          <i class="fa-solid fa-credit-card bg-gradient-to-b from-yellow-400 to-yellow-600 bg-clip-text text-transparent text-xl"></i>
        </div>

        <div class="flex-1">
          <p class="text-[16px] font-medium text-slate-900">Credit Card</p>
          <p class="text-[14px] text-gray-500">EMI options available</p>
        </div>
        <i class="text-[16px] fa-solid fa-circle-check text-slate-200 peer-checked:text-pri-600 scale-125"></i>
      </label>

      <!-- Net Banking -->
      <label class="flex items-center gap-3 py-4 cursor-pointer">
        <input type="radio" name="payment" value="netbanking" class="hidden peer">

        <div class="w-10 h-10 flex items-center justify-center bg-gradient-to-b from-cyan-100 to-cyan-200 rounded-lg">
          <i class="fa-solid fa-building-columns bg-gradient-to-b from-cyan-500 to-cyan-600 bg-clip-text text-transparent text-xl"></i>
        </div>

        <div class="flex-1">
          <p class="text-[16px] font-medium text-slate-900">Net Banking</p>
          <p class="text-[14px] text-gray-500">All major banks supported</p>
        </div>
        <i class="text-[16px] fa-solid fa-circle-check text-slate-200 peer-checked:text-pri-600 scale-125"></i>
      </label>

    </div>

    <!-- Promo Code -->
    <div class="mb-5">
      <div class="font-medium text-lg">Promo Code</div>
      <div class="text-sm text-slate-500">Got a promo code? Enter it here.</div>
    </div>

    <div class="bg-white p-4 rounded-lg border border-slate-200 space-y-3 mb-8">
      <div class="flex">
        <input type="text" placeholder="Enter promo code" class="flex-1 px-4 py-2 border text-sm outline-none focus:ring-0 focus:ring-blue-500 focus:border-blue-500">

        <button class="px-4 py-2 bg-slate-800 text-white text-sm font-medium hover:bg-blue-700 transition">
          Apply
        </button>
      </div>
    </div>
  </div>

  <div class="voucher-buy">
    <div class="flex flex-col items-center w-full">
      <div class="text-[16px] text-slate-500">Total Payable</div>
      <div class="voucher-buy-price">₹1,500.00</div>
    </div>
    <div class="flex flex-row items-center justify-between gap-4 mt-4">
      <a href="<?= BASE_URL . '/vouchers/voucher-buy.php' ?>" class="voucher-buy-button">Buy Now</a>
    </div>
  </div>
</section>

<?php include '../components/footer.php'; ?>