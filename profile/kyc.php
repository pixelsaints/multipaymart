<?php 
include '../config.php';

$title = "KYC Verfication";

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'KYC Verfication',
    'show_back' => false,
    'show_home' => true,
    'show_notifications' => true,
    'show_coins' => true,
    'show_profile' => false,
    'show_cart' => false
  ]
];

include '../components/header.php';
?>

<section class="my-8">

  <div class="px-4">
    <!-- Step Header -->
    <div class="my-8  flex flex-col text-center">
      <h2 class="text-xl font-medium mb-1">KYC Verification</h2>
      <p class="text-sm text-gray-500">Complete your verification to unlock all features</p>
    </div>

    <!-- Steps -->
    <div class="flex items-start gap-3 mb-6 px-4">
      <div class="flex flex-col items-center gap-2 text-blue-600">
        <div class="w-6 h-6 rounded-full bg-blue-600 text-white text-xs flex items-center justify-center">✓</div>
        <span class="text-sm font-medium">Basic Info</span>
      </div>
      <div class="flex-1 mt-2 h-[2px] bg-gray-200"></div>
      <div class="flex flex-col items-center gap-2 text-gray-400">
        <div class="w-6 h-6 rounded-full bg-gray-300 text-white text-xs flex items-center justify-center">2</div>
        <span class="text-sm font-medium">Upload Docs</span>
      </div>
      <div class="flex-1 mt-2 h-[2px] bg-gray-200"></div>
      <div class="flex flex-col items-center gap-2 text-gray-400">
        <div class="w-6 h-6 rounded-full bg-gray-300 text-white text-xs flex items-center justify-center">3</div>
        <span class="text-sm font-medium">Review</span>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="max-w-xl mx-auto bg-white rounded-2xl shadow p-6">

      <!-- Form -->
      <form data-kyc-form>
        <!-- STEP 1 -->
        <div class="step" data-step="1">
          <h2 class="text-lg font-bold mb-4">Basic Info</h2>

          <label for="user-name" class="flex flex-col mb-5">
            <span class="text-[14px] text-slate-500 mb-2">Full Name</span>
            <input id="user-name" type="text" class="text-[15px] p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded transition" value="Brayden Barnes">
          </label>

          <label for="user-name" class="flex flex-col mb-5">
            <span class="text-[14px] text-slate-500 mb-2">Mobile Number</span>
            <input id="user-name" type="text" class="text-[15px] p-3 text-slate-800 placeholeder-slate-400 disabled:bg-slate-100 border border-slate-300 focus:border-slate-400 rounded transition" value="8431397925" disabled>
          </label>

          <label for="user-name" class="flex flex-col mb-8">
            <span class="text-[14px] text-slate-500 mb-2">Mobile Number</span>
            <input id="user-name" type="text" class="text-[15px] p-3 text-slate-800 placeholeder-slate-400 disabled:bg-slate-100 border border-slate-300 focus:border-slate-400 rounded transition" value="BraydenBarnes@gmail.com" disabled>
          </label>

          <div class="flex flex-row justify-center">
            <button class="nextBtn bg-pri-600 text-white px-4 py-2 rounded w-[30%]">Next</button>
          </div>
        </div>

        <!-- STEP 2 -->
        <div class="step hidden" data-step="2">
          
          <!-- Adhaar Card  -->
          <div class="mb-6">
            
            <label class="text-md font-medium text-gray-700">Upload Adhar Card</label>

            <label for="user-name" class="flex flex-col my-4">
              <span class="text-[14px] text-slate-500 mb-2">Adhar Card Number</span>
              <input id="user-name" type="text" class="text-[15px] p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded transition" value="">
            </label>

            <div class="flex flex-row gap-4">
              <label class="mt-2 flex flex-col items-center justify-center border-2 border-dashed rounded-lg px-4 py-5 cursor-pointer hover:bg-gray-50">
                <span class="text-[16px] mb-1 text-blue-500">Front Side</span>
                <span class="text-[12px] text-gray-500 text-center">Click to upload or drag & drop</span>
                <input type="file" class="hidden">
              </label>

              <label class="mt-2 flex flex-col items-center justify-center border-2 border-dashed rounded-lg px-4 py-5 cursor-pointer hover:bg-gray-50">
                <span class="text-[16px] mb-1 text-blue-500">Back Side</span>
                <span class="text-[12px] text-gray-500 text-center">Click to upload or drag & drop</span>
                <input type="file" class="hidden">
              </label>
            </div>
          </div>

          <!-- PAN Card -->
          <div class="mb-6">
            <label class="text-md font-medium text-gray-700">Upload PAN Card</label>

            <label for="user-name" class="flex flex-col my-4">
              <span class="text-[14px] text-slate-500 mb-2">PAN Card Number</span>
              <input id="user-name" type="text" class="text-[15px] p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded transition" value="">
            </label>

            <div class="flex gap-4">
              <label class="mt-2 w-full flex flex-col items-center justify-center border-2 border-dashed rounded-lg px-4 py-5 cursor-pointer hover:bg-gray-50">
                <span class="text-[16px] mb-1 text-blue-500">Front Side</span>
                <span class="text-[12px] text-gray-500 text-center">Click to upload or drag & drop</span>
                <input type="file" class="hidden">
              </label>
            </div>
          </div>

          <!-- Selfie Upload -->
          <div class="mb-6">
            <label class="text-md font-medium text-gray-700">Upload Selfie</label>
            <label class="mt-2 flex flex-col items-center justify-center border-2 border-dashed rounded-lg p-4 cursor-pointer hover:bg-gray-50">
              <span class="text-sm text-gray-500">Upload a clear selfie</span>
              <input type="file" class="hidden">
            </label>
          </div>

          <div class="flex flex-row justify-center gap-2">
            <button class="prevBtn px-4 py-2 border rounded-lg w-[30%]">Back</button>
            <button class="nextBtn bg-blue-600 text-white px-4 py-2 rounded-lg w-[30%]">Next</button>
          </div>
        </div>

        <!-- STEP 3 -->
        <div class="step hidden" data-step="3">
          <h2 class="text-lg font-medium">Review & Submit</h2>
          <p class="text-slate-400 mb-6">Check your details before submitting.</p>
          
          <div class="divide-y divide-dashed">

            <div class="pb-6">
              <!-- Adhaar Card  -->
              <div class="mb-0">
                <label for="user-name" class="flex flex-col my-4">
                  <span class="text-[14px] text-slate-500 mb-2">Adhar Card Number</span>
                  <input 
                    id="user-name"
                    type="text" 
                    class="text-[15px] p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded transition disabled:bg-slate-100" 
                    value="4563 5566 5660" 
                    disabled
                  >
                </label>

                <div class="flex flex-row gap-4">
                  <label class="mt-2 flex flex-col items-center justify-center border-2 border-dashed rounded-lg p-2 cursor-pointer hover:bg-gray-50">
                    <img src="../assets/images/adhar-front.png" alt="">
                  </label>

                  <label class="mt-2 flex flex-col items-center justify-center border-2 border-dashed rounded-lg p-2 cursor-pointer hover:bg-gray-50">
                    <img src="../assets/images/adhar-back.png" alt="">
                  </label>
                </div>
              </div>
            </div>

            <div class="py-6">
              <!-- PAN Card -->
              <div class="mb-0">
                <label for="user-name" class="flex flex-col mb-4">
                  <span class="text-[14px] text-slate-500 mb-2">PAN Card Number</span>
                  <input 
                    id="user-name"
                    type="text" 
                    class="text-[15px] p-3 text-slate-800 placeholeder-slate-400 border border-slate-300 focus:border-slate-400 rounded transition disabled:bg-slate-100" 
                    value="DAJPC4150P" 
                    disabled
                  >
                </label>

                <div class="flex gap-4">
                  <label class="mt-2 w-full flex flex-col items-center justify-center border-2 border-dashed rounded-lg p-2 cursor-pointer hover:bg-gray-50">
                    <img src="../assets/images/sample-pan-card.jpg" alt="">
                  </label>
                </div>
              </div>
            </div>

            <!-- Selfie Upload -->
            <div class="pt-6 pb-8">
              <label class="text-md font-medium text-gray-700">Selfie</label>
              <label class="mt-2 flex flex-col items-center justify-center border-2 border-dashed rounded-lg p-2 cursor-pointer hover:bg-gray-50">
                <img src="../assets/images/64.jpg" alt="">
                
              </label>
            </div>
          </div>

          <div class="flex flex-row justify-center gap-2">
            <button class="prevBtn px-4 py-2 border rounded w-[30%]">Back</button>
            <button class="bg-green-600 text-white px-4 py-2 rounded w-[30%]">Submit</button>
          </div>
        </div>

      </form>

    </div>
  </div>
</section>



<?php include '../components/footer.php';?>