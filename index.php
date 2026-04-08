<?php 
include 'config.php';

$title = "MultiPay Mart - Home";
$show_back = false;
$show_location = true;
$topBar_style = "home-header";
$url = 'home';

include 'components/header.php';
?>

<section class="home-slider my-4">
  <div class="container-fluid">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="./card.php">
            <img src="./assets/images/banners/multipay-card.avif" alt="">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https://multipaymart.com/card.php">
            <img src="./assets/images/banners/gift-card.avif" alt="">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https://multipaymart.com/card.php">
            <img src="./assets/images/banners/partners-card.avif" alt="">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https://multipaymart.com/card.php">
            <img src="./assets/images/banners/shopping-card.avif" alt="">
          </a>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<!-- Vouchers/Near By Partners/Shopping sites/ Wallet Balance -->
<section class="mt-6 mb-8">
  <div class="px-3 overflow-x-auto">
    <div class="cards style-1 h-scroll-container">
      <a href="https://multipaymart.com/vouchers.php" class="card min-w-[132px] bg-gradient-to-b from-cyan-100 to-cyan-200">
        <img src="./assets/images/icons/gift-voucher-icon.avif" alt="" class="icon-3d">
        <span>Gift Vouchers</span>
      </a>
      <a href="https://multipaymart.com/nearby.php" class="card min-w-[132px] bg-gradient-to-b from-orange-100 to-orange-200">
        <img src="./assets/images//icons/shops-front-view.avif" alt="" class="icon-3d">
        <span>Near by Partners</span>
      </a>
      <a href="https://multipaymart.com/shopping.php" class="card min-w-[132px] bg-gradient-to-b from-blue-100 to-blue-200">
        <img src="./assets/images/icons/online-store-icon.avif" alt="" class="icon-3d">
        <span>Shopping Sites</span>
      </a>
      <a href="https://multipaymart.com/wallet.php" class="card min-w-[132px] bg-gradient-to-b from-green-100 to-green-200">
        <img src="./assets/images/icons/wallet-icon.avif" alt="" class="icon-3d">
        <span>Wallet Balance</span>
      </a>
    </div>
  </div>
</section>

<!-- Utilities & Pay Bills -->
<section class="my-8">
  <div class="container">
    <div class="flex flex-row items-center justify-between">
      <h3 class="font-medium">Utilities & Pay Bills</h3>
      <a href="<?php echo BASE_URL?>/recharge.php" class="more-link">View All <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="grid grid-cols-3 gap-3 mt-6">
      <a href="https://multipaymart.com/mobile-recharge.php" class="util-card">
        <img src="./assets/images/icons/utils-mobile-icon.avif" alt="">
        <span>Mobile</span>
      </a>
      <a href="https://multipaymart.com/credit-card.php" class="util-card">
        <img src="./assets/images/icons/utils-credit-card-icon.avif" alt="">
        <span>Credit Card</span>
      </a>
      <a href="https://multipaymart.com/dth.php" class="util-card">
        <img class="scale-x-[-1]" src="./assets/images/icons/utils-dth-icon.avif" alt="">
        <span>DTH</span>
      </a>
      <a href="https://multipaymart.com/landline.php" class="util-card">
        <img src="./assets/images/icons/utils-landline-icon.avif" alt="">
        <span>Landline</span>
      </a>
      <a href="https://multipaymart.com/fastag.php" class="util-card">
        <img src="./assets/images/icons/utils-toll-icon.avif" alt="">
        <span>FastTag</span>
      </a>
      <a href="https://multipaymart.com/recharge.php" class="util-card">
        <img src="./assets/images/icons/utils-broadband-icon.avif" alt="">
        <span>Broadband</span>
      </a>
      <a href="https://multipaymart.com/electricity-bill.php" class="util-card">
        <img src="./assets/images/icons/utils-elec-icon.avif" alt="">
        <span>Electricity</span>
      </a>
      <a href="https://multipaymart.com/lpg-gas.php" class="util-card">
        <img src="./assets/images/icons/utils-gas-icon.avif" alt="">
        <span>LPG Gas</span>
      </a>
      <a href="https://multipaymart.com/water-bill.php" class="util-card">
        <img src="./assets/images/icons/utils-water-icon.avif" alt="">
        <span>Water Bill</span>
      </a>
    </div>
  </div>
</section>

<!-- Exciting Offers -->
<section class="my-8">
  <div class="container">
    <div class="flex flex-row items-center justify-between">
      <h3 class="font-medium">Exciting Offers</h3>
      <a href="#" class="more-link">View All <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="offer-cards mt-6">
      <a class="card">
        <img src="./assets/images/banners/offer-banner-1.jpg" alt="" />
      </a>
      <a class="card">
        <img src="./assets/images/banners/offer-banner-2.jpg" alt="" />
      </a>
      <a class="card">
        <img src="./assets/images/banners/offer-banner-3.jpg" alt="" />
      </a>
    </div>
  </div>
</section>

