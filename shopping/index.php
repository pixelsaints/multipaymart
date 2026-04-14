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
    "store" => "Amazon",
    "desc" => "Up to 5% Cashback",
    "badge" => "No Code Required",
    "url" => "https://www.amazon.in"
  ],
  [
    "store" => "Flipkart",
    "desc" => "Flat ₹50 Off on ₹500",
    "badge" => "WELCOME50",
    "url" => "https://www.flipkart.com"
  ],
  [
    "store" => "Myntra",
    "desc" => "10% Cashback on Fashion",
    "badge" => "STYLE10",
    "url" => "https://www.myntra.com"
  ],
  [
    "store" => "Ajio",
    "desc" => "Earn 2X Coins",
    "badge" => "AJIO2X",
    "url" => "https://www.ajio.com"
  ],
  [
    "store" => "Nykaa",
    "desc" => "Flat 15% Off",
    "badge" => "NYKAA15",
    "url" => "https://www.nykaa.com"
  ],
  [
    "store" => "Tata Cliq",
    "desc" => "Up to 20% Off",
    "badge" => "No Code Required",
    "url" => "https://www.tatacliq.com"
  ],
  [
    "store" => "Croma",
    "desc" => "₹1000 Cashback",
    "badge" => "CROMA1000",
    "url" => "https://www.croma.com"
  ],
  [
    "store" => "Reliance Digital",
    "desc" => "Up to 10% Cashback",
    "badge" => "No Code Required",
    "url" => "https://www.reliancedigital.in"
  ],
  [
    "store" => "Pepperfry",
    "desc" => "Flat ₹500 Off",
    "badge" => "HOME500",
    "url" => "https://www.pepperfry.com"
  ],
  [
    "store" => "Zomato",
    "desc" => "20% Cashback on Orders",
    "badge" => "ZOMATO20",
    "url" => "https://www.zomato.com"
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
        <h3 class="font-medium">Popular Stores</h3>
        <a href="<?= BASE_URL ?>/vouchers" class="more-link">View All <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="grid grid-cols-3 gap-3 mt-4">
        <a href="#" class="shopping-card">
          <img class="translate-y-1" src="../assets/images/brands/amazon.png" alt="">
        </a>
        <a href="#" class="shopping-card">
          <img class="h-[40px] w-auto" src="../assets/images/brands/flipkart.png" alt="">
        </a>
        <a href="#" class="shopping-card">
          <img class="h-[60px] w-auto" src="../assets/images/brands/myntra.png" alt="">
        </a>
        <a href="#" class="shopping-card">
          <img class="" src="../assets/images/brands/nykaa.png" alt="">
        </a>
        <a href="#" class="shopping-card">
          <img class="scale-[1.1]" src="../assets/images/brands/pantaloons.png" alt="">
        </a>
        <a href="#" class="shopping-card">
          <img class="h-[56px] w-auto" src="../assets/images/brands/unilever.png" alt="">
        </a>
      </div>
    </div>
  </section>

  <section class="my-8">
    <div class="container">
      <h3 class="font-medium mb-4">Coupons & Cashback</h3>
      <div class="space-y-3">
        <?php foreach ($offers as $offer): ?>
          
          <div class="flex items-center justify-between bg-white p-4 rounded-xl shadow-sm border">

            <!-- Left Content -->
            <div>
              <p class="font-semibold text-[16px]"><?= $offer['store'] ?></p>
              <p class="text-[14px] text-pri-500 mb-2"><?= $offer['desc'] ?></p>

              <span class="inline-block mt-1 text-xs bg-sec-100 px-2 py-1 rounded">
                <?= $offer['badge'] ?>
              </span>
            </div>

            <!-- Right Button -->
            <a 
              href="track.php?url=<?= urlencode($offer['url']) ?>&store=<?= urlencode($offer['store']) ?>" 
              target="_blank"
              class="ml-4 bg-slate-800 text-white text-xs px-4 py-2 rounded-lg whitespace-nowrap"
            >
              Shop Now
            </a>

          </div>

        <?php endforeach; ?>
      </div>
    </div>
  </section>

</div>

<?php include '../components/footer.php' ?>