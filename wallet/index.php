<?php 
  include '../config.php';

  $title = "Wallet";

  $topBar_style = [
    'page-header' => [
      'top-bar-title' => 'Wallet',
      'show_back' => false,
      'show_home' => true,
      'show_notifications' => true,
      'show_coins' => true,
      'show_profile' => false
    ]
  ];
  include '../components/header.php';


  $transactions = [
    [
      "type"=>"Online Pay",
      "date"=>"17 Apr 2026, 02:57 PM",
      "order_id"=>"#O-8068",
      "amount"=>"2000.00",
      "status"=>"Pending"
    ],
    [
      "type"=>"Offline Pay",
      "date"=>"17 Apr 2026, 01:20 PM",
      "order_id"=>"#O-8067",
      "amount"=>"1500.00",
      "status"=>"Successful"
    ],
    [
      "type"=>"Request Manual Add",
      "date"=>"16 Apr 2026, 06:45 PM",
      "order_id"=>"#O-8066",
      "amount"=>"500.00",
      "status"=>"Rejected"
    ],
    [
      "type"=>"Deposit Gold",
      "date"=>"16 Apr 2026, 03:10 PM",
      "order_id"=>"#O-8065",
      "amount"=>"3200.00",
      "status"=>"Successful"
    ],
    [
      "type"=>"Online Pay",
      "date"=>"15 Apr 2026, 11:30 AM",
      "order_id"=>"#O-8064",
      "amount"=>"1000.00",
      "status"=>"Failed"
    ],
    [
      "type"=>"Offline Pay",
      "date"=>"15 Apr 2026, 09:15 AM",
      "order_id"=>"#O-8063",
      "amount"=>"2500.00",
      "status"=>"Pending"
    ],
    [
      "type"=>"Deposit Gold",
      "date"=>"14 Apr 2026, 07:50 PM",
      "order_id"=>"#O-8062",
      "amount"=>"4100.00",
      "status"=>"Successful"
    ],
    [
      "type"=>"Request Manual Add",
      "date"=>"14 Apr 2026, 04:25 PM",
      "order_id"=>"#O-8061",
      "amount"=>"800.00",
      "status"=>"Rejected"
    ],
    [
      "type"=>"Online Pay",
      "date"=>"13 Apr 2026, 02:05 PM",
      "order_id"=>"#O-8060",
      "amount"=>"600.00",
      "status"=>"Successful"
    ],
    [
      "type"=>"Offline Pay",
      "date"=>"13 Apr 2026, 10:40 AM",
      "order_id"=>"#O-8059",
      "amount"=>"1200.00",
      "status"=>"Failed"
    ],
  ];

  $statusClasses = [
    "Pending" => "text-yellow-700 bg-yellow-100",
    "Successful" => "text-green-700 bg-green-100",
    "Rejected" => "text-red-700 bg-red-100",
    "Failed" => "text-gray-700 bg-gray-200",
  ];
?>

