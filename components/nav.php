<?php
$current = $_GET['url'] ?? 'home';
?>

<div class="container">
<nav>
  <ul class="flex flex-col">
    <li class="<?php echo ($current === 'home') ? 'active' : ''; ?>">
      <a href="<?php echo BASE_URL; ?>">Home</a>
    </li>

    <li class="<?php echo ($current === 'about') ? 'active' : ''; ?>">
      <a href="<?php echo BASE_URL; ?>about">About</a>
    </li>

    <li class="<?php echo ($current === 'contact') ? 'active' : ''; ?>">
      <a href="<?php echo BASE_URL; ?>contact">Contact</a>
    </li>
  </ul>
</nav>
</div>