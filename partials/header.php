<?php
/**
 * Shared site header.
 * Set these before including:
 *   $pageTitle       (string)  – <title> text
 *   $pageDescription (string)  – meta description
 *   $activeNav       (string)  – one of: shop | benefits | learn | about
 *   $bodyClass       (string)  – optional extra class on <body>
 */
$pageTitle       = $pageTitle       ?? 'Evia | Daily nutrition, made simple';
$pageDescription = $pageDescription ?? 'One ounce. Ten grams of fibre from three carefully selected sources. Tear, drink, done.';
$activeNav       = $activeNav       ?? '';
$bodyClass       = $bodyClass       ?? '';

$nav = [
    'shop'     => ['label' => 'Shop',     'href' => 'shop.php'],
    'benefits' => ['label' => 'Benefits', 'href' => 'benefits.php'],
    'science'  => ['label' => 'Science',  'href' => 'science.php'],
    'learn'    => ['label' => 'Learn',    'href' => 'learn.php'],
    'about'    => ['label' => 'About',    'href' => 'about.php'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body<?= $bodyClass ? ' class="' . htmlspecialchars($bodyClass) . '"' : '' ?>>

    <!-- Top Announcement Bar -->
    <div class="promo-bar">
        <span>Free shipping on orders over $50 | Subscribe &amp; save 15%</span>
    </div>

    <!-- Sticky Header Navigation -->
    <header class="main-header">
        <div class="container">
            <a href="index.php" class="logo">
                <img src="assets/images/evia-logo.svg" alt="Evia Logo">
            </a>

            <nav>
                <ul class="nav-links">
                    <?php foreach ($nav as $key => $item): ?>
                        <li><a href="<?= $item['href'] ?>"<?= $activeNav === $key ? ' class="active"' : '' ?>><?= $item['label'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <div class="header-icons">
                <a href="faq.php#account" aria-label="Profile">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </a>
                <a href="learn.php" aria-label="Search">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </a>
                <a href="shop.php#subscribe" aria-label="Cart" class="cart-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                    <span class="cart-count">0</span>
                </a>

                <!-- Mobile menu toggle -->
                <button class="nav-toggle" id="navToggle" aria-label="Open menu" aria-expanded="false">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>

        <!-- Mobile slide-out nav -->
        <div class="mobile-nav" id="mobileNav">
            <ul>
                <?php foreach ($nav as $key => $item): ?>
                    <li><a href="<?= $item['href'] ?>"<?= $activeNav === $key ? ' class="active"' : '' ?>><?= $item['label'] ?></a></li>
                <?php endforeach; ?>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </header>
