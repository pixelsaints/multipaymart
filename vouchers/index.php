<?php 
include '../config.php';

$title = "E-Gift Vouchers";

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'E-Gift Vouchers',
    'show_back' => false,
    'show_home' => true,
    'show_notifications' => true,
    'show_coins' => true,
    'show_profile' => false
  ]
];
include '../components/header.php';
?>

<?php
$vouchers = [
  [
    "name" => "Cleartrip Hotel E-Gift Card",
    "image" => "../assets/images/vouchers/07_cleartrip-hotel.png",
    "brand_logo" => "../assets/images/brands/cleartrip.png",
    "discount" => " Discount",
    "points" => "438 pts",
    "url" => "/vouchers/vouchers-details.php"
  ],
  [
    "name" => "Flipkart E-Gift Voucher",
    "image" => "../assets/images/vouchers/06_flipkart_2.png",
    "brand_logo" => "../assets/images/brands/flipkart-logo.svg",
    "discount" => "15% Discount",
    "points" => "450 pts",
    "url" => "/vouchers/vouchers-details.php"
  ],
  [
    "name" => "Bigbasket E-Gift Card",
    "image" => "../assets/images/vouchers/02_bigbasket.png",
    "brand_logo" => "../assets/images/brands/bigbasket.svg",
    "discount" => "11% Discount",
    "points" => "400 pts",
    "url" => "/vouchers/vouchers-details.php"
  ],
  [
    "name" => "My Jio Store E-Gift Card",
    "image" => "../assets/images/vouchers/myjiostore.png",
    "brand_logo" => "../assets/images/brands/reliance_digital.svg",
    "discount" => "21% Discount",
    "points" => "164 pts",
    "url" => "/vouchers/vouchers-details.php"
  ],
  [
    "name" => "Croma E-Gift Card",
    "image" => "../assets/images/vouchers/01_croma.png",
    "brand_logo" => "../assets/images/brands/croma.png",
    "discount" => "24% Discount",
    "points" => "414 pts",
    "url" => "/vouchers/vouchers-details.php"
  ],
  [
    "name" => "Blinkit E-Gift Card",
    "image" => "../assets/images/vouchers/03_blinkit.png",
    "brand_logo" => "../assets/images/brands/blinkit.png",
    "discount" => "14% Discount",
    "points" => "140 pts",
    "url" => "/vouchers/vouchers-details.php"
  ],
  [
    "name" => "Tanishq Gold Jewellery E-Gift Card",
    "image" => "../assets/images/vouchers/01_ajio.png",
    "brand_logo" => "../assets/images/brands/ajio.png",
    "discount" => "13% Discount",
    "points" => "257 pts",
    "url" => "/vouchers/vouchers-details.php"
  ],
  [
    "name" => "Amazon Shopping Voucher",
    "image" => "../assets/images/vouchers/04_amazon-shopping-voucher.png",
    "brand_logo" => "../assets/images/brands/amazon.png",
    "discount" => "10% Discount",
    "points" => "204 pts",
    "url" => "/vouchers/vouchers-details.php"
  ]
];
?>

<!-- Exciting Offers -->
<section class="my-8">
  <div class="container">
    <div class="flex flex-row items-center justify-between">
      <h3 class="font-medium">Exciting Offers</h3>
      <a href="#" class="more-link">View All <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="offer-cards mt-5">
      <a class="card">
        <img src="../assets/images/banners/offer-banner-1.jpg" alt="" />
      </a>
      <a class="card">
        <img src="../assets/images/banners/offer-banner-2.jpg" alt="" />
      </a>
      <a class="card">
        <img src="../assets/images/banners/offer-banner-3.jpg" alt="" />
      </a>
    </div>
  </div>
</section>

<section class="my-8">
  <div class="container">

    <div class="h-scroll-container p-0">
      <a href="#" class="pill active">
        <i class="fa-brands fa-web-awesome"></i>
        <span>All Brands</span>
      </a>

      <a href="#" class="pill">
        <i class="fa-solid fa-tags"></i>
        <span>super Offers</span>
      </a>

      <a href="#" class="pill">
        <i class="fas fa-shopping-cart"></i>
        <span>Ecommerce</span>
      </a>

      <a href="#" class="pill">
        <i class="fas fa-plane"></i>
        <span>Travel</span>
      </a>

      <a href="#" class="pill">
        <i class="fa-solid fa-gem"></i>
        <span>Jewelery</span>
      </a>

      <a href="#" class="pill">
        <i class="fas fa-bag-shopping"></i>
        <span>Daily Needs</span>
      </a>

      <a href="#" class="pill">
        <i class="fas fa-tv"></i>
        <span>Electronics</span>
      </a>

      <a href="#" class="pill">
        <i class="fas fa-utensils"></i>
        <span>Food</span>
      </a>
    </div>
    
    <div class="grid grid-cols-2 gap-4 my-8">

      <?php foreach ($vouchers as $voucher): ?>
        <a href="<?= BASE_URL . $voucher['url']; ?>" class="voucher-card block">
          <div class="image-container relative flex items-center justify-center z-0 overflow-hidden">
            <span class="badge absolute bg-blue-600 text-white text-[12px] font-semibold px-2 py-1">
              <?= $voucher['points']; ?>
            </span>
            <img src="<?= $voucher['image']; ?>" alt="<?= htmlspecialchars($voucher['name']); ?>">
          </div>
          <div class="brand-logo"><img src="<?= $voucher['brand_logo']; ?>" alt=""></div>
          <div class="voucher-content">
            <p class="text-sm font-medium text-gray-800 line-clamp-2"><?= htmlspecialchars($voucher['name']); ?></p>
            <span class="text-xs font-semibold text-green-700"><?= $voucher['discount']; ?></span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>

    <nav class="flex items-center justify-center">
      <ul class="inline-flex items-center -space-x-px text-sm">

        <!-- Prev -->
        <li>
          <a href="#"
            class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">
            Prev
          </a>
        </li>

        <!-- Page Numbers -->
        <li>
          <a href="#"
            class="px-3 py-2 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
            1
          </a>
        </li>

        <li>
          <a href="#"
            class="px-3 py-2 text-white bg-blue-600 border border-blue-600">
            2
          </a>
        </li>

        <li>
          <a href="#"
            class="px-3 py-2 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
            3
          </a>
        </li>

        <!-- Next -->
        <li>
          <a href="#"
            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">
            Next
          </a>
        </li>

      </ul>
    </nav>
  </div>
</section>

<?php include '../components/footer.php'; ?>