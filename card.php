<?php 
include 'config.php';

$title = "mPay Card";

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'mPay Card',
    'show_back' => false,
    'show_home' => true,
    'show_notifications' => true,
    'show_coins' => true,
    'show_profile' => false
  ]
];
include 'components/header.php';
?>

<div class="section my-6">
  <div class="container">
    <div class="mpay-card digital two">
      <div class="card-top">
        <span>MultiPay</span>
        
        <span class="status"><i class="fa-solid fa-circle"></i> Active</span>
      </div>
      <div class="card-bottom">
        
        <div class="card-number">4779 7604 7359 7386</div>

        <div class="card-name">
          <div>
            <p>Cardholder</p>
            <p>Mike Trilford</p>
          </div>
          <div>
            <p>Validity</p>
            <p>04/29</p>
          </div>
          <div>
            <p>CVV</p>
            <p>853</p>
          </div>
        </div>
      </div>
      <img class="brand-logo" src="./assets/images/logo-white.png" alt="">
    </div>

    <div class="mpay-card-actions grid grid-cols-4 gap-2">
      <button class="action-btn" data-target="topUp">
        <i class="fa-solid fa-plus-circle"></i>
        <span>Top Up</span>
      </button>
      <button name="toggle_block" class="action-btn" data-target="block-card">
        <i class="fa-solid fa-lock"></i>
        <span>Block Card</span>
      </button>
      <button class="action-btn" data-target="set-pin">
        <i class="fa-solid fa-key"></i>
        <span>Set PIN</span>
      </button>
      <button class="action-btn" data-target="limit-increase">
        <i class="fa-solid fa-sliders-h"></i>
        <span>Limits</span>
      </button>
    </div>
  </div>
</div>

<section class="my-8">
  <div class="container">
    <!-- Header -->
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-lg font-medium text-slate-800">Recent Transactions</h2>
      <button class="text-sm text-blue-600 hover:underline">View All</button>
    </div>

    <div class="mpay-card-transactions flex flex-col space-y-3">
      <!-- Top Up -->
      <div class="transaction flex items-center justify-between p-3">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 flex items-center justify-center bg-green-100 text-green-600 rounded-full">
            <i class="fas fa-arrow-down"></i>
          </div>
          <div>
            <p class="text-sm font-medium text-gray-800">Top Up</p>
            <p class="text-xs text-gray-500">Added funds to wallet</p>
          </div>
        </div>
        <p class="text-sm font-semibold text-green-600">+₹5,000.00</p>
      </div>

      <!-- Bills Paid -->
      <div class="transaction flex items-center justify-between p-3">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full">
            <i class="fas fa-file-invoice"></i>
          </div>
          <div>
            <p class="text-sm font-medium text-gray-800">Bills Paid</p>
            <p class="text-xs text-gray-500">Electricity bill</p>
          </div>
        </div>
        <p class="text-sm font-semibold text-red-500">-₹1,200.00</p>
      </div>

      <!-- Block Card -->
      <div class="transaction flex items-center justify-between p-3">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 flex items-center justify-center bg-red-100 text-red-600 rounded-full">
            <i class="fas fa-ban"></i>
          </div>
          <div>
            <p class="text-sm font-medium text-gray-800">Card Blocked</p>
            <p class="text-xs text-gray-500">Security action</p>
          </div>
        </div>
        <p class="text-xs text-gray-400">No amount</p>
      </div>

      <!-- Set PIN -->
      <div class="transaction flex items-center justify-between p-3">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 flex items-center justify-center bg-yellow-100 text-yellow-600 rounded-full">
            <i class="fas fa-key"></i>
          </div>
          <div>
            <p class="text-sm font-medium text-gray-800">Set PIN</p>
            <p class="text-xs text-gray-500">PIN updated successfully</p>
          </div>
        </div>
        <p class="text-xs text-gray-400">No amount</p>
      </div>

      <!-- Limits -->
      <div class="transaction flex items-center justify-between p-3">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 flex items-center justify-center bg-purple-100 text-purple-600 rounded-full">
            <i class="fas fa-sliders-h"></i>
          </div>
          <div>
            <p class="text-sm font-medium text-gray-800">Limits Updated</p>
            <p class="text-xs text-gray-500">Transaction limit changed</p>
          </div>
        </div>
        <p class="text-sm font-semibold text-pri-500">₹20,000.00</p>
      </div>
    </div>
  </div>
</section>

<div class="drawer" data-src="topUp">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">

    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-title">Top Up</div>
    <div class="drawer-content">

      <label class="flex flex-col gap-3 mb-6">
        <span class="text-sm font-medium text-gray-700"> Enter the amount</span>

        <input id="text" type="text"  autocomplete="off" class="bg-white p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded focus:placeholder-white transition">
      </label>

      <!-- Payment Methods -->
      <div class="bg-white border border-slate-200 rounded-lg px-4 mb-6 payment-methods">

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
            <img src="./assets/images/upi-icon.svg" alt="" class="w-[22px]">
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

      <!-- Actions -->
      <div class="flex gap-3 mx-auto w-[100%]">
        <button class="flex-1 bg-gray-900 text-white py-4 rounded-lg text-sm font-medium">
          Add Funds
        </button>
      </div>
    </div>
  </div>
</div>


