<?php 
include 'config.php';

$title = "Business";
$url = 'business';

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'Business',
    'show_back' => true,
    'show_notifications' => true,
    'show_coins' => true,
    'show_profile' => false
  ]
];
include 'components/header.php';
?>

<section class="my-6">
  <div class="container">
    <div class="bal-card">
      <div class="w-full flex flex-row justify-between items-center">
        <div class="total-amount flex flex-row items-center">
          <div class="total-amount-text">Estimated Balance</div>
          <div class="total-amount-number">₹ 3,500.00</div>
        </div>
      </div>
      <div class="user-info">
        
        <div class="flex flex-row items-center justify-between">
          <div class="w-[50%]">
            <p class="user-info-name">Jacob Reed</p>
            <p class="user-info-contact">jacob.reed@gmail.com</p>
          </div>
          <a href="#" class="user-info-id flex flex-col w-[35%]">
            <!-- <span class="refer">Refer & Earn</span> -->
            <span>MW9215939 <i class="fa-solid fa-copy"></i></span>
          </a>
        </div>
      </div>

      <div class="logo">
        <img src="./assets/images/logo-white.png" alt="">
      </div>
    </div>
    <div class="bal-card-button">
      <a class="font-semibold" href="<?php echo BASE_URL; ?>/add-member.php">
        <!-- <img src="./assets/images/svg/users.svg" alt=""> -->
         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="fill-blue-500">
          <g>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.554137 13.5756C1.34525 11.4759 3.36866 9.978 5.74997 9.978C8.13128 9.978 10.1547 11.4759 10.9458 13.5756C11.3059 14.5315 10.7272 15.5154 9.84596 15.8102C8.82613 16.1509 7.42657 16.477 5.75097 16.477C4.0754 16.477 2.67527 16.151 1.65458 15.8104C0.771586 15.5163 0.194851 14.5312 0.554137 13.5756Z" ></path> 
            <path d="M12.5523 13.9772C13.9847 13.9159 15.1901 13.6248 16.096 13.3222C16.9772 13.0274 17.5559 12.0435 17.1958 11.0875C16.4047 8.98793 14.3813 7.48999 12 7.48999C10.5581 7.48999 9.24737 8.03921 8.26202 8.93866C10.147 9.65809 11.6398 11.1632 12.3495 13.0467C12.4675 13.3601 12.5329 13.6723 12.5523 13.9772Z"  fill-opacity="0.4">
            </path> 
            <path d="M5.75 8.50049C6.99267 8.50049 8 7.49361 8 6.25049C8 5.00736 6.99267 4.00049 5.75 4.00049C4.50733 4.00049 3.5 5.00736 3.5 6.25049C3.5 7.49361 4.50733 8.50049 5.75 8.50049Z" ></path> 
            <path d="M12 6.00049C13.2427 6.00049 14.25 4.99361 14.25 3.75049C14.25 2.50736 13.2427 1.50049 12 1.50049C10.7573 1.50049 9.75 2.50736 9.75 3.75049C9.75 4.99361 10.7573 6.00049 12 6.00049Z"  fill-opacity="0.4"></path>
          </g>
        </svg>
        Add Member
      </a>

      <a class="font-semibold" href="<?php echo BASE_URL; ?>/refer.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="fill-green-500">
          <g>
            <path d="M18 9.25V8.25C18 7.285 17.215 6.5 16.25 6.5H11.75C10.785 6.5 10 7.285 10 8.25V9.25C10 9.388 10.02 9.52001 10.05 9.64801C9.43299 9.91901 9 10.534 9 11.25V12.25C9 12.966 9.43299 13.581 10.05 13.852C10.02 13.98 10 14.113 10 14.25V15.25C10 16.215 10.785 17 11.75 17H16.25C17.215 17 18 16.215 18 15.25V14.25C18 13.534 17.567 12.919 16.95 12.648C16.98 12.52 17 12.387 17 12.25V11.25C17 11.112 16.98 10.98 16.95 10.852C17.567 10.581 18 9.966 18 9.25ZM11.5 8.25C11.5 8.112 11.612 8 11.75 8H16.25C16.388 8 16.5 8.112 16.5 8.25V9.25C16.5 9.388 16.388 9.5 16.25 9.5H11.75C11.612 9.5 11.5 9.388 11.5 9.25V8.25ZM16.5 15.25C16.5 15.388 16.388 15.5 16.25 15.5H11.75C11.612 15.5 11.5 15.388 11.5 15.25V14.25C11.5 14.112 11.612 14 11.75 14H16.25C16.388 14 16.5 14.112 16.5 14.25V15.25Z"></path> 
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 3.75C1 2.23079 2.23079 1 3.75 1H14.25C15.7692 1 17 2.23079 17 3.75V5.08716C16.7592 5.03016 16.5081 5 16.25 5H11.75C11.3845 5 11.033 5.06051 10.7049 5.17203C10.2582 4.75519 9.65872 4.5 9 4.5C7.62 4.5 6.5 5.62 6.5 7C6.5 8.07096 7.17454 8.98534 8.12167 9.34116C7.73181 9.87549 7.5 10.5342 7.5 11.25V12.25C7.5 12.5085 7.53023 12.7596 7.58723 13H3.75C2.23079 13 1 11.7692 1 10.25V3.75ZM5 7C5 7.552 4.552 8 4 8C3.448 8 3 7.552 3 7C3 6.448 3.448 6 4 6C4.552 6 5 6.448 5 7Z" fill-opacity="0.6"></path>
          </g>
          </svg>
        Refer & Earn
      </a>
    </div>
  </div>