<div class="wallet container">

  <section class="my-8">
    <div class="wallet-card py-8">
      <div class="wallet-card-content h-full">
        <div class="flex flex-col justify-center items-center">
          <div class="caption pt-3">Wallet Balance</div>
          <div class="amount">₹ 15,000.00</div>
          <span class="text-xs mb-8 px-8">For Service Payments</span>

          <div class="actions grid grid-cols-3 gap-3 items-center justify-between">
            <a href="#" data-target="topUp">
              <div class="icon">
                <i class="fa-solid fa-plus"></i>
              </div>
              Deposit
            </a>
            <a href="#" class="withdraw" data-target="withdraw">
              <div class="icon">
                <i class="fa-solid fa-arrow-down"></i>
              </div>
              Withdraw
            </a>
            <a href="#" class="transfer" data-target="transfer">
              <div class="icon">
                <i class="fa-solid fa-arrow-right"></i>
              </div>
              Transfer
            </a>
          </div>
        </div>
      </div>
      <img class="brand-logo" src="../assets/images/logo-white.png" alt="">
    </div>
  </section>

  <section class="my-8">
    <div class="wallet-card gold py-8">
      <div class="wallet-card-content h-full">
        <div class="flex flex-col justify-center items-center">
          <div class="caption pt-3">Gold Wallet</div>
          <div class="amount">₹ 15,000.00</div>
           <span class="text-xs mb-8 text-center">Gold deposit balance (verified by admin) <br/> Tap amount for receipt</span>

          <div class="actions grid grid-cols-1 gap-3 items-center justify-between">
            <a href="#" data-target="deposit-gold">
              <div class="icon">
                <i class="fa-solid fa-plus"></i>
              </div>
              Deposit Gold
            </a>
          </div>
        </div>
      </div>
      <img class="brand-logo" src="../assets/images/logo-white.png" alt="">
    </div>
    <div class="live-rate">
      <div class="mb-2 text-xs">LIVE GOLD RATE (Updated 16:43)</div>
      <div class="a-section-marquee-box">
        <h2 class="marquee-text">24K ₹1,56,720.00 / 10g <span class="dot">•</span> </h2>
        <h2 class="marquee-text">22K ₹1,43,555.52 / 10g <span class="dot">•</span> </h2>
        <h2 class="marquee-text">24K ₹1,56,720.00 / 10g <span class="dot">•</span> </h2>
      </div>
    </div>
  </section>

  <section class="mt-8 mb-4">
    <div class="grid grid-cols-2 gap-4">
      <div class="flex items-center justify-center bg-gradient-to-b from-slate-100/40 to-slate-100 border border-slate-200 rounded">
        <div class="flex flex-col items-center p-3">
          <span class="text-[15px] font-medium text-center text-slate-600 mt-2 mb-1">
            Gold Cashback
          </span>
          <span class="my-2 text-[26px] font-medium text-slate-700">
            <i class="fa-solid fa-gift"></i> 
            2,500
          </span>
          <span class="text-[12px] text-center mb-1">
            0.10% daily when Gold Wallet > ₹1,00,000
          </span>
        </div>
      </div>

      <div class="flex items-center justify-center bg-gradient-to-b from-slate-100/40 to-slate-100 border border-slate-200 rounded">
        <div class="flex flex-col items-center p-3">
          <span class="text-[15px] font-medium text-center text-slate-600 mt-2 mb-1">
            Making Wallet
          </span>
          <span class="my-2 text-[26px] font-medium text-slate-700">
            <i class="fa-solid fa-wallet"></i>
            1,500
          </span>
          <span class="text-[12px] text-center mb-1">
            0.10% daily when Gold Wallet > ₹1,00,000
          </span>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-4 mb-8">
    <div class="flex items-center justify-center bg-gradient-to-b from-slate-100/40 to-slate-100 border border-slate-200 rounded">
      <div class="flex flex-col items-center p-3">
        <span class="text-[15px] font-medium text-center text-slate-600 mt-2 mb-1">
          Reward Coins
        </span>
        <span class="my-2 text-[26px] font-medium text-slate-700">
          <i class="fa-solid fa-coins"></i> 
          2,500
        </span>
        <span class="text-[12px] text-center mb-1">
          1,000 Coins = ₹10
        </span>
      </div>
    </div>
  </section>

  <section class="my-8">
    <!-- Header -->
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-lg font-medium text-slate-800">Add Money Requests</h2>
      <button class="text-sm text-blue-600 hover:underline">View All</button>
    </div>

    <div class="space-y-3">
      <?php foreach ($transactions as $txn): ?>
        <?php 
          $statusKey = $txn['status'];
          $statusClass = $statusClasses[$statusKey] ?? "text-gray-700 bg-gray-100";
        ?>

        <div class="bg-white rounded border border-slate-200 flex items-center justify-between p-3">
          <div class="flex items-center gap-3">
            <div>
              <p class="text-xs text-blue-500 mb-1">
                <?= $txn['order_id'] ?>
              </p>
              <p class="text-sm font-medium text-gray-800 mb-2">
                <?= strtoupper($txn['type']) ?>
              </p>
              <p class="text-xs text-gray-500">
                <?= $txn['date'] ?>
              </p>
            </div>
          </div>

          <div class="text-right">
            <p class="text-sm font-semibold text-green-600 tracking-wide">
              ₹<?= number_format($txn['amount'], 2) ?>
            </p>

            <p class="inline-block mt-1 font-semibold text-[12px] leading-[14px] px-2 py-1 rounded-3xl <?= $statusClass ?>">
              <?= $txn['status'] ?>
            </p>
          </div>

        </div>
      <?php endforeach; ?>
    </div>
  </section>