<div class="drawer" data-src="block-card">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">

    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-content">
      <div class="text-center">
        <div class="mt-6 mb-4 text-[20px] text-slate-800 font-medium">Block Your mPay Card?</div>
        <p class="text-slate-500">Are you sure you want to block your mPay card ending in •••• 4821?. You can unblock your card anytime from the app.</p>

         <!-- Info -->
        <div class="bg-orange-50 p-3 rounded-lg text-sm text-gray-600 gap-3 mb-6">
          <p class="mb-0">Transactions will be paused immediately.</p>
          <p class="mb-0">Your money remains safe.</p>
          <p class="mb-0">Unblock your card anytime.</p>
        </div>

        <!-- PIN Input -->
        <div class="my-8">
          <label class="text-sm font-medium text-slate-800 mb-2 block">
            Enter MPIN
          </label>

          <div class="flex justify-between gap-2 w-[70%] mx-auto">
            <input type="password" maxlength="1" class="pin-input w-12 h-12 border border-slate-300 rounded-lg text-center text-lg">
            <input type="password" maxlength="1" class="pin-input w-12 h-12 border border-slate-300 rounded-lg text-center text-lg focus:bg-white active:bg-white">
            <input type="password" maxlength="1" class="pin-input w-12 h-12 border border-slate-300 rounded-lg text-center text-lg focus:bg-white active:bg-white">
            <input type="password" maxlength="1" class="pin-input w-12 h-12 border border-slate-300 rounded-lg text-center text-lg focus:bg-white active:bg-white">
          </div>
        </div>

        <!-- Actions -->
        <div class="flex gap-3 mb-8">
          <button class="flex-1 border border-gray-300 py-2 rounded-lg text-sm font-medium">
            Cancel
          </button>
          <button class="flex-1 bg-gray-900 text-white py-4 rounded-lg text-sm font-medium">
            Block Card
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="drawer" data-src="set-pin">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">
    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-title">Set Pin</div>

    <div class="drawer-content">
      <!-- PIN Input -->
      <div class="my-8 mx-auto w-[80%]">
        <label class="text-sm font-medium text-slate-800 mb-4 block text-center">Enter MPIN</label>

        <div class="flex justify-between gap-2 mx-auto mb-6">
          <input type="password" maxlength="1" class="pin-input w-12 h-12 border border-slate-300 rounded-lg text-center text-lg">
          <input type="password" maxlength="1" class="pin-input w-12 h-12 border border-slate-300 rounded-lg text-center text-lg">
          <input type="password" maxlength="1" class="pin-input w-12 h-12 border border-slate-300 rounded-lg text-center text-lg">
          <input type="password" maxlength="1" class="pin-input w-12 h-12 border border-slate-300 rounded-lg text-center text-lg">
        </div>

        <label class="text-sm font-medium text-slate-800 mb-4 block text-center">Confirm MPIN</label>

        <div class="flex justify-between gap-2 mx-auto">
          <input type="password" maxlength="1" class="pin-input w-12 h-12 border border-slate-300 rounded-lg text-center text-lg">
          <input type="password" maxlength="1" class="pin-input w-12 h-12 border border-slate-300 rounded-lg text-center text-lg">
          <input type="password" maxlength="1" class="pin-input w-12 h-12 border border-slate-300 rounded-lg text-center text-lg">
          <input type="password" maxlength="1" class="pin-input w-12 h-12 border border-slate-300 rounded-lg text-center text-lg">
        </div>
      </div>

      <!-- Actions -->
      <div class="flex gap-3 mx-auto w-[80%]">
        <button class="flex-1 bg-gray-900 text-white py-4 rounded-lg text-sm font-medium">
          Set Pin
        </button>
      </div>
    </div>
  </div>
</div>

<div class="drawer" data-src="limit-increase">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">

    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-title">Card Limits</div>

    <div class="drawer-content">
      <div class="text-[18px] mb-6">Manage your daily spend limits</div>

      <div class="space-y-6">
        <!-- Online Spend -->
        <div>
          <div class="text-[16px] text-gray-600 mb-2">
            Online Spend: <span class="value text-green-600 font-semibold">1000</span>
          </div>
          <input type="range" min="1000" max="50000" value="1000" class="range w-full h-2 rounded-lg appearance-none cursor-pointer bg-gray-200">
        </div>

        <!-- ATM Withdrawal -->
        <div>
          <div class="text-[16px] text-gray-600 mb-2">
            ATM Withdrawal: <span class="value text-green-600 font-semibold">1000</span>
          </div>
          <input type="range" min="1000" max="20000" value="1000" class="range w-full h-2 rounded-lg appearance-none cursor-pointer bg-gray-200">
        </div>
      </div>

      <!-- Actions -->
        <div class="flex gap-3 mt-12">
          <button class="flex-1 bg-gray-900 text-white py-4 rounded-lg text-sm font-medium">
            Update Limits
          </button>
        </div>
    </div>
  </div>
</div>

<script>
  const ranges = document.querySelectorAll('.range');

  ranges.forEach(range => {
    const valueEl = range.parentElement.querySelector('.value');

    function updateSlider() {
      const val = (range.value - range.min) / (range.max - range.min) * 100;
      range.style.background = `linear-gradient(to right, #268aea ${val}%, #e5e7eb ${val}%)`;
      // valueEl.textContent = range.value;
      valueEl.textContent = `₹${Number(range.value).toLocaleString('en-IN')}`;
    }

    range.addEventListener('input', updateSlider);
    
    updateSlider();
  });
</script>

<?php include 'components/footer.php'; ?>