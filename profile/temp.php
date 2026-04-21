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

<div class="drawer" style="display:block" data-src="qr-code">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">

    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-title">Change Password</div>
    <div class="drawer-content">
      <div class="flex flex-col items-center justify-between h-full pt-4 pb-6">
        <div class="justify-center items-center flex flex-col w-full">
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