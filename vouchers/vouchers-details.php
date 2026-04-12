<?php 
include '../config.php';

$title = "Cleartrip Hotel E-Gift Card";

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'E-Gift Vouchers',
    'show_back' => true,
    'show_home' => false,
    'show_notifications' => true,
    'show_coins' => true,
    'show_profile' => false
  ]
];

include '../components/header.php'
?>

<section class="mt-6 mb-0 relative">
  <div class="container">
    <div class="voucher-thumb shadow-lg">
      <img src="../assets/images/vouchers/07_cleartrip-hotel.png" alt="">
       <span class="badge absolute bg-blue-600 text-white text-[12px] font-semibold px-2 py-1">
          400 mPay Points
        </span>
    </div>
    
    <div class="voucher-details">
      <h2 class="mb-2">Cleartrip E-Gift Card</h2>
      <p class="voucher-details-desc">Cleartrip e-Gift Cards make for a perfect present. Whether it's proposing a family holiday, an employee incentive, reliving a honeymoon, or delving into adventure with friends, Cleartrip E-Gift Cards are the answer to all travel-related surprises.</p>

      <div class="validity bg-amber-200 text-amber-800 text-[14px] rounded-2xl w-fit py-1 px-3 mt-4">Valid 365 days from the date of issue.</div>
    </div>

    <h3 class="voucher-type-title mt-10 mb-5 text-[18px] font-medium">Gift Card Amount</h3>

    <div class="radio-button flex flex-row flex-wrap gap-x-3 gap-y-3">

      <label>
        <input type="radio" name="denomination_type" value="self" class="hidden" checked>
        <div>₹ 500</div>
      </label>
      
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
      <label>
        <input type="radio" name="denomination_type" value="self" class="hidden">
        <div>₹ 10,000</div>
      </label>
    </div>

    <div class="voucher-order-type my-10">

      <h3 class="voucher-type-title mt-6 mb-5 text-[18px] font-medium">For yourself or as a gift?</h3>

      <div class="radio-button flex gap-4">
        <label>
          <input type="radio" name="purchase_type" value="self" class="hidden" checked>
          <div><i class="fa-solid fa-id-card-clip"></i> For Myself</div>
        </label>

        <label>
          <input type="radio" name="purchase_type" value="self" class="hidden">
          <div><i class="fa-solid fa-gift"></i> Buy as a Gift</div>
        </label>
      </div>
    </div>

    <h3 class="voucher-type-title mt-6 mb-5 text-[18px] font-medium">Information</h3>

    <div class="voucher-info-section flex flex-col pb-4">
      <a href="#" data-target="instructions" class="flex flex-row justify-between w-full items-center py-3 border-b border-slate-300">
        <span class="text-[16px]">Important Instructions</span>
        <i class="fa-solid fa-chevron-right ml-auto"></i>
      </a>
      <a href="#" data-target="how-to" class="flex flex-row justify-between w-full items-center py-3 border-b border-slate-300">
        <span class="text-[16px]">How To Use</span>
        <i class="fa-solid fa-chevron-right ml-auto"></i>
      </a>

      <a href="#" data-target="terms" class="flex flex-row justify-between w-full items-center py-3">
        <span class="text-[16px]">Terms & Conditions</span>
        <i class="fa-solid fa-chevron-right ml-auto"></i>
      </a>
    </div>
  </div>
  
  <div class="voucher-buy">
    <div class="flex flex-row items-center w-full">
      <div class="voucher-buy-price">₹ 500</div>

      <div class="flex items-center bg-gray-100 rounded-xl p-1 w-fit ml-auto">
        <button type="button" 
          class="w-9 h-9 flex items-center justify-center rounded-lg bg-white shadow text-gray-700 hover:bg-gray-50 active:scale-95 transition">
          <i class="fa-solid fa-minus text-sm"></i>
        </button>
        <input type="number" value="1" min="1"
          class="w-12 bg-transparent text-center text-sm font-semibold outline-none">
        <button type="button" 
          class="w-9 h-9 flex items-center justify-center rounded-lg bg-white shadow text-gray-700 hover:bg-gray-50 active:scale-95 transition">
          <i class="fa-solid fa-plus text-sm"></i>
        </button>
      </div>
    </div>
    <div class="flex flex-row items-center justify-between gap-4 mt-8">
      <a href="<?= BASE_URL . '/vouchers/voucher-buy.php' ?>" class="voucher-buy-cart">Add to Cart</a>
      <a href="<?= BASE_URL . '/vouchers/voucher-buy.php' ?>" class="voucher-buy-button">Buy Now</a>
    </div>
  </div>
