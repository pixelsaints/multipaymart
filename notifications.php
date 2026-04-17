<?php
include './config.php';

$title = "Notifications";

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'Notifications',
    'show_back' => false,
    'show_home' => true,
    'show_notifications' => false,
    'show_coins' => false,
    'show_profile' => false,
    'show_markRead' => true
  ]
];
include './components/header.php';
?>

<?php
$notifications = [
  [
    "type" => "cashback",
    "icon" => "fa-wallet",
    "color" => "green",
    "message" => "₹150 cashback added to your wallet from Amazon purchase",
    "time" => "2 min ago",
    "unread" => true
  ],
  [
    "type" => "offer",
    "icon" => "fa-tag",
    "color" => "blue",
    "message" => "Flat 20% off on Flipkart orders above ₹999",
    "time" => "10 min ago",
    "unread" => true
  ],
  [
    "type" => "alert",
    "icon" => "fa-clock",
    "color" => "red",
    "message" => "Hurry! Your Myntra coupon expires in 2 hours",
    "time" => "30 min ago",
    "unread" => true
  ],
  [
    "type" => "reward",
    "icon" => "fa-gift",
    "color" => "purple",
    "message" => "You received a ₹100 gift card reward 🎁",
    "time" => "1 hour ago",
    "unread" => false
  ],
  [
    "type" => "transaction",
    "icon" => "fa-receipt",
    "color" => "yellow",
    "message" => "Your Croma order has been successfully tracked",
    "time" => "2 hours ago",
    "unread" => false
  ],
  [
    "type" => "cashback",
    "icon" => "fa-wallet",
    "color" => "green",
    "message" => "₹75 cashback credited from Blinkit order",
    "time" => "3 hours ago",
    "unread" => false
  ],
  [
    "type" => "offer",
    "icon" => "fa-bolt",
    "color" => "purple",
    "message" => "Flash Deal: 30% off on Ajio fashion today only",
    "time" => "5 hours ago",
    "unread" => false
  ],
  [
    "type" => "referral",
    "icon" => "fa-user-plus",
    "color" => "green",
    "message" => "You earned ₹200 from a referral signup",
    "time" => "Yesterday",
    "unread" => false
  ],
  [
    "type" => "update",
    "icon" => "fa-bell",
    "color" => "fuchsia",
    "message" => "Multipaymart updated with new partner stores",
    "time" => "Yesterday",
    "unread" => false
  ],
  [
    "type" => "cashback",
    "icon" => "fa-coins",
    "color" => "blue",
    "message" => "Pending cashback of ₹320 will be credited soon",
    "time" => "2 days ago",
    "unread" => false
  ]
];
?>

<section class="my-8">
  <div class="container">
    <div class="flex flex-col gap-4">
      <?php foreach ($notifications as $notif): ?>
        <div class="flex gap-3 px-4 py-3  
          <?= $notif['unread'] ? 'bg-blue-50 border-blue-300' : 'bg-white border-slate-300' ?> rounded border">

          <!-- Icon -->
          <div class="w-9 h-9 rounded-full flex items-center justify-center bg-<?= $notif['color'] ?>-100">
            <i class="fa-solid text-[18px] <?= $notif['icon'] ?> text-<?= $notif['color'] ?>-600"></i>
          </div>

          <!-- Content -->
          <div class="flex-1">
            <p class="text-[15px] text-slate-700 font-medium">
              <?= htmlspecialchars($notif['message']) ?>
            </p>
            <span class="text-xs text-slate-400">
              <?= $notif['time'] ?>
            </span>
          </div>

        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<?php include './components/footer.php'; ?>