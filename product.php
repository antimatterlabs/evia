<?php
$pageTitle       = 'Daily Fibre | Evia';
$pageDescription = '10g of fibre from three carefully selected sources, in a 10-second daily shot. Tear, drink, done.';
$activeNav       = 'shop';
include 'partials/header.php';
?>

<div class="container" style="padding-top:24px;">
    <div class="breadcrumb">
        <a href="index.php">Home</a><span>/</span><a href="shop.php">Shop</a><span>/</span>Daily Fibre
    </div>
</div>

<section class="container">
    <div class="product-detail">

        <!-- Gallery -->
        <div class="product-gallery">
            <div class="main-img">
                <img id="mainImage" src="assets/images/evia_fiber_box.png" alt="Evia Daily Fibre box">
            </div>
            <div class="product-thumbs">
                <div class="product-thumb active" data-img="assets/images/evia_fiber_box.png"><img src="assets/images/evia_fiber_box.png" alt="Daily Fibre box"></div>
                <div class="product-thumb" data-img="assets/images/evia_fiber_pouch.png"><img src="assets/images/evia_fiber_pouch.png" alt="Daily Fibre sachet"></div>
                <div class="product-thumb" data-img="assets/images/evia_pour_powder.png"><img src="assets/images/evia_pour_powder.png" alt="Pouring Evia"></div>
                <div class="product-thumb" data-img="assets/images/handheld-evia.png"><img src="assets/images/handheld-evia.png" alt="Holding Evia"></div>
            </div>
        </div>

        <!-- Info -->
        <div class="product-info">
            <h1>Daily Fibre</h1>
            <div class="product-rating">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                <span>4.9 · 1,200+ reviews</span>
            </div>

            <p class="product-desc">For the morning routine you can actually keep. One ounce, ten grams of fibre from three carefully selected sources. Tear, drink, done — then get on with your day.</p>

            <div class="product-price" id="priceDisplay">$33<span class="old">$39</span></div>

            <!-- Purchase options -->
            <div class="purchase-options">
                <div class="purchase-option selected" data-price="$33" data-old="$39">
                    <span class="opt-radio"></span>
                    <span class="opt-text">
                        <span class="opt-title">Subscribe &amp; Save</span><br>
                        <span class="opt-sub">Ships monthly · free shipping · cancel anytime</span>
                    </span>
                    <span class="opt-save">SAVE 15%</span>
                </div>
                <div class="purchase-option" data-price="$39" data-old="">
                    <span class="opt-radio"></span>
                    <span class="opt-text">
                        <span class="opt-title">One-time purchase</span><br>
                        <span class="opt-sub">30 servings · no commitment</span>
                    </span>
                </div>
            </div>

            <!-- Quantity + add to cart -->
            <div class="qty-row">
                <div class="qty-control">
                    <button type="button" id="qtyMinus" aria-label="Decrease quantity">&minus;</button>
                    <input type="text" id="qtyInput" value="1" inputmode="numeric" aria-label="Quantity">
                    <button type="button" id="qtyPlus" aria-label="Increase quantity">+</button>
                </div>
                <button class="btn btn-purple" style="flex-grow:1;padding:14px;">Add to cart</button>
            </div>

            <!-- Trust badges -->
            <div class="product-trust">
                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg> Free shipping over $50</span>
                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"></path><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg> 30-day money-back</span>
                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg> Vegan &amp; gluten-free</span>
            </div>

            <!-- Specs accordion (uses shared .faq-item behaviour) -->
            <div class="product-specs">
                <div class="faq-item open">
                    <button class="faq-q" aria-expanded="true">Details<span class="faq-icon"></span></button>
                    <div class="faq-a"><p>30 single-serve, one-ounce daily shots per box. 10g of fibre each, from three sources chosen for fermentability, tolerance, and easy daily use. No artificial sweeteners or colours.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-q" aria-expanded="false">Ingredients<span class="faq-icon"></span></button>
                    <div class="faq-a"><p>Organic acacia fibre, inulin (chicory root), and green kiwi. A balance of soluble and prebiotic fibres that feed good gut bacteria gently. See the full breakdown on the <a href="benefits.php#ingredients" style="color:var(--purple);text-decoration:underline;">ingredients page</a>.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-q" aria-expanded="false">How to use<span class="faq-icon"></span></button>
                    <div class="faq-a"><p>Tear open one serving a day. Take it straight or stir into water. New to added fibre? Start with half a serving for a few days and drink plenty of water.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-q" aria-expanded="false">Nutrition<span class="faq-icon"></span></button>
                    <div class="faq-a"><p>Per serving: 10g dietary fibre, naturally low in sugar, under 40 calories. Full nutrition facts are printed on every box.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What's inside / benefits strip -->
<section class="section section-cream" style="margin-top:40px;">
    <div class="container">
        <div class="section-head">
            <h2>Why people stick with it</h2>
        </div>
        <div class="benefit-grid">
            <div class="benefit-card">
                <div class="benefit-icon icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></div>
                <h3>Less bloating</h3>
                <p>Gentle, slow-fermenting fibres help things settle so you feel lighter.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></div>
                <h3>More regularity</h3>
                <p>Daily fibre keeps digestion moving the way it's meant to.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon icon-yellow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
                <h3>Ten-second routine</h3>
                <p>Tear, drink, done. The habit that's easy to keep tomorrow.</p>
            </div>
        </div>
        <div style="text-align:center;margin-top:36px;">
            <a href="benefits.php" class="btn btn-outline">See all the benefits</a>
        </div>
    </div>
</section>

<script>
    (function () {
        // Gallery thumbnails
        var main = document.getElementById('mainImage');
        document.querySelectorAll('.product-thumb').forEach(function (t) {
            t.addEventListener('click', function () {
                document.querySelectorAll('.product-thumb').forEach(function (x) { x.classList.remove('active'); });
                t.classList.add('active');
                main.src = t.getAttribute('data-img');
            });
        });

        // Purchase options
        var price = document.getElementById('priceDisplay');
        document.querySelectorAll('.purchase-option').forEach(function (opt) {
            opt.addEventListener('click', function () {
                document.querySelectorAll('.purchase-option').forEach(function (x) { x.classList.remove('selected'); });
                opt.classList.add('selected');
                var p = opt.getAttribute('data-price');
                var old = opt.getAttribute('data-old');
                price.innerHTML = p + (old ? ' <span class="old">' + old + '</span>' : '');
            });
        });

        // Quantity
        var input = document.getElementById('qtyInput');
        document.getElementById('qtyMinus').addEventListener('click', function () {
            var v = parseInt(input.value, 10) || 1; if (v > 1) input.value = v - 1;
        });
        document.getElementById('qtyPlus').addEventListener('click', function () {
            var v = parseInt(input.value, 10) || 1; input.value = v + 1;
        });
        input.addEventListener('input', function () {
            input.value = input.value.replace(/[^0-9]/g, '') || 1;
        });
    })();
</script>

<?php include 'partials/footer.php'; ?>