<!-- Popular Brands -->
<section class="my-8">
  <div class="container">
    <div class="flex flex-row items-center justify-between pt-3">
      <h3 class="font-medium">Popular Brands</h3>
      <a href="#" class="more-link">View All <i class="fa-solid fa-arrow-right"></i></a>
    </div>

    <div class="grid grid-cols-3 gap-4 mt-4">
      <a href="#" class="shopping-card">
        <div class="cashback-text">Upto 80% Off</div>
        <img class="translate-y-1" src="./assets/images/brands/amazon.png" alt="">
        <div href="#" class="btn-rewards">3.50% Rewards</div>
      </a>
      <a href="#" class="shopping-card">
        <div class="cashback-text">Upto 80% Off</div>
        <img class="h-[40px] w-auto" src="./assets/images/brands/flipkart.png" alt="">
        <div href="#" class="btn-rewards">3.50% Rewards</div>
      </a>
      <a href="#" class="shopping-card">
        <div class="cashback-text">Upto 80% Off</div>
        <img class="h-[60px] w-auto" src="./assets/images/brands/myntra.png" alt="">
        <div href="#" class="btn-rewards">3.50% Rewards</div>
      </a>
      <a href="#" class="shopping-card">
        <div class="cashback-text">Upto 80% Off</div>
        <img class="" src="./assets/images/brands/nykaa.png" alt="">
        <div href="#" class="btn-rewards">3.50% Rewards</div>
      </a>
      <a href="#" class="shopping-card">
        <div class="cashback-text">Upto 80% Off</div>
        <img class="scale-[1.1]" src="./assets/images/brands/pantaloons.png" alt="">
        <div href="#" class="btn-rewards">3.50% Rewards</div>
      </a>
      <a href="#" class="shopping-card">
        <div class="cashback-text">Upto 80% Off</div>
        <img class="h-[56px] w-auto" src="./assets/images/brands/unilever.png" alt="">
        <div href="#" class="btn-rewards">3.50% Rewards</div>
      </a>
      <a href="#" class="shopping-card">
        <div class="cashback-text">Upto 80% Off</div>
        <img class="h-[56px] w-auto" src="./assets/images/brands/dominos.png" alt="">
        <div href="#" class="btn-rewards">3.50% Rewards</div>
      </a>
      <a href="#" class="shopping-card">
        <div class="cashback-text">Upto 80% Off</div>
        <img class="" src="./assets/images/brands/swiggy.png" alt="">
        <div href="#" class="btn-rewards">3.50% Rewards</div>
      </a>
      <a href="#" class="shopping-card">
        <div class="cashback-text">Upto 80% Off</div>
        <img class="" src="./assets/images/brands/zomato.png" alt="">
        <div href="#" class="btn-rewards">3.50% Rewards</div>
      </a>
      <a href="#" class="shopping-card">
        <div class="cashback-text">Upto 80% Off</div>
        <img class="h-[30px] w-auto" src="./assets/images/brands/ola.png" alt="">
        <div href="#" class="btn-rewards">3.50% Rewards</div>
      </a>
      <a href="#" class="shopping-card">
        <div class="cashback-text">Upto 80% Off</div>
        <img class="" src="./assets/images/brands/uber.png" alt="">
        <div href="#" class="btn-rewards">3.50% Rewards</div>
      </a>
      <a href="#" class="shopping-card">
        <div class="cashback-text">Upto 80% Off</div>
        <img class="" src="./assets/images/brands/rapido.svg" alt="">
        <div href="#" class="btn-rewards">3.50% Rewards</div>
      </a>
    </div>
  </div>
</section>

<!-- Near By Partners -->
<section class="my-10">
  <div class="container overflow-x-auto">
    <div class="flex flex-row items-center justify-between">
      <h3 class="font-medium">Near By Partners</h3>
      <a href="#" class="more-link">View All <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="cards style-1 partners h-scroll-container mt-6">
      <a href="<?php echo BASE_URL?>/food.php" class="card min-w-[140px] bg-gradient-to-b from-orange-100 to-orange-200">
        <img src="assets/images/partner/food.avif" alt="" class="icon-3d">
        <span>Food</span>
      </a>
      <a href="<?php echo BASE_URL?>/grocery.php" class="card min-w-[140px] bg-gradient-to-b from-indigo-100 to-indigo-200">
        <img src="assets/images/partner/groceries.avif" alt="" class="icon-3d">
        <span>Groceries</span>
      </a>
      <a href="<?php echo BASE_URL?>/medicines.php" class="card min-w-[140px] bg-gradient-to-b from-blue-100 to-blue-200">
        <img src="assets/images/partner/medicine.avif" alt="" class="icon-3d">
        <span>Medicine</span>
      </a>
      <a href="<?php echo BASE_URL?>/medicines.php" class="card min-w-[140px] bg-gradient-to-b from-yellow-100 to-yellow-200">
        <img src="assets/images/partner/taxi-icon.avif" alt="" class="icon-3d taxi">
        <span>Taxi</span>
      </a>
      <a href="<?php echo BASE_URL?>/clothing.php" class="card min-w-[140px] bg-gradient-to-b from-green-100 to-green-200">
        <img src="assets/images/partner/cloting.avif" alt="" class="icon-3d">
        <span>Clothing</span>
      </a>
    </div>
  </div>
</section>

<?php include 'components/footer.php'; ?>