</section>

<div class="drawer" data-src="instructions">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">

    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-title">Important Instructions</div>
    <div class="drawer-content">
      <p>Gift Card redemptions are limited to ₹25,000 per user, per calendar month.</p>
      <p>The Gift Card cannot be used to purchase other gift cards.</p>
      <p>The Gift Card is valid for a period of 1 (one) year from the date of activation of the Gift Card.</p>
      <p>The Gift Card cannot be reloaded or redeemed for cash.</p>
    </div>
  </div>
</div>

<div class="drawer" data-src="how-to">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">

    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-title">How To Use</div>
    <div class="drawer-content">
      <ul>
        <li>Go to Blinkit App</li>
        <li>Add items to Cart</li>
        <li>Select Blinkit Money as Payment Method</li>
        <li>Click on Claim Gift Card</li>
        <li>Enter the 16 digit card number and 6 digit pin and tap on claim</li>
        <li>OR</li>
        <li>Go to Blinkit App</li>
        <li>Click on Blinkit Money icon</li>
        <li>Click on Claim Gift Card banner</li>
        <li>Enter the 16 digit card number and 6 digit pin and tap on claim</li>
      </ul>
    </div>
  </div>
</div>

<div class="drawer" data-src="terms">
  <div class="drawer-overlay"></div>
  <div class="drawer-wrapper">

    <a href="#" class="drawer-close">
      <i class="fa-solid fa-times"></i>
    </a>

    <div class="drawer-title">Terms & Conditions</div>
    <div class="drawer-content">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos optio quae hic. Commodi, deserunt architecto ducimus illo a error consectetur incidunt repellendus quasi soluta!</p>

      <ul>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, ipsum.</li>
        <li>Voluptatibus voluptatum exercitationem officiis enim! Iure et sit corrupti aut.</li>
        <li>Nam laboriosam nobis eligendi, beatae dolore nostrum deserunt officiis vitae.</li>
        <li>Consectetur quam corrupti facilis porro culpa minima sed fugit excepturi!</li>
        <li>Dignissimos labore officiis vero laboriosam porro ratione, similique accusamus unde?</li>
        <li>Possimus labore esse earum autem corporis, voluptas molestias. Unde, laudantium.</li>
        <li>Ullam vitae ut exercitationem quibusdam inventore officiis distinctio atque architecto!</li>
        <li>Blanditiis ullam maxime dolor dolorem quod pariatur amet, cumque officia!</li>
        <li>Aperiam adipisci, repellendus cumque ipsam delectus aliquid voluptas dolorem dignissimos!</li>
        <li>Beatae atque facere qui quia autem impedit a libero possimus!</li>
        <li>Ducimus esse cumque enim quisquam necessitatibus, fuga et nemo aperiam.</li>
        <li>Iure inventore libero distinctio accusantium praesentium id ullam harum qui!</li>
        <li>Ullam, fugit! Sequi cumque, dolorem repudiandae tempora aliquam voluptates illum.</li>
        <li>Sequi ea tenetur aut, delectus reprehenderit fugit suscipit velit iure?</li>
        <li>Labore repellendus vero quisquam, voluptas aut sit inventore cum quidem?</li>
        <li>Fugiat velit, quod nesciunt debitis quibusdam rem magnam nobis unde.</li>
      </ul>
    </div>
  </div>
</div>

<?php include '../components/footer.php'; ?>