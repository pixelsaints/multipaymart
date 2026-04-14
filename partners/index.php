<?php 
include '../config.php';

$title = "Near by Partners";
$show_location = true;

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'Near by Partners',
    'show_back' => false,
    'show_home' => true,
    'show_notifications' => true,
    'show_coins' => false,
    'show_profile' => false,
    'show_cart' => false
  ]
];

include '../components/header.php';
?>

<?php
$vouchers = [
  [
    "name" => "AC Service",
    "image" => "../assets/images/partner/ac-services.avif",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name" => "Accountants",
    "image" => "../assets/images/partner/accountant.avif",
    "url" => "/partners/partners-list-empty.php"
  ],
  [
    "name" => "Astrologers",
    "image" => "../assets/images/partner/astrology.avif",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name" => "Beauty Spa",
    "image" => "../assets/images/partner/spa.avif",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name" => "Car Services",
    "image" => "../assets/images/partner/car-service.avif",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name" => "Caterers",
    "image" => "../assets/images/partner/catering.avif",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name" => "Clothing",
    "image" => "../assets/images/partner/cloting.avif",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name" => "Computer Services",
    "image" => "../assets/images/partner/computers.avif",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name" => "Coaching Centers",
    "image" => "../assets/images/partner/coaching-centers.webp",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name"    => "Courier Services",
    "image"  => "../assets/images/partner/courier.avif",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name"    => "Dentists",
    "image"  => "../assets/images/partner/dentists.avif",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name"    => "Electricians",
    "image"  => "../assets/images/partner/ele.avif",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name"    => "Event Organizers",
    "image"  => "../assets/images/partner/events.avif",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name"    => "Engineering Services",
    "image"  => "../assets/images/partner/fabricators.avif",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name"    => "Restaurents",
    "image"  => "../assets/images/partner/food.avif",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name"    => "Hospital",
    "image"  => "../assets/images/partner/hospitals.png",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name"    => "Interior Designers",
    "image"  => "../assets/images/partner/home-decor.avif",
    "url" => "/partners/partners-list.php"
  ],
  [
    "name"    => "Jewelers",
    "image"  => "../assets/images/partner/jewelers.avif",
    "url" => "/partners/partners-list.php"
  ]

  // Interior Designers
];
?>

<section class="mt-8">
  <div class="container overflow-x-auto">
    <div class="flex flex-row items-center justify-between">
      <h3 class="font-medium">Popular Categories</h3>
    </div>
    <div class="cards style-1 partners h-scroll-container mt-0">
      <a href="<?php echo BASE_URL?>/food.php" class="card min-w-[140px] bg-gradient-to-b from-orange-100 to-orange-200">
        <img src="../assets/images/partner/food.avif" alt="" class="icon-3d">
        <span>Food</span>
      </a>
      <a href="<?php echo BASE_URL?>/grocery.php" class="card min-w-[140px] bg-gradient-to-b from-indigo-100 to-indigo-200">
        <img src="../assets/images/partner/groceries.avif" alt="" class="icon-3d">
        <span>Groceries</span>
      </a>
      <a href="<?php echo BASE_URL?>/medicines.php" class="card min-w-[140px] bg-gradient-to-b from-blue-100 to-blue-200">
        <img src="../assets/images/partner/medicine.avif" alt="" class="icon-3d">
        <span>Medicine</span>
      </a>
      <a href="<?php echo BASE_URL?>/medicines.php" class="card min-w-[140px] bg-gradient-to-b from-yellow-100 to-yellow-200">
        <img src="../assets/images/partner/taxi-icon.avif" alt="" class="icon-3d taxi">
        <span>Taxi</span>
      </a>
      <a href="<?php echo BASE_URL?>/clothing.php" class="card min-w-[140px] bg-gradient-to-b from-green-100 to-green-200">
        <img src="../assets/images/partner/cloting.avif" alt="" class="icon-3d">
        <span>Clothing</span>
      </a>
    </div>
  </div>
</section>

<section class="search-area pt-4 px-4 -mt-4">
  <div class="flex items-center bg-white border border-slate-200 rounded-full px-4 py-2 focus-within:ring-2 focus-within:ring-blue-500">
    <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <circle cx="11" cy="11" r="8"></circle>
      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
    </svg>
    <input 
      type="text" 
      placeholder="Search for services near your..." 
      class="bg-transparent w-full focus:outline-none text-sm"
    />
  </div>
</section>


<section class="mt-5">
  <div class="container">
    <div class="grid grid-cols-3 gap-x-3 gap-y-3 partners-list mb-10">
      <?php foreach ($vouchers as $voucher): ?>
        <a href="<?= BASE_URL . $voucher['url']; ?>" class="card block">
          
          <div class="image">
            <img src="<?= $voucher['image']; ?>" alt="<?= htmlspecialchars($voucher['name']); ?>">
          </div>
          
          <p class="line-clamp-2"><?= htmlspecialchars($voucher['name']); ?></p>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>



<?php include '../components/footer.php'; ?>