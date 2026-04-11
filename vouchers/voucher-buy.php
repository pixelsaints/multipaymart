<?php 
include '../config.php';

$title = "Buy Cleartrip Hotel E-Gift Card";

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'E-Gift Vouchers',
    'show_back' => true,
    'show_home' => false,
    'show_notifications' => true,
    'show_coins' => true,
    'show_profile' => false
  ]
];

include '../components/header.php';
?>

<section class="mt-6">
  <div class="container">

    <div class="font-medium text-lg mb-5">Order Summary</div>

    <div class="rounded-lg bg-white border border-slate-300 mb-6">
      <div class="flex flex-row items-center justify-between gap-5 p-4 border-b border-slate-300">
        <div class="image">
          <img class="object-cover w-[72px] h-[80px]" src="../assets/images/vouchers/07_cleartrip-hotel.png" alt="">
        </div>
        <div class="content w-3/4">
          <div class="text-[18px] mb-1 font-medium">Cleartrip Hotel E-Gift Card</div>
          <div class="quantity text-[13px] text-slate-500 font-medium mb-1">₹ 500.00 X 2 Cards</div>
          <div class="price text-[16px] font-medium text-pri-600">₹ 1000.00</div>
        </div>
      </div>
      <div class="flex flex-row items-center justify-between gap-5 p-4 ">
        <div class="image">
          <img class="object-cover w-[72px] h-[80px]" src="../assets/images/vouchers/02_bigbasket.png" alt="">
        </div>
        <div class="content w-3/4">
          <div class="text-[18px] mb-1 font-medium">BigBasket Gift Card</div>
          <div class="quantity text-[13px] text-slate-500 font-medium mb-1">₹ 500.00 X 1 Card</div>
          <div class="price text-[16px] font-medium text-pri-600">₹ 500.00</div>
        </div>
      </div>
    </div>

    <div class="font-medium text-lg mb-5">Payment Methods</div>

    <div class="bg-white rounded-2xl shadow px-4 mb-6">

      <!-- Wallet -->
      <label class="flex items-center gap-3 py-4 cursor-pointer border-b border-slate-300">
        <input type="radio" name="payment" value="wallet" class="hidden peer" checked>

        <div class="w-10 h-10 flex items-center justify-center bg-blue-100 rounded-lg">
          <i class="fa-solid fa-wallet text-blue-600"></i>
        </div>

        <div class="flex-1">
          <p class="text-[16px] font-medium">Wallet</p>
          <p class="text-[13px] text-gray-500">Balance: ₹1,250</p>
        </div>
        <i class="text-[16px] fa-solid fa-circle-check text-slate-200 peer-checked:text-pri-600 scale-125"></i>
      </label>

      <!-- UPI -->
      <label class="flex items-center gap-3 py-4 cursor-pointer border-b border-slate-300">
        <input type="radio" name="payment" value="upi" class="hidden peer">

        <div class="w-10 h-10 flex items-center justify-center bg-purple-100 rounded-lg">
          <i class="fa-brands fa-google-pay text-purple-600"></i>
        </div>

        <div class="flex-1">
          <p class="text-[16px] font-medium">UPI</p>
          <p class="text-[13px] text-gray-500">Pay using any UPI app</p>
        </div>
        <i class="text-[16px] fa-solid fa-circle-check text-slate-200 peer-checked:text-pri-600 scale-125"></i>
      </label>

      <!-- Debit Card -->
      <label class="flex items-center gap-3 py-4 cursor-pointer border-b border-slate-300">
        <input type="radio" name="payment" value="debit" class="hidden peer">

        <div class="w-10 h-10 flex items-center justify-center bg-green-100 rounded-lg">
          <i class="fa-solid fa-credit-card text-green-600"></i>
        </div>

        <div class="flex-1">
          <p class="text-[16px] font-medium">Debit Card</p>
          <p class="text-[13px] text-gray-500">Visa, Mastercard, RuPay</p>
        </div>
        <i class="text-[16px] fa-solid fa-circle-check text-slate-200 peer-checked:text-pri-600 scale-125"></i>
      </label>

      <!-- Credit Card -->
      <label class="flex items-center gap-3 py-4 cursor-pointer border-b border-slate-300">
        <input type="radio" name="payment" value="credit" class="hidden peer">

        <div class="w-10 h-10 flex items-center justify-center bg-yellow-100 rounded-lg">
          <i class="fa-solid fa-credit-card text-yellow-600"></i>
        </div>

        <div class="flex-1">
          <p class="text-[16px] font-medium">Credit Card</p>
          <p class="text-[13px] text-gray-500">EMI options available</p>
        </div>
        <i class="text-[16px] fa-solid fa-circle-check text-slate-200 peer-checked:text-pri-600 scale-125"></i>
      </label>

      <!-- Net Banking -->
      <label class="flex items-center gap-3 py-4 cursor-pointer">
        <input type="radio" name="payment" value="netbanking" class="hidden peer">

        <div class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-lg">
          <i class="fa-solid fa-building-columns text-gray-700"></i>
        </div>

        <div class="flex-1">
          <p class="text-[16px] font-medium">Net Banking</p>
          <p class="text-[13px] text-gray-500">All major banks supported</p>
        </div>
        <i class="text-[16px] fa-solid fa-circle-check text-slate-200 peer-checked:text-pri-600 scale-125"></i>
      </label>

    </div>

    <div class="mb-5">
      <div class="font-medium text-lg">Promo Code</div>
      <div class="text-sm text-slate-500">Got a promo code? Enter it here.</div>
    </div>

    <div class="bg-white p-4 rounded-lg shadow space-y-3 mb-8">
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
      <div class="voucher-buy-price">₹500.00</div>
    </div>
    <div class="flex flex-row items-center justify-between gap-4 mt-4">
      <a href="<?= BASE_URL . '/vouchers/voucher-buy.php' ?>" class="voucher-buy-button">Buy Now</a>
    </div>
  </div>
</section>

<?php include '../components/footer.php'; ?>