</section>

<section class="my-8">
  <div class="container">
    <div class="flex flex-row gap-3 items-center justify-between">
      <div class="depo-card w-[50%]">
        <div class="flex flex-col mb-5">
          <span class="text-md text-slate-600 mt-2 mb-0">Deposit</span>
          <span class="text-xl mt-2 font-semibold text-sec-400">₹ 2,500.00</span>
        </div>
        <div class="btn-group flex flex-row justify-start items-center gap-3">
          <a class="btn" href="#">Withdraw</a>
          <a class="btn" href="#">Deposit</a>
        </div>
      </div>

      <div class="depo-card w-[50%]">
        <div class="flex flex-col mb-5">
          <span class="text-md text-slate-600 mt-2 mb-0">Current Cashback</span>
          <span class="text-xl mt-2 font-semibold text-sec-400">₹ 500.00</span>
        </div>
        <div class="btn-group flex flex-row justify-start items-center gap-3">
          <a class="btn" href="#">Withdraw</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-8">
  <div class="container">
    <div class="kyc-card">
      <div class="flex flex-row items-center justify-start">
        <img src="./assets/images/icons/verified.png" alt="">
        <div class="ml-4">
          <h3 class="mb-2">KYC Verification</h3>
          <span class="flex items-center justify-center py-[3px] pl-2 pr-3 w-fit bg-emerald-100/80 text-emerald-600 border border-emerald-300 rounded-md"><i class="fa-solid fa-circle-check mr-2"></i> Completed</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-8">
  <div class="container">
    <div class="cashback-card">
      <div class="flex items-center p-4 border-b border-slate-300">
        <div class="flex items-center justify-center p-2 rounded-full bg-pri-100 border border-pri-200 w-[56px] h-[56px]">
          <i class="fa-solid fa-coins text-[24px] text-pri-600"></i>
        </div>
        <div class="flex flex-col ml-4">
          <div class="text-[14px] text-slate-500">Current Cashback Point</div>
          <div class="leading-none mt-1 text-[24px] font-semibold text-slate-800">124.00</div>
        </div>
      </div>

      <div class="flex items-center p-4 border-b border-slate-300">
        <div class="flex items-center justify-center p-2 rounded-full bg-pri-100 border border-pri-200 w-[56px] h-[56px]">
          <i class="fa-solid fa-coins text-[24px] text-pri-600"></i>
        </div>
        <div class="flex flex-col ml-4">
          <div class="text-[14px] text-slate-500">Current Level Cashback</div>
          <div class="leading-none mt-1 text-[24px] font-semibold text-slate-800">124.00</div>
        </div>
      </div>

      <div class="flex items-center p-4">
        <div class="flex items-center justify-center p-2 rounded-full bg-pri-100 border border-pri-200 w-[56px] h-[56px]">
          <i class="fa-solid fa-coins text-[24px] text-pri-600"></i>
        </div>
        <div class="flex flex-col ml-4">
          <div class="text-[14px] text-slate-500">Total Earned Cashback</div>
          <div class="leading-none mt-1 text-[24px] font-semibold text-slate-800">₹1500.00</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-8">
  <div class="container">
    <div class="bonus-card">
      <div class="flex flex-row items-center justify-between mb-6 border-b border-teal-400 pb-3">
        <span class="text-[14px] font-semibold text-teal-800">Bonus Cashback</span>
        <span class="text-[14px] font-semibold text-teal-800">30-day track</span>
      </div>

      <span class="note text-[13px] opacity-[0.6]">Bands: Tier A ₹ 1,01,001 - ₹ 5,99,999 (+25%) · Tier B above ₹ 6,00,000 (+50%).</span>

      <h3 class="text-[32px] font-medium leading-none text-teal-800 mt-4 mb-1">₹ 100.00</h3>
      <p class="mb-6 text-teal-800">Today’s min. deposit (tracked)</p>

      <div class="flex flex-row items-center justify-between mt-4 border-t border-teal-400 pt-3">
        <span class="text-[14px] font-semibold text-teal-800">Bonus received (lifetime)</span>
        <span class="text-[14px] font-semibold text-teal-800">₹ 1500.00</span>
      </div>
    </div>
  </div>
