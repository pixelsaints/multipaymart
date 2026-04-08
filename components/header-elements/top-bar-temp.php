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

// Handle array-based style first
if (is_array($topBar_style)) {
	if (isset($topBar_style['page-header'])) {
		$title = $topBar_style['page-header']['top-bar-title'] ?? 'Page';
		$show_back = $topBar_style['page-header']['show_back'] ?? false;
		$show_notifications = $topBar_style['page-header']['show_notifications'] ?? true;
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
				<a href="javascript(void(0)" class="ham">

				</a>
				<a href="index.php" class="logo flex items-center gap-2">
					<img src="./assets/images/logo.png" class="w-7" alt="">
					<span>MultiPay</span>
				</a>
			</div>
			<div class="right">
				<a href="#" class="rewards px-2 py-1 rounded">
					<span>100</span>
					<i class="fa-solid fa-coins"></i>
				</a>
				<a href="#" class="my-account">
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

					<div class="title text-lg font-semibold">
						<?php echo $title; ?>
					</div>
				<?php endif; ?>
			</div>

			<?php if ($show_notifications): ?>
				<a href="#" class="notifications relative">
					<i class="fa-solid fa-bell"></i>
				</a>
			<?php endif; ?>
		</div>
	<?php break;

	case 'default':
	default: ?>
	<div class="header flex items-center justify-between p-4 bg-gray-100 shadow-md">
		<a href="javascript:history.back()" class="back-btn">
			<i class="fa-solid fa-arrow-left"></i>
		</a>
		<div class="title text-lg font-semibold pl-4">
			<?php echo $title; ?>
		</div>

		<div class="account flex items-center gap-4">
			<a href="#" class="rewards bg-yellow-100 px-2 py-1 rounded">
				<span>100</span>
				<i class="fa-solid fa-coins"></i>
			</a>
			<a href="#" class="my-account">
				<i class="fa-solid fa-user"></i>
			</a>
		</div>
	</div>

<?php } ?>