</div>

<div class="drawer" data-src="topUp">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">

    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-title">Deposit</div>
    <div class="drawer-content">

        
      <div class="flex flex-col">
        <span class="text-sm font-medium text-gray-700 mb-4"> Select/Enter the amount</span>

        <div class="radio-button flex flex-row flex-wrap gap-x-3 gap-y-3 mb-4">
          <label>
            <input type="radio" name="denomination_type" value="self" class="hidden">
            <div>₹ 1000</div>
          </label>
          <label>
            <input type="radio" name="denomination_type" value="self" class="hidden">
            <div>₹ 2500</div>
          </label>
          <label>
            <input type="radio" name="denomination_type" value="self" class="hidden">
            <div>₹ 5000</div>
          </label>
        </div>

        <label for="Email" class="flex flex-col gap-3 mb-8">
          <input type="number" id="Email" class="pin-input w-full h-12 border border-slate-300 rounded-lg text-lg focus:outline-none appearance-none px-4">
        </label>
      </div>

      <!-- Payment Methods -->
      <div class="bg-white border border-slate-200 rounded-lg px-4 mb-6 payment-methods">

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

      <!-- Actions -->
      <div class="flex gap-3 mx-auto w-[100%]">
        <button class="flex-1 bg-gray-900 text-white py-3 rounded-lg text-sm font-medium">
          Add Funds
        </button>
      </div>
    </div>
  </div>
</div>

