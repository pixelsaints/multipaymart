<?php 
include 'config.php';

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
include 'components/header.php';
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

<section class="my-8">
  <div class="container">

    <div class="h-scroll-container p-0">
      <a href="#" class="pill active">
        <i class="fas fa-shopping-cart"></i>
        <span>All Brands</span>
      </a>

      <a href="#" class="pill">
        <i class="fas fa-shopping-cart"></i>
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

      <a href="#" class="voucher-card">
        <div class="image-container relative flex items-center justify-center z-0 overflow-hidden">
          <span class="badge absolute bg-blue-600 text-white text-[10px] font-semibold px-2 py-1">500 pts</span>
          <img src="https://b2cstatic.woohoo.in/media/catalog/product/0/7/07_cleartrip-hotel.png?appId=12" alt="Cleartrip Hotel" >
        </div>

        <div class="brand-logo">
          <img src="https://d1o7uku192uawx.cloudfront.net/prod-woohoo/woohoo/woohoo-card/brands/65a42716-648f-45db-bf1b-33b3476e91b4.png">
        </div>

        <div class="voucher-content">
          <p class="text-sm font-medium text-gray-800 line-clamp-2">
            Cleartrip Hotel E-Gift Card
          </p>
          <span class="text-xs font-semibold text-green-700">
            16% Discount
          </span>
        </div>

      </a>

      <a href="#" class="voucher-card">
        <div class="image-container relative flex items-center justify-center z-0 overflow-hidden">
          <span class="badge absolute bg-blue-600 text-white text-[10px] font-semibold px-2 py-1">500 pts</span>
          <img src="https://b2cstatic.woohoo.in/media/catalog/product/0/6/06_flipkart_2.png?appId=12" alt="Cleartrip Hotel" >
        </div>

        <div class="brand-logo">
          <img src="https://d1o7uku192uawx.cloudfront.net/prod-woohoo/woohoo/woohoo-card/brands/6d43545e-9314-4037-ab1a-3541a9f4f7f2.png" alt="">
        </div>

        <div class="voucher-content">
          <p class="text-sm font-medium text-gray-800 line-clamp-2">
            Flipkart E-Gift Voucher
          </p>
          <span class="text-xs font-semibold text-green-700">
            1.5% Discount
          </span>
        </div>
      </a>

      <a href="#" class="voucher-card">
        <div class="image-container relative flex items-center justify-center z-0 overflow-hidden">
          <span class="badge absolute bg-blue-600 text-white text-[10px] font-semibold px-2 py-1">500 pts</span>
          <img class="product-card__image-container__image" src="https://b2cstatic.woohoo.in/media/catalog/product/0/2/02_bigbasket.png?appId=12" alt="Bigbasket E-Gift Card image">
        </div>

        <div class="brand-logo">
          <img class="product-card__image-container__brand-logo" src="https://d1o7uku192uawx.cloudfront.net/prod-woohoo/woohoo/woohoo-card/brands/18ebbd58-f2a4-49a7-bdc8-4d49b003eba9.png" alt="">
        </div>

        <div class="voucher-content">
          <p class="text-sm font-medium text-gray-800 line-clamp-2">
            Bigbasket E-Gift Card
          </p>
          <span class="text-xs font-semibold text-green-700">
            4% Discount
          </span>
        </div>
      </a>

      <a href="#" class="voucher-card">
        <div class="image-container relative flex items-center justify-center z-0 overflow-hidden">
          <span class="badge absolute bg-blue-600 text-white text-[10px] font-semibold px-2 py-1">500 pts</span>
          <img class="product-card__image-container__image" src="https://b2cstatic.woohoo.in/media/catalog/product/1/5/15_myjiostore_2nd_image-p-4082925.png?appId=12" alt="My Jio Store E-Gift Card image">
        </div>

        <div class="brand-logo">
          <img class="product-card__image-container__brand-logo" src="https://d1o7uku192uawx.cloudfront.net/prod-woohoo/woohoo/woohoo-card/brands/6c2f4db8-ac49-4944-9a70-61b2dd4ce801.png" alt="">
        </div>

        <div class="voucher-content">
          <p class="text-sm font-medium text-gray-800 line-clamp-2">
            My Jio Store E-Gift Card
          </p>
          <span class="text-xs font-semibold text-green-700">
            10% Discount
          </span>
        </div>
      </a>

      <a href="#" class="voucher-card">
        <div class="image-container relative flex items-center justify-center z-0 overflow-hidden">
          <span class="badge absolute bg-blue-600 text-white text-[10px] font-semibold px-2 py-1">500 pts</span>
          <img class="product-card__image-container__image" src="https://b2cstatic.woohoo.in/media/catalog/product/0/1/01_croma.png?appId=12" alt="Croma E-Gift Card image">
        </div>

        <div class="brand-logo">
          <img class="product-card__image-container__brand-logo" src="https://d1o7uku192uawx.cloudfront.net/prod-woohoo/woohoo/woohoo-card/brands/e05ea36d-b87c-41b3-bfe3-311f3ec71eb7.png" alt="">
        </div>

        <div class="voucher-content">
          <p class="text-sm font-medium text-gray-800 line-clamp-2">
            Croma E-Gift Card
          </p>
          <span class="text-xs font-semibold text-green-700">
            12% Discount
          </span>
        </div>
      </a>

      <a href="#" class="voucher-card">
        <div class="image-container relative flex items-center justify-center z-0 overflow-hidden">
          <span class="badge absolute bg-blue-600 text-white text-[10px] font-semibold px-2 py-1">500 pts</span>
          <img class="product-card__image-container__image" src="https://b2cstatic.woohoo.in/media/catalog/product/0/3/03_blinkit-p-5241269.png?appId=12" alt="Blinkit E-Gift Card image">
        </div>

        <div class="brand-logo">
          <img class="product-card__image-container__brand-logo" src="https://d1o7uku192uawx.cloudfront.net/prod-woohoo/woohoo/woohoo-card/brands/5530c28e-2b94-4a53-8a3c-f70139cd02ad.png" alt="">
        </div>

        <div class="voucher-content">
          <p class="text-sm font-medium text-gray-800 line-clamp-2">
            Croma E-Gift Card
          </p>
          <span class="text-xs font-semibold text-green-700">
            12% Discount
          </span>
        </div>
      </a>

      <a href="#" class="voucher-card">
        <div class="image-container relative flex items-center justify-center z-0 overflow-hidden">
          <span class="badge absolute bg-blue-600 text-white text-[10px] font-semibold px-2 py-1">500 pts</span>
          <img class="product-card__image-container__image" src="https://b2cstatic.woohoo.in/media/catalog/product/0/2/02_tanishq-gold.png?appId=12" alt="Tanishq Gold Jewellery E-Gift Card image">
        </div>

        <div class="brand-logo">
          <img class="product-card__image-container__brand-logo" src="https://d1o7uku192uawx.cloudfront.net/prod-woohoo/woohoo/woohoo-card/brands/efc3329b-3fa1-4c92-a91b-2b4f9485f4a9.png" alt="">
        </div>

        <div class="voucher-content">
          <p class="text-sm font-medium text-gray-800 line-clamp-2">
            Tanishq Gold Jewellery E-Gift Card
          </p>
          <span class="text-xs font-semibold text-green-700">
            3.1% Discount
          </span>
        </div>
      </a>

      <a href="#" class="voucher-card">
        <div class="image-container relative flex items-center justify-center z-0 overflow-hidden">
          <span class="badge absolute bg-blue-600 text-white text-[10px] font-semibold px-2 py-1">500 pts</span>
          <img class="product-card__image-container__image" src="https://b2cstatic.woohoo.in/media/catalog/product/0/4/04_amazon-shopping-voucher.png?appId=12" alt="Amazon Shopping Voucher image">
        </div>

        <div class="brand-logo">
          

          <img class="product-card__image-container__brand-logo" src="https://d1o7uku192uawx.cloudfront.net/prod-woohoo/woohoo/woohoo-card/brands/b0c5d1d5-c8b3-448d-a835-80e585898063.png" alt="">
        </div>

        <div class="voucher-content">
          <p class="text-sm font-medium text-gray-800 line-clamp-2">
            Amazon Shopping Voucher
          </p>
          <span class="text-xs font-semibold text-green-700">
            5% Discount
          </span>
        </div>
      </a>

     
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

<?php include 'components/footer.php'; ?>



<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />