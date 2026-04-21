<?php 
include '../config.php';

$title = "Shopping Sites";

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'Shopping Sites',
    'show_back' => false,
    'show_home' => true,
    'show_notifications' => true,
    'show_coins' => true,
    'show_profile' => false
  ]
];
include '../components/header.php';

$offers = [
  [
    "name" => "Up to 5% Cashback",
    "image" => "../assets/images/vouchers/04_amazon-shopping-voucher.png",
    "brand_logo" => "../assets/images/brands/amazon.png",
    "discount" => "AMAZON05",
    "url" => "https://www.amazon.in"
  ],
  [
    "name" => "Flat 20% Off on 500",
    "image" => "../assets/images/vouchers/06_flipkart_2.png",
    "brand_logo" => "../assets/images/brands/flipkart-logo.svg",
    "discount" => "WELCOME50",
    "url" => "https://www.flipkart.com"
  ],
  [
    "name" => "10% Cashback on Fashion",
    "image" => "../assets/images/vouchers/07_myntra.png",
    "brand_logo" => "../assets/images/brands/myntra_logo.png",
    "discount" => "STYLE10",
    "url" => "https://www.myntra.com"
  ],
  [
    "name" => "20% Cashback on Orders",
    "image" => "../assets/images/vouchers/04_zomato.png",
    "brand_logo" => "../assets/images/brands/zomato.png",
    "discount" => "ZOMATO20",
    "url" => "https://www.zomato.com"
  ],
  [
    "name" => "Earn 2X Coins",
    "image" => "../assets/images/vouchers/01_ajio.png",
    "brand_logo" => "../assets/images/brands/ajio.png",
    "discount" => "AJIO2X",
    "url" => "https://www.ajio.com"
  ],
  [
    "name" => "Flat 15% Off",
    "image" => "../assets/images/vouchers/07_nykaa.png",
    "brand_logo" => "../assets/images/brands/nykaa.png",
    "discount" => "NYKAA15",
    "url" => "https://www.nykaa.com"
  ],
  [
    "name" => "Up to 20% Off",
    "image" => "../assets/images/vouchers/02_tatacliq.png",
    "brand_logo" => "../assets/images/brands/tata-cliq.png",
    "discount" => "TATCLI20",
    "url" => "https://www.tatacliq.com"
  ],
  [
    "name" => "₹1000 Cashback",
    "image" => "../assets/images/vouchers/01_croma.png",
    "brand_logo" => "../assets/images/brands/croma.png",
    "discount" => "CROMA1000",
    "url" => "https://www.croma.com"
  ],
  [
    "name" => "Up to 10% Cashback",
    "image" => "../assets/images/vouchers/myjiostore.png",
    "brand_logo" => "../assets/images/brands/reliance_digital.svg",
    "discount" => "RELDIG10",
    "url" => "https://www.reliancedigital.in"
  ],
  [
    "name" => "Flat ₹500 Off",
    "image" => "../assets/images/vouchers/21_pepperfry.png",
    "brand_logo" => "../assets/images/brands/pf-logo.svg",
    "discount" => "HOME500",
    "url" => "https://www.croma.com"
  ]
];
?>

<div class="shopping">

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

  <!-- Popular Brands -->
  <section class="my-8">
    <div class="container">
      <div class="flex flex-row items-center justify-between pt-3">
        <h3 class="font-medium">Popular Shopping Sites</h3>
        <a href="<?= BASE_URL ?>/vouchers" class="more-link">View All <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="grid grid-cols-3 gap-3 mt-4">
        <a href="#" class="shopping-site">
          <img class="translate-y-1" src="../assets/images/brands/amazon.png" alt="">
        </a>
        <a href="#" class="shopping-site">
          <img class="h-[40px] w-auto" src="../assets/images/brands/flipkart-logo.svg" alt="">
        </a>
        <a href="#" class="shopping-site">
          <img class="h-[60px] w-auto" src="../assets/images/brands/myntra.png" alt="">
        </a>
        <a href="#" class="shopping-site">
          <img class="" src="../assets/images/brands/nykaa.png" alt="">
        </a>
        <a href="#" class="shopping-site">
          <img class="scale-[1.1]" src="../assets/images/brands/pantaloons.png" alt="">
        </a>
        <a href="#" class="shopping-site">
          <img class="h-[56px] w-auto" src="../assets/images/brands/unilever.png" alt="">
        </a>
      </div>
    </div>
  </section>

  <section class="my-8">
    <div class="container">
      <h3 class="font-medium mb-4">Coupons & Cashback</h3>
      <div class="gap-3 grid grid-cols-2">
        <?php foreach ($offers as $offer): ?>
          <a href="<?= htmlspecialchars($offer['url']) ?>" target="_blank" class="voucher-card block">
            <div class="image-container relative flex items-center justify-center z-0 overflow-hidden">
              <img src="<?= $offer['image']; ?>" alt="<?= htmlspecialchars($offer['name']); ?>">
            </div>
            <div class="brand-logo"><img src="<?= $offer['brand_logo']; ?>" alt=""></div>
            <div class="voucher-content">
              <p class="text-sm font-medium text-gray-800 line-clamp-2"><?= htmlspecialchars($offer['name']); ?></p>
              <span class="flex flex-row gap-2 text-xs font-medium bg-sec-50 text-sec-400 mb-2"> <i class="fa-solid fa-copy"></i> <?= $offer['discount']; ?></span>
              <!-- <div class="bg-slate-800 w-fit mt-4 px-3 py-2 text-[14px] rounded-2xl leading-none text-white">Shop Now</div> -->
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

</div>

<?php include '../components/footer.php' ?>