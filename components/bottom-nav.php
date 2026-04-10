<?php $current = $url ?? ''; ?>

<nav class="bottom-nav">
  <a href="<?php echo BASE_URL; ?>/index.php" class="nav-item <?php echo ($current === 'home') ? 'active' : ''; ?>">
    <i class="fa-solid fa-house nav-icon"></i>
    <span>Explore</span>
  </a>
  <a href="<?php echo BASE_URL; ?>/business.php" class="nav-item <?php echo ($current === 'business') ? 'active' : ''; ?>">
    <i class="fa-solid fa-users nav-icon"></i>
    <span>Business</span>
  </a>
  <a href="<?php echo BASE_URL ?>/my-earnings.php" class="nav-item <?php echo ($current === 'my-earnings') ? 'active' : ''; ?>">
    <i class="fa-solid fa-rupee-sign nav-icon"></i>
    <span>My Earnings</span>
  </a>
  <a href="<?php echo BASE_URL ?>/reports.php" class="nav-item <?php echo ($current === 'reports') ? 'active' : ''; ?>">
    <i class="fa-regular fa-file-lines nav-icon"></i>
    <span>Reports</span>
  </a>
  <a href="<?php echo BASE_URL ?>/scan.php" class="nav-item <?php echo ($current === 'scan') ? 'active' : ''; ?>">
    <i class="fa-solid fa-qrcode nav-icon"></i>
    <span>Scan Code</span>
  </a>
</nav>