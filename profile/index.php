<?php 
include '../config.php';

$title = "Profile";

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'Profile',
    'show_back' => false,
    'show_home' => true,
    'show_notifications' => true,
    'show_coins' => true,
    'show_profile' => false,
    'show_cart' => false
  ]
];

include '../components/header.php';
?>

<div class="rounded-bl-2xl rounded-br-2xl px-8 py-10 text-center shadow-md shadow-slate-200 border-b border-slate-400/30 bg-pri-50">
  <div class="flex flex-row items-center justify-between">
    <div class="w-28 h-28 rounded-full flex items-center justify-center relative t-[5px]">
      <img src="https://randomuser.me/api/portraits/men/64.jpg" alt="EV" class="w-28 h-28 rounded-full shadow-md border-white border-4">
      <div class="absolute w-10 h-10 bg-white shadow-md bottom-0 right-[0%] z-10 rounded-full flex items-center justify-center">
        <i class="fa-solid fa-camera"></i>
      </div>
    </div>
    <div class="flex flex-col items-start w-[60%]">
      <div class="text-[20px] text-slate-800 mb-1 font-medium">Brayden Barnes</div>
      <div class="text-[14px] text-pri-500 mb-4">Customer id: MW9215939</div>

      <span class="flex items-center justify-center py-[4px] pl-2 pr-3 w-fit bg-emerald-100/80 text-emerald-600 text-[13px] font-semibold border border-emerald-300 rounded-md"><i class="fa-solid fa-circle-check mr-2"></i> KYC Verified</span>
    </div>
  </div>
</div>

<section class="my-8">
  <div class="container">
    <h2 class="text-[16px] mb-4 text-slate-600">Account Settings</h2>

    <div class="flex flex-col bg-white rounded-lg border border-slate-200">
      <a href="" data-target="qr-code" class="flex items-center justify-between border-b border-slate-200 px-4 py-3">
        <div class="flex items-center gap-4">
          <div class="w-10 h-10 flex items-center justify-center bg-red-100/50 text-red-500 rounded-full">
            <i class="fa-solid fa-qrcode"></i>
          </div>
          <div>
            <p class="text-[15px] font-medium text-gray-800">Show/Generate QR Code</p>
          </div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow text-slate-300"></i>
      </a>
      <a href="" data-target="edit-profile" class="flex items-center justify-between border-b border-slate-200 px-4 py-3">
        <div class="flex items-center gap-4">
          <div class="w-10 h-10 flex items-center justify-center bg-orange-100/50 text-orange-500 rounded-full">
            <i class="fa-solid fa-user"></i>
          </div>
          <div>
            <p class="text-[15px] font-medium text-gray-800">Edit Profile</p>
          </div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow text-slate-300"></i>
      </a>
      <a href="" data-target="change-password" class="flex items-center justify-between border-b border-slate-200 px-4 py-3">
        <div class="flex items-center gap-4">
          <div class="w-10 h-10 flex items-center justify-center bg-amber-100/50 text-amber-500 rounded-full">
            <i class="fa-solid fa-key"></i>
          </div>
          <div>
            <p class="text-[15px] font-medium text-gray-800">Change Password</p>
          </div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow text-slate-300"></i>
      </a>
      <a href="./kyc.php" class="flex items-center justify-between px-4 py-3">
        <div class="flex items-center gap-4">
          <div class="w-10 h-10 flex items-center justify-center bg-lime-100/50 text-lime-500 rounded-full">
            <i class="fa-solid fa-address-card"></i>
          </div>
          <div>
            <p class="text-[15px] font-medium text-gray-800">KYC Verification</p>
          </div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow text-slate-300"></i>
      </a>
    </div>
  </div>
</section>

<section class="my-8">
  <div class="container">
    
    <h2 class="text-[16px] mb-4 text-slate-600">Security & Payments</h2>

    <div class="flex flex-col bg-white rounded-lg border border-slate-200">
      <a href="" class="flex items-center justify-between border-b border-slate-200 px-4 py-3">
        <div class="flex items-center gap-4">
          <div class="w-10 h-10 flex items-center justify-center bg-emerald-100/50 text-emerald-600 rounded-full">
            <i class="fa-solid fa-fingerprint"></i>
          </div>
          <div>
            <p class="text-[15px] font-medium text-gray-800">Two Factor/Biometric</p>
          </div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow text-slate-300"></i>
      </a>
      <a href="" class="flex items-center justify-between px-4 py-3">
        <div class="flex items-center gap-4">
          <div class="w-10 h-10 flex items-center justify-center bg-sky-100/50 text-sky-500 rounded-full">
            <i class="fa-solid fa-building-columns"></i>
          </div>
          <div>
            <p class="text-[15px] font-medium text-gray-800">Bank Accounts</p>
          </div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow text-slate-300"></i>
      </a>
    </div>
  </div>
</section>

<section class="my-8">
  <div class="container">
    <div class="flex flex-col bg-white rounded-lg border border-slate-200">
      <a href="" class="flex items-center justify-between px-4 py-3">
        <div class="flex items-center gap-4">
          <div class="w-10 h-10 flex items-center justify-center bg-indigo-100/50 text-indigo-600 rounded-full">
            <i class="fa-solid fa-power-off"></i>
          </div>
          <div>
            <p class="text-[15px] font-medium text-gray-800">Logout</p>
          </div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow text-slate-300"></i>
      </a>
    </div>
  </div>
</section>

