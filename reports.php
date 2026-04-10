<?php 
include 'config.php';

$title = "Reports";
$url = 'reports';

$topBar_style = [
  'page-header' => [
    'top-bar-title' => 'Reports',
    'show_back' => false,
    'show_home' => true,
    'show_notifications' => true,
    'show_coins' => true,
    'show_profile' => false
  ]
];
include 'components/header.php';
?>

<section class="my-6">
  <div class="container">
    <div class="chart-card">
      <canvas id="myChart"></canvas>
    </div>
  </div>
</section>

<section class="my-8">
  <div class="container">
    <div class="report-links">
      <a href="recharge_bbps_report.php" class="report-link">
        <div class="report-content">
          <div class="report-title">Recharge &amp; BBPS Report</div>
          <div class="report-desc">View all recharge and bill payment transactions</div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow"></i>
      </a>

      <a href="deposit_report.php" class="report-link">
        <div class="report-content">
          <div class="report-title">Deposit Report</div>
          <div class="report-desc">View all deposit transactions</div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow"></i>
      </a>

      <a href="withdrawal_report.php" class="report-link">
        <div class="report-content">
          <div class="report-title">Withdrawal Report</div>
          <div class="report-desc">View all withdrawal transactions</div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow"></i>
      </a>

      <a href="cashback_report.php" class="report-link">
        <div class="report-content">
          <div class="report-title">CashBack Report</div>
          <div class="report-desc">View all cashback transactions</div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow"></i>
      </a>

      <a href="level_cashback_report.php" class="report-link">
        <div class="report-content">
          <div class="report-title">Level Cashback Report</div>
          <div class="report-desc">View all level income transactions</div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow"></i>
      </a>

      <a href="user_team_details.php" class="report-link">
        <div class="report-content">
          <div class="report-title">Team Details</div>
          <div class="report-desc">Level-wise downline summary: members, business, income &amp; RP</div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow"></i>
      </a>

      <a href="bonus_cashback_report.php" class="report-link">
        <div class="report-content">
          <div class="report-title">Bonus Cashback Report</div>
          <div class="report-desc">View all bonus cashback transactions</div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow"></i>
      </a>

      <a href="shopping_report.php" class="report-link">
        <div class="report-content">
          <div class="report-title">Shopping Report</div>
          <div class="report-desc">View all shopping transactions</div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow"></i>
      </a>

      <a href="statement_report.php" class="report-link">
        <div class="report-content">
          <div class="report-title">Account Statement</div>
          <div class="report-desc">View your complete account statement</div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow"></i>
      </a>

      <a href="daybook.php" class="report-link">
        <div class="report-content">
          <div class="report-title">User Day Book Report</div>
          <div class="report-desc">View all category wise transactions</div>
        </div>
        <i class="fa-solid fa-chevron-right report-arrow"></i>
      </a>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Deposits', 'Withdrawals', 'Cashbcaks', 'Shopping', 'Payments'],
      datasets: [{
        data: [12, 19, 6, 9, 3],
        backgroundColor: [
          '#268aea', // pri-500
          '#fdba74', // sec-500
          '#16a34a', // pri-400
          '#06b6d4', // sec-400
          '#6d28d9'  // pri-700
        ],
        grid: { display: false },
      }]
    },
    options: {
      scales: {
        y: {
          ticks: { display: false },
          // grid: { display: false },
          border: {display: false }
        },
        x: {
          grid: { display: false },
          border: {display: false }
        }
      },

      plugins: {
        title: {
          display: false
        },

        legend: {
          display: false
        },
        datalabels: {
          color: '#fff',
          font: {
            size: 14,
            weight: 'bold'
          }
        }
      }
    }
  });
</script>


<?php include 'components/footer.php'; ?>