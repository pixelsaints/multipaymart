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
    </div>

    <div class="mpay-card-actions grid grid-cols-4 gap-2">
      <div class="action-btn" onclick="openModal('topupModal')">
        <i class="fa-solid fa-plus-circle"></i>
        <span>Top Up</span>
      </div>
      <form method="POST" style="display: contents;">
        <button type="submit" name="toggle_block" class="action-btn">
          <i class="fa-solid fa-lock"></i>
          <span>Block Card</span>
        </button>
      </form>
      <div class="action-btn" onclick="openModal('pinModal')">
        <i class="fa-solid fa-key"></i>
        <span>Set PIN</span>
      </div>
      <div class="action-btn" onclick="openModal('limitModal')">
        <i class="fa-solid fa-sliders-h"></i>
        <span>Limits</span>
      </div>
    </div>
  </div>
</div>

<section class="mt-8">
  <div class="container">
    <!-- <div class="max-w-md text-center empty-state py-12 px-8">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-auto size-20 text-pri-600">
        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"></path>
      </svg>

      <h2 class="mt-6 text-2xl font-bold text-slate-900">No data to display</h2>

      <p class="mt-4 text-pretty text-slate-600">
        No transactions yet. Your activity will appear here once you start using your mPay Card.
      </p>
    </div> -->

    <!-- Header -->
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-lg font-medium text-slate-800">Recent Transactions</h2>
      <button class="text-sm text-blue-600 hover:underline">View All</button>
    </div>

    <div class="mpay-card-transactions">
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

<?php include 'components/footer.php'; ?>