<div class="drawer" data-src="qr-code">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">

    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-title"> Receive Money</div>
    <div class="drawer-content">
      <div class="flex flex-col items-center justify-between h-full py-12">
        <div class="justify-center items-center flex flex-col">
          <span class="text-center text-[16px] font-medium w-full mb-5 text-pri-600">Your ID: MW9215939</span>
          <div class="w-[100%] p-6 bg-white border border-slate-300 rounded-lg shadow">
            <img class="w-full" src="../assets/images/download.png" alt="">
          </div>
          <span class="text-center text-[14px] font-medium w-full mt-3 text-slate-400">Scan to pay from Deposit Wallet</span>
        </div>

        <div class="justify-center items-center flex flex-col">
          <span class="text-center text-[14px] font-medium w-full mb-6 text-slate-400">Share via (link opens page with QR)</span>
          <div class="flex flex-row items-center justify-center gap-4">  
            <a href="#" class="flex items-center justify-center p-4 rounded-full w-10 h-10 bg-green-500">
              <i class="text-lg text-white fa-brands fa-whatsapp"></i>
            </a>
            <a href="#" class="flex items-center justify-center p-4 rounded-full w-10 h-10 bg-blue-600">
              <i class="text-lg text-white fa-brands fa-telegram"></i>
            </a>
            <a href="#" class="flex items-center justify-center p-4 rounded-full w-10 h-10 bg-teal-500">
              <i class="text-lg text-white fa-solid fa-share-nodes"></i>
            </a>
            <a href="#" class="flex items-center justify-center p-4 rounded-full w-10 h-10 bg-amber-500">
              <i class="text-lg text-white fa-solid fa-download"></i>
            </a>
            <a href="#" class="flex items-center justify-center p-4 rounded-full w-10 h-10 bg-rose-500">
              <i class="text-lg text-white fa-solid fa-link"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="drawer" data-src="edit-profile">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">

    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-title"> Edit Profile</div>
    <div class="drawer-content">
      <div class="flex flex-col items-center justify-between h-full pt-4 pb-6">
        <div class="justify-center items-center flex flex-col w-full">
          <div class="w-28 h-28 rounded-full flex items-center justify-center relative t-[5px]">
            <img src="https://randomuser.me/api/portraits/men/64.jpg" alt="EV" class="w-28 h-28 rounded-full shadow-md border-white border-4">
            <div class="absolute w-10 h-10 bg-white shadow-md bottom-0 right-[0%] z-10 rounded-full flex items-center justify-center">
              <i class="fa-solid fa-camera"></i>
            </div>
          </div>

          <div class="mt-8 w-full px-6 flex flex-col gap-6">
            <label for="user-name" class="flex flex-col">
              <span class="text-[14px] text-slate-500 mb-2">User Name</span>
              <input id="user-name" type="text" class="text-[15px] p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded focus:placeholder-white transition" value="Brayden Barnes">
            </label>
            <label for="user-name" class="flex flex-col">
              <span class="text-[14px] text-slate-500 mb-2">Email address </span>
              <input id="user-name" type="text" class="text-[15px] p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded focus:placeholder-white transition" value="braydenBarnes@gmail.com">
            </label>
            <label for="user-name" class="flex flex-col">
              <span class="text-[14px] text-slate-500 mb-2">Mobile Number </span>
              <input id="user-name" type="text" class="text-[15px] p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded focus:placeholder-white transition disabled:bg-slate-200 disabled:border-slate-300" value="8431397925" disabled >
            </label>
          </div>
        </div>

        <div class="justify-center items-center flex flex-col w-full px-6">
          <a href="<?= BASE_URL . '/recharge/recharge-pay.php' ?>" class="text-center flex items-center justify-center mt-8 p-3 bg-pri-500 rounded text-[16px] font-medium text-white w-full">Update Profile</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="drawer" data-src="change-password">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">

    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-title">Change Password</div>
    <div class="drawer-content">
      <div class="flex flex-col items-center justify-between h-full pt-4 pb-6">
        <div class="justify-center items-center flex flex-col w-full">
          <div class="w-28 h-28 rounded-full flex items-center justify-center relative t-[5px]">
            <img src="https://randomuser.me/api/portraits/men/64.jpg" alt="EV" class="w-28 h-28 rounded-full shadow-md border-white border-4">
            <div class="absolute w-10 h-10 bg-white shadow-md bottom-0 right-[0%] z-10 rounded-full flex items-center justify-center">
              <i class="fa-solid fa-camera"></i>
            </div>
          </div>

          <div class="mt-8 w-full px-6 flex flex-col gap-6">
            <label for="user-name" class="flex flex-col">
              <span class="text-[14px] text-slate-500 mb-2">Current Password</span>
              <input id="user-name" type="password" class="text-[15px] p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded focus:placeholder-white transition" value="Brayden Barnes">
            </label>
            <label for="user-name" class="flex flex-col">
              <span class="text-[14px] text-slate-500 mb-2">New Password</span>
              <input id="user-name" type="password" class="text-[15px] p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded focus:placeholder-white transition" value="braydenBarnes">
            </label>
            <label for="user-name" class="flex flex-col">
              <span class="text-[14px] text-slate-500 mb-2">Confirm Password</span>
              <input id="user-name" type="password" class="text-[15px] p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded focus:placeholder-white transition disabled:bg-slate-200 disabled:border-slate-300" value="8431397925" >
            </label>
          </div>
        </div>

        <div class="justify-center items-center flex flex-col w-full px-6">
          <a href="<?= BASE_URL . '/recharge/recharge-pay.php' ?>" class="text-center flex items-center justify-center mt-8 p-3 bg-pri-500 rounded text-[16px] font-medium text-white w-full">Update Password</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include '../components/footer.php'; ?>