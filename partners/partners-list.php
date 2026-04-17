<?php 
include '../config.php';

$title = "Ac Services - Near by Partners";
$show_location = true;

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'AC Services',
    'show_back' => true,
    'show_home' => false,
    'show_notifications' => false,
    'show_coins' => false,
    'show_profile' => false,
    'show_cart' => true
  ]
];

include '../components/header.php';
?>

<?php
  $partners = [
    [
      "name" => "Sri Lakshmi Traders",
      "rating" => "4.7",
      "ratings_count" => 48,
      "distance" => "2.1 Km's Away",
      "address" => "Shop No. 12, near Main Road, Whitefield, Bengaluru, Karnataka 560066",
      "verified" => true,
      "image" => "../assets/images/services/ac-01.webp"
    ],
    [
      "name" => "Om Sai Enterprises",
      "rating" => "4.3",
      "ratings_count" => 32,
      "distance" => "3.5 Km's Away",
      "address" => "Shop No. 8, BTM Layout, Bengaluru, Karnataka 560076",
      "verified" => true,
      "image" => "../assets/images/services/ac-02.avif"
    ],
    [
      "name" => "Global HVAC Solutions",
      "rating" => "4.8",
      "ratings_count" => 67,
      "distance" => "1.8 Km's Away",
      "address" => "Electronic City Phase 1, Bengaluru, Karnataka 560100",
      "verified" => true,
      "image" => "../assets/images/services/ac-03.jpeg"
    ],
    [
      "name" => "Bangalore Cooling Systems",
      "rating" => "4.1",
      "ratings_count" => 25,
      "distance" => "4.2 Km's Away",
      "address" => "Rajajinagar 2nd Block, Bengaluru, Karnataka 560010",
      "verified" => true,
      "image" => "../assets/images/services/ac-04.png"
    ],
    [
      "name" => "AirFlow Experts",
      "rating" => "4.9",
      "ratings_count" => 89,
      "distance" => "2.7 Km's Away",
      "address" => "Indiranagar, Bengaluru, Karnataka 560038",
      "verified" => true,
      "image" => "../assets/images/services/ac-05.jpg"
    ],
    [
      "name" => "Urban Chill Services",
      "rating" => "4.2",
      "ratings_count" => 40,
      "distance" => "3.1 Km's Away",
      "address" => "Marathahalli Bridge, Bengaluru, Karnataka 560037",
      "verified" => false,
      "image" => "../assets/images/services/ac-06.avif"
    ],
    [
      "name" => "Cube HVAC Tech",
      "rating" => "4.6",
      "ratings_count" => 54,
      "distance" => "2.9 Km's Away",
      "address" => "Yelahanka New Town, Bengaluru, Karnataka 560064",
      "verified" => false,
      "image" => "../assets/images/services/ac-07.avif"
    ],
    [
      "name" => "Prime Air Solutions",
      "rating" => "4.4",
      "ratings_count" => 36,
      "distance" => "5.0 Km's Away",
      "address" => "Hebbal Kempapura, Bengaluru, Karnataka 560024",
      "verified" => false,
      "image" => "../assets/images/services/ac-08.avif"
    ],
    [
      "name" => "Skyline Cooling",
      "rating" => "4.7",
      "ratings_count" => 61,
      "distance" => "1.5 Km's Away",
      "address" => "Jayanagar 4th Block, Bengaluru, Karnataka 560011",
      "verified" => false,
      "image" => "../assets/images/services/ac-09.jpeg"
    ],
    [
      "name" => "EcoAir Systems",
      "rating" => "4.0",
      "ratings_count" => 22,
      "distance" => "3.8 Km's Away",
      "address" => "Malleshwaram, Bengaluru, Karnataka 560003",
      "verified" => false,
      "image" => "../assets/images/services/ac-10.webp"
    ]
  ];
?>

<section class="my-8">
  <div class="container">
    <div class="grid grid-cols-2 gap-4 mb-8">
      <?php foreach ($partners as $partner): ?>
        
        <a href="./partener-details.php" class="partner-list-card">
          <div class="image relative">
            <img src="<?= $partner['image'] ?>" alt="">

            <?php if ($partner['verified']) : ?>
              <div class="trusted-partner">
                <i class="fa-solid fa-thumbs-up"></i> Verified Partner
              </div>
            <?php endif; ?>
          </div>

          <div class="content">
            <div class="partner-name truncate">
              <?= $partner['name'] ?>
            </div>

            <div class="ratings flex flex-row gap-2">
              <div class="ratings-average">
                <i class="fa-solid fa-star"></i> <?= $partner['rating'] ?>
              </div>
              <div class="ratings-count">
                <?= $partner['ratings_count'] ?> Ratings
              </div>
            </div>
            
            <span class="address line-clamp-2"><?= $partner['address'] ?></span>
            <span class="distance-badge"><?= $partner['distance'] ?></span>
          </div>
        </a>

      <?php endforeach; ?>
    </div>
    <?php include '../components/pagination.php'; ?>
  </div>
</section>

<?php include '../components/footer.php'; ?>