</section>

<section class="my-8">
  <div class="container">
    <div class="flex flex-row mb-5">
      <h3 class="text-[18px] font-medium"><i class="fa-solid fa-shop mr-2"></i> Business Revenue</h3>
    </div>

    <div class="cashback-card">
      <div class="flex items-center p-4 border-b border-slate-300">
        <div class="flex items-center justify-center p-2 rounded-full bg-gradient-to-b from-green-100/30 to-green-200/80 border border-green-200 w-[56px] h-[56px]">
          <i class="fa-solid fa-briefcase text-[24px] text-green-600"></i>
        </div>
        <div class="flex flex-col ml-4">
          <div class="text-[14px] text-slate-500">Direct Business</div>
          <div class="leading-none mt-1 text-[24px] font-semibold text-slate-800">₹ 124.00</div>
        </div>
      </div>

      <div class="flex items-center p-4 border-b border-slate-300">
        <div class="flex items-center justify-center p-2 rounded-full bg-gradient-to-b from-amber-100/30 to-amber-200/80 border border-amber-200 w-[56px] h-[56px]">
          <i class="fa-brands fa-web-awesome text-[24px] text-amber-500"></i>
        </div>
        <div class="flex flex-col ml-4">
          <div class="text-[14px] text-slate-500">Sponsor Business</div>
          <div class="leading-none mt-1 text-[24px] font-semibold text-slate-800">₹ 124.00</div>
        </div>
      </div>

      <div class="flex items-center p-4">
        <div class="flex items-center justify-center p-2 rounded-full bg-gradient-to-b from-orange-100/30 to-orange-200/80 border border-orange-200 w-[56px] h-[56px]">
          <i class="fa-solid fa-id-card-clip text-[24px] text-orange-600"></i>
        </div>
        <div class="flex flex-col ml-4">
          <div class="text-[14px] text-slate-500">Self Business</div>
          <div class="leading-none mt-1 text-[24px] font-semibold text-slate-800">
            ₹ 1500.00
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-8">
  <div class="container">
    <div class="flex flex-row mb-5">
      <h3 class="text-[18px] font-medium"><i class="fa-solid fa-users mr-2"></i> Team</h3>
    </div>

    <div class="team-card">
      <h4 class="mb-3">Direct Team Members</h4>
      <div class="grid grid-flow-col grid-cols-3 gap-3 w-full pb-6 mb-4 border-b border-pri-200">
        <a href="#" class="flex flex-col items-center">
          <h3>32</h3>
          <span>Total</span>
        </a>
        <a href="#" class="flex flex-col items-center">
          <h3>20</h3>
          <span>Active</span>
        </a>
        <a href="#" class="flex flex-col items-center">
          <h3>12</h3>
          <span>Inactive</span>
        </a>
      </div>

      <h4 class="mb-3">Sponsor Teams</h4>
      <div class="grid grid-flow-col grid-cols-3 gap-3 w-full">
        <a href="#" class="flex flex-col items-center">
          <h3>32</h3>
          <span>Total</span>
        </a>
        <a href="#" class="flex flex-col items-center">
          <h3>16</h3>
          <span>Active</span>
        </a>
        <a href="#" class="flex flex-col items-center">
          <h3>16</h3>
          <span>Inactive</span>
        </a>
      </div>
    </div>
  </div>
</section> 


<?php include 'components/footer.php'; ?>