<div class="drawer" data-src="withdraw">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">

    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-title">
      Withdraw
    </div>
    <div class="drawer-content">
      <div class="mt-0 mb-6">
        <div class="px-5 py-8 bg-gradient-to-b from-pri-100 to-pri-200 border border-pri-300 rounded-lg">
          <div class="text-center">
            <div class="text-md mb-1">Available Deposit Balance</div>
            <div class="text-[32px] font-medium"> ₹ 10,000</div>
          </div>
        </div>
      </div>
      <div class="my-6">
        <div class="text mb-2">Enter Amount</div>
        <label for="amount" class="flex flex-col gap-3 mb-8">
          <input type="number" id="amount" class="pin-input w-full h-12 border border-slate-300 rounded-lg text-lg focus:outline-none appearance-none px-4">
        </label>

        <div class="text mb-2">Select Your Account</div>
        <div class="flex flex-col space-y-2 mb-6">
          <!-- UPI -->
          <label class="flex items-center gap-3 px-4 py-2 rounded-lg cursor-pointer bg-white border border-slate-200 ">
            <input type="radio" name="withdra" value="upi" class="hidden peer">
            <div class="flex-1">
              <p class="mb-0 text-[16px] font-medium text-slate-900">ICICI Bank</p>
              <p class="mb-0 text-[14px] text-gray-500">**** **** **** 1234</p>
            </div>
            <i class="text-[16px] fa-solid fa-circle-check text-slate-200 peer-checked:text-pri-600 scale-125"></i>
          </label>

          <!-- HDFC Bank -->
          <label class="flex items-center gap-3 px-4 py-2 rounded-lg cursor-pointer bg-white border border-slate-200 ">
            <input type="radio" name="withdra" value="hdfc" class="hidden peer">
            <div class="flex-1">
              <p class="mb-0 text-[16px] font-medium text-slate-900">HDFC Bank</p>
              <p class="mb-0 text-[14px] text-gray-500">**** **** **** 5678</p>
            </div>

            <i class="text-[16px] fa-solid fa-circle-check text-slate-200 peer-checked:text-pri-600 scale-125"></i>
          </label>

          <!-- SBI Bank -->
          <label class="flex items-center gap-3 px-4 py-2 rounded-lg cursor-pointer bg-white border border-slate-200 ">
            <input type="radio" name="withdra" value="sbi" class="hidden peer">
            <div class="flex-1">
              <p class="mb-0 text-[16px] font-medium text-slate-900">State Bank of India</p>
              <p class="mb-0 text-[14px] text-gray-500">**** **** **** 9821</p>
            </div>

            <i class="text-[16px] fa-solid fa-circle-check text-slate-200 peer-checked:text-pri-600 scale-125"></i>
          </label>

          <!-- Axis Bank -->
          <label class="flex items-center gap-3 px-4 py-2 rounded-lg cursor-pointer bg-white border border-slate-200 ">
            <input type="radio" name="withdra" value="axis" class="hidden peer">
            <div class="flex-1">
              <p class="mb-0 text-[16px] font-medium text-slate-900">Axis Bank</p>
              <p class="mb-0 text-[14px] text-gray-500">**** **** **** 4412</p>
            </div>

            <i class="text-[16px] fa-solid fa-circle-check text-slate-200 peer-checked:text-pri-600 scale-125"></i>
          </label>
        </div>

        <!-- Actions -->
        <div class="flex gap-3 mx-auto w-[100%]">
          <button class="flex-1 bg-gray-900 text-white py-3 rounded-lg text-sm font-medium">
            Add Funds
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="drawer" data-src="transfer">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">

    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-title">
      Transfer
    </div>
    <div class="drawer-content">
      <div class="mt-0 mb-8">
        <div class="px-5 py-8 bg-gradient-to-b from-pri-100 to-pri-200 border border-pri-300 rounded-lg">
          <div class="text-center">
            <div class="text-md mb-1">Available Deposit Balance</div>
            <div class="text-[32px] font-medium"> ₹ 10,000</div>
          </div>
        </div>
      </div>
      <div class="my-6">
        <div class="mb-4">
          <div class="text mb-2">Amount (max ₹1000 without KYC)</div>
          <label for="amount" class="flex flex-col gap-3 mb-8">
            <input type="number" id="amount" class="pin-input w-full h-12 border border-slate-300 rounded-lg text-lg focus:outline-none appearance-none px-4">
          </label>
        </div>

        <div class="text-xs mb-1">Recipient Details</div>
        <div class="">
          <div class="text mb-2">User ID or Mobile</div>
          <label for="amount" class="flex flex-col gap-3 mb-8">
            <input type="number" id="amount" class="pin-input w-full h-12 border border-slate-300 rounded-lg text-lg focus:outline-none appearance-none px-4">
          </label>
        </div>


        <!-- Actions -->
        <div class="flex gap-3 mx-auto w-[100%]">
          <button class="flex-1 bg-gray-900 text-white py-3 rounded-lg text-sm font-medium">
            Send Money
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="drawer" data-src="deposit-gold">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">

    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-title">
      Deposit Gold
    </div>
    <div class="drawer-content">
      <div class="p-5 bg-blue-100 text-[14px] rounded-lg">
        Upload your gold bill and enter the bill number. Admin will verify and credit your Gold Wallet based on the bill.
      </div>
      <div class="my-6">
        <div class="mb-3">
          <div class="text-[14px] mb-2">Bill Number</div>
          <label for="amount" class="flex flex-col gap-3 mb-8">
            <input type="number" id="amount" class="pin-input w-full h-12 border border-slate-300 rounded-lg text-lg focus:outline-none appearance-none px-4">
          </label>
        </div>

        <div class="text-[14px] mb-2">Gold bill (photo or PDF)</div>
        <label class="block w-full p-6 border border-slate-200 rounded-lg bg-white cursor-pointer">
  
          <div class="flex flex-col items-center text-center">
            <div class="w-12 h-12 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full mb-3">
              <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
            </div>

            <p class="text-sm mb-0 font-medium text-slate-800">Upload File</p>
            <p class="text-xs text-slate-500 mt-1 mb-0">PNG, JPG, PDF up to 5MB</p>
          </div>

          <input type="file" class="hidden" />
        </label>


        <!-- Actions -->
        <div class="flex gap-3 mx-auto w-[100%] mt-8">
          <button class="flex-1 bg-gray-900 text-white py-3 rounded-lg text-sm font-medium">
            Send Money
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include '../components/footer.php'; ?>
