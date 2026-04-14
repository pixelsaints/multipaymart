<?php 
include '../config.php';

$title = "AC Services - Near by partners";
$show_location = true;

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'Global Air Condition & Refrigerators',
    'show_back' => true,
    'show_home' => false,
    'show_notifications' => true,
    'show_coins' => false,
    'show_profile' => true,
    'show_cart' => false
  ]
];

include '../components/header.php'
?>

<section class="mt-6 mb-0 relative">
  <div class="partner-detail z-20">
    <div class="container">
      <div class="partner-list-card">
        <div class="image relative">
          <img src="../assets/images/services/ac-01.webp" alt="">
        </div>

        <div class="content">
          <div class="partner-name truncate">Global Air Condition & Refrigerators</div>

          <div class="ratings flex flex-row gap-2">
            <div class="ratings-average">
              <i class="fa-solid fa-star"></i> 4.9
            </div>
            <div class="ratings-count">32 Ratings</div>
          </div>
          
          <span class="address line-clamp-2">Shop No. 12, near Main Road, Whitefield, Bengaluru, Karnataka 560066</span>
          
          <div class="flex flex-row items-center justify-between">
            <span class="distance-badge">2.1 km's away</span>

            <div class="price text-green-800 p-2 leading-none bg-green-200 text-[12px] rounded">
              Starting @ ₹599.00
            </div>
          </div>

          <div class="flex flex-row items-center justify-between gap-4 mt-6">
            <a href="#" class="px-2 py-[5px] rounde flex flex-row items-center justify-center w-full bg-pri-500 text-pri-50 text-center rounded font-medium gap-3"> <i class="fa-brands fa-whatsapp"></i> Send Enquiry</a>
            <a href="#" class="px-6 py-[5px] rounde flex flex-row justify-center items-center w-fit bg-white-500 text-slare-800 text-center rounded font-medium gap-3 border border-slate-200"><i class="fa-solid fa-share-nodes"></i> Share</a>
          </div>
        </div>
      </div>
    </div>

    <!-- tab navs -->
    <div class="sticky-links mx-4 mb-6 p-4 bg-white sticky top-[60px] z-10 shadow-sm border-b border-l border-r border-slate-300">
      <div class="flex flex-row items-center justify-between gap-4">
        <a class="text-[14px] font-medium" href="#overview"><span>Overview</span></a>
        <a class="text-[14px] font-medium" href="#services"><span>Services</span></a>
        <a class="text-[14px] font-medium" href="#reviews"><span>Reviews</span></a>
        <a class="text-[14px] font-medium" href="#location"><span>Location</span></a>
      </div>
    </div>

    <!-- Overview -->
    <div id="overview" class="scroll-mt-[140px]">
      <div class="container">
        <h3 class="mb-4 text-[18px] text-slate-900 font-medium">Overview</h3>

        <div class="mt-4 mb-8 p-4 bg-white border border-slate-200 rounded-lg">
          <p class="leading-[1.8] text-slate-600 text-[15px]">Global Air Condition & Refrigerators brings over 10+ years of industry experience in delivering reliable cooling solutions. Specializing in installation, servicing, and maintenance of air conditioners and refrigeration systems, the team is known for quality workmanship, timely service, and customer-first support.</p>
        </div>
      </div>
    </div>

    <!-- Services -->
    <div id="services" class="scroll-mt-[140px]">
      <div class="container">
        <h3 class="mb-4 text-[18px] text-slate-900 font-medium">Services offered</h3>

        <div class="mt-4 mb-8 p-4 bg-white border border-slate-200 rounded-lg">
          <div class="flex flex-row flex-wrap gap-2">
            <div class=" text-[13px] px-3 py-2 rounded-3xl bg-slate-50 border border-slate-300 text-slate-800 font-medium">Foam-jet AC service</div>
            <div class=" text-[13px] px-3 py-2 rounded-3xl bg-slate-50 border border-slate-300 text-slate-800 font-medium">Repair & Gas Refill</div>
            <div class=" text-[13px] px-3 py-2 rounded-3xl bg-slate-50 border border-slate-300 text-slate-800 font-medium">Part Replacements</div>
            <div class=" text-[13px] px-3 py-2 rounded-3xl bg-slate-50 border border-slate-300 text-slate-800 font-medium">Ductwork Cleaning</div>
            <div class=" text-[13px] px-3 py-2 rounded-3xl bg-slate-50 border border-slate-300 text-slate-800 font-medium">Deep Cleaning</div>
            <div class=" text-[13px] px-3 py-2 rounded-3xl bg-slate-50 border border-slate-300 text-slate-800 font-medium">Installation</div>
            <div class=" text-[13px] px-3 py-2 rounded-3xl bg-slate-50 border border-slate-300 text-slate-800 font-medium">Maintainance</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Reviews -->
    <div id="reviews" class="scroll-mt-[140px]">
      <div class="container">
        <div class="flex flex-row items-center justify-between mb-4">
          <h3 class="text-[18px] text-slate-900 font-medium">43 Customer Reviews</h3>
          <a href="#" class="more-link">View All</a>
        </div>
        <div class="mt-4 mb-8 bg-white border border-slate-200 rounded-lg">
          <?php include './reviews.php'; ?>
        </div>
      </div>
    </div>

    <!-- Location -->
    <div id="location" class="my-8 scroll-mt-[140px]">
      <div class="container">
        <h3 class="mb-4 text-[18px] text-slate-900 font-medium">Location</h3>
        <div class="bg-white border border-slate-200 rounded-lg p-4 mt-4 mb-8">
          <iframe class="w-full aspect-video" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.596908616309!2d77.77907119999999!3d12.9336092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae0da6324a65ab%3A0xa04266fd00685454!2s12%2C%20Main%20Rd%2C%20Bengaluru%2C%20Karnataka%20560087!5e0!3m2!1sen!2sin!4v1776077490122!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include '../components/footer.php'; ?>