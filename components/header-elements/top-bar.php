<?php
/**
 * Dynamic Topbar
 * Supports:
 * 1. Simple string style: $topBar_style = "home-header"
 * 2. Array style: 
 *    $topBar_style = [
 *        'page-header' => [
 *         	'top-bar-title' => 'Recharge & Pay Bills',
 *          'show_back' => true,
 *					'show_notifications' => true
 *        ]
 *    ];
 */

// Fallback if not set
$topBar_style = $topBar_style ?? null;

if (is_array($topBar_style) && isset($topBar_style['page-header'])) {
	$current_style = 'page-header';
} elseif (is_string($topBar_style)) {
	$current_style = $topBar_style;
} else {
	$current_style = 'default';
}


// Initialize variables
$title = $title ?? "MultiPay Mart";
$show_back = false;
$show_notifications = true;
// $show_coins =  $show_coins ? false;
// $show_profile = $show_profile ? false;

// Handle array-based style first
if (is_array($topBar_style)) {
	if (isset($topBar_style['page-header'])) {
		$title = $topBar_style['page-header']['top-bar-title'] ?? 'Page';
		$show_back = $topBar_style['page-header']['show_back'] ?? false;
		$show_notifications = $topBar_style['page-header']['show_notifications'] ?? true;
		$show_coins = $topBar_style['page-header']['show_coins'] ?? false;
		$show_profile = $topBar_style['page-header']['show_profile'] ?? false;

		$current_style = 'page-header';
	} else {
		$current_style = 'default';
	}
} 
// Handle string-based style
elseif (is_string($topBar_style)) {
	$current_style = $topBar_style;
	if ($topBar_style === 'page-header') {
		$title = 'Page';
		$show_back = true;
		$show_notifications = true;
	}
}

// Render headers based on current style
switch ($current_style) {
	
	case 'home-header': ?>
		<div class="header">
			<div class="left">
				<a href="javascript(void(0)" class="ham icon-link">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</a>
				<a href="index.php" class="logo flex items-center gap-2">
					<img src="./assets/images/logo.png" alt="">
					<span>MultiPay</span>
				</a>
			</div>
			<div class="right">
				<a href="#" class="rewards icon-link">
					<i class="fa-solid fa-coins"></i>
					<span>100</span>
				</a>
				<a href="#" class="my-account icon-link">
					<i class="fa-solid fa-bell"></i>
				</a>
				<a href="#" class="my-account icon-link">
					<i class="fa-solid fa-user"></i>
				</a>
			</div>
		</div>
	<?php break;

	case 'page-header': ?>
		<div class="header page-header flex items-center justify-between p-4">
			<div class="left">
				<?php if ($show_back): ?>
					<a href="javascript:history.back()" class="back-btn">
						<i class="fa-solid fa-arrow-left"></i>
					</a>
				<?php else : ?>
					<a href="javascript(void(0)" class="ham icon-link">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</a>
				<?php endif; ?>
				<div class="title text-lg font-semibold">
					<?php echo $title; ?>
				</div>
			</div>
			
			<div class="right">
				<?php if($show_coins) : ?>
					<a href="#" class="rewards icon-link">
						<i class="fa-solid fa-coins"></i>
						<span>100</span>
					</a>
				<?php endif; ?>

				<?php if ($show_profile): ?>
					<a href="#" class="my-account icon-link">
						<i class="fa-solid fa-user"></i>
					</a>
				<?php endif; ?>

				<?php if ($show_notifications): ?>
					<a href="#" class="my-account icon-link">
						<i class="fa-solid fa-bell"></i>
					</a>
				<?php endif; ?>
			</div>
		</div>
	<?php break;

	case 'default':
	default: ?>

<?php } ?>