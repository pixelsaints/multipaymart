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
?>

<!-- Popular Brands -->
<section class="my-8">
  <div class="container">
    <div class="flex flex-row items-center justify-between pt-3">
      <h3 class="font-medium">Popular Brands</h3>
      <a href="<?= BASE_URL ?>/vouchers" class="more-link">View All <i class="fa-solid fa-arrow-right"></i></a>
    </div>

    <div class="grid grid-cols-3 gap-3 mt-4">
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

<?php include '../components/footer.php' ?>