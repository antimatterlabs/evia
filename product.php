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
                <img id="mainImage" src="assets/images/pouch-box.png" alt="Daily Fibre 28-day routine">
            </div>
            <div class="product-thumbs">
                <div class="product-thumb" data-img="assets/images/evia_fiber_pouch.png" data-alt="Daily Fibre 14-day routine"><img src="assets/images/evia_fiber_pouch.png" alt="Daily Fibre 14-day routine"></div>
                <div class="product-thumb active" data-img="assets/images/pouch-box.png" data-alt="Daily Fibre 28-day routine"><img src="assets/images/pouch-box.png" alt="Daily Fibre 28-day routine"></div>
                <div class="product-thumb" data-img="assets/images/evia-multibox.png" data-alt="Daily Fibre 56-day routine"><img src="assets/images/evia-multibox.png" alt="Daily Fibre 56-day routine"></div>
                <div class="product-thumb" data-img="assets/images/evia_fiber_box.png" data-alt="Daily Fibre box"><img src="assets/images/evia_fiber_box.png" alt="Daily Fibre box"></div>
                <div class="product-thumb" data-img="assets/images/evia-hand-alt.png"><img src="assets/images/evia-hand-alt.png" alt="Evia pouch in hand"></div>
                <div class="product-thumb" data-img="assets/images/bedside.png"><img src="assets/images/bedside.png" alt="Evia on a bedside table"></div>
                <div class="product-thumb" data-img="assets/images/evia-lemon-kitchen.png"><img src="assets/images/evia-lemon-kitchen.png" alt="Evia in a kitchen with lemons"></div>
                <div class="product-thumb" data-img="assets/images/evia-morning.png"><img src="assets/images/evia-morning.png" alt="Evia in a morning routine"></div>
            </div>
        </div>

        <!-- Info -->
        <div class="product-info">
            <h1>Daily Fibre</h1>
            <div class="product-rating">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                <span>4.9 · 1,200+ reviews</span>
            </div>

            <p class="product-desc">For the morning routine you can actually keep. One ounce, ten grams of fibre from three carefully selected sources. Tear, drink, done, then get on with your day.</p>

            <div class="product-price" id="priceDisplay">$33<span class="old">$39</span></div>

            <!-- Purchase options -->
            <div class="purchase-options routine-purchase-options">
                <div class="purchase-option routine-purchase-option" data-pack="14" data-price="$19" data-old="" data-image="assets/images/evia_fiber_pouch.png" data-image-alt="Daily Fibre 14-day routine">
                    <span class="opt-radio"></span>
                    <span class="routine-plan-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="17" rx="2"></rect>
                            <path d="M8 2v4"></path>
                            <path d="M16 2v4"></path>
                            <path d="M3 10h18"></path>
                            <path d="M9 15h6"></path>
                        </svg>
                    </span>
                    <span class="opt-text">
                        <span class="routine-plan-kicker">The First Step</span>
                        <span class="opt-title">14-Day Routine</span><br>
                        <span class="opt-sub">Start simple. See how it fits into your mornings.</span>
                    </span>
                </div>

                <div class="purchase-option routine-purchase-option selected" data-pack="28" data-price="$33" data-old="$39" data-image="assets/images/pouch-box.png" data-image-alt="Daily Fibre 28-day routine">
                    <span class="opt-radio"></span>
                    <span class="routine-plan-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="17" rx="2"></rect>
                            <path d="M8 2v4"></path>
                            <path d="M16 2v4"></path>
                            <path d="M3 10h18"></path>
                            <path d="M8 15h8"></path>
                        </svg>
                    </span>
                    <span class="opt-text">
                        <span class="routine-plan-kicker">The Daily Rhythm</span>
                        <span class="opt-title">28-Day Routine</span><br>
                        <span class="opt-sub">A full month of one less thing to think about.</span>
                    </span>
                    <span class="opt-save">SAVE 15%</span>
                </div>

                <div class="purchase-option routine-purchase-option" data-pack="56" data-price="$62" data-old="$78" data-image="assets/images/evia-multibox.png" data-image-alt="Daily Fibre 56-day routine">
                    <span class="opt-radio"></span>
                    <span class="routine-plan-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="17" rx="2"></rect>
                            <path d="M8 2v4"></path>
                            <path d="M16 2v4"></path>
                            <path d="M3 10h18"></path>
                            <path d="M8 14h3"></path>
                            <path d="M13 14h3"></path>
                            <path d="M8 17h3"></path>
                            <path d="M13 17h3"></path>
                        </svg>
                    </span>
                    <span class="opt-text">
                        <span class="routine-plan-kicker">The Household Rhythm</span>
                        <span class="opt-title">56-Day Routine</span><br>
                        <span class="opt-sub">For families building healthier routines together.</span>
                    </span>
                    <span class="opt-save">BEST VALUE</span>
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
                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.5 19 2c1 2 2 3.5 1 8.8C19 15.5 16.5 20 11 20z"></path><path d="M19 2c-2.3 9.6-8.5 14-8.5 14"></path></svg> Vegan</span>
                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v18"></path><path d="M12 7c-2.8 0-5-1.8-5-4 2.8 0 5 1.8 5 4z"></path><path d="M12 11c2.8 0 5-1.8 5-4-2.8 0-5 1.8-5 4z"></path><path d="M12 15c-2.8 0-5-1.8-5-4 2.8 0 5 1.8 5 4z"></path><path d="M12 19c2.8 0 5-1.8 5-4-2.8 0-5 1.8-5 4z"></path><path d="M4 20 20 4"></path></svg> Gluten-free</span>
            </div>

            <!-- Specs accordion (uses shared .faq-item behaviour) -->
            <div class="product-specs">
                <div class="faq-item open">
                    <button class="faq-q" aria-expanded="true">Details<span class="faq-icon"></span></button>
                    <div class="faq-a"><p>Single-serve, one-ounce daily shots. 10g of fibre each, from three sources chosen for fermentability, tolerance, and easy daily use. No artificial sweeteners or colours.</p></div>
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

<!-- Ingredients -->
<section class="section" id="ingredients">
    <div class="container">
        <div class="section-head">
            <div class="badge-tag">THREE SOURCES, ONE SHOT</div>
            <h2>What's actually inside</h2>
            <p>Not just one fibre on a label, three, chosen for different roles in how they ferment, how they feel, and
                how easy they are to take every day.</p>
        </div>

        <div class="ingredient-grid flat-ingredients">
            <div class="ingredient-card">
                <div class="ingredient-media" style="background: #ffffff; display: flex; align-items: center; justify-content: center; padding: 24px; height: 200px; border-radius: 12px;">
                    <img src="assets/images/guar.png" alt="PHGG" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                </div>
                <div class="ingredient-body">
                    <span class="ingredient-tag">SOLUBLE PREBIOTIC</span>
                    <h3>Partially Hydrolyzed Guar Gum (PHGG)</h3>
                    <p>Soluble prebiotic fiber that supports gut bacteria, regularity, and glycemic balance.</p>
                </div>
            </div>

            <div class="ingredient-card">
                <div class="ingredient-media" style="background: #ffffff; display: flex; align-items: center; justify-content: center; padding: 24px; height: 200px; border-radius: 12px;">
                    <img src="assets/images/gum.png" alt="Acacia Fiber" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                </div>
                <div class="ingredient-body">
                    <span class="ingredient-tag">GENTLE PREBIOTIC</span>
                    <h3>Acacia Fiber (Gum Arabic)</h3>
                    <p>A gentle prebiotic fiber that nourishes a healthy microbiome without causing bloating.</p>
                </div>
            </div>

            <div class="ingredient-card">
                <div class="ingredient-media" style="background: #ffffff; display: flex; align-items: center; justify-content: center; padding: 24px; height: 200px; border-radius: 12px;">
                    <img src="assets/images/corn.png" alt="Resistant Dextrin" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                </div>
                <div class="ingredient-body">
                    <span class="ingredient-tag">CLINICALLY STUDIED</span>
                    <h3>Resistant Dextrin (Corn Fiber)</h3>
                    <p>Supports postprandial glucose levels and improves essential mineral absorption.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section product-testimonial-band">
    <div class="container">
        <div class="product-testimonial-panel">
            <div class="product-testimonial-head">
                <div class="badge-tag">TESTIMONIALS</div>
                <h2>Real people, real results</h2>
            </div>

            <div class="product-testimonial-grid">
                <figure class="product-testimonial">
                    <blockquote>"Finally, a fiber supplement I actually enjoy taking. It's become my non-negotiable morning ritual."</blockquote>
                    <figcaption>
                        <span class="testimonial-avatar">S</span>
                        <span class="testimonial-meta"><strong>Sarah M.</strong><span class="testimonial-role">Busy professional</span></span>
                    </figcaption>
                </figure>

                <figure class="product-testimonial">
                    <blockquote>"I've tried powders, pills, everything. This is the only thing that's stuck because it's so effortless."</blockquote>
                    <figcaption>
                        <span class="testimonial-avatar">J</span>
                        <span class="testimonial-meta"><strong>James T.</strong><span class="testimonial-role">Fitness enthusiast</span></span>
                    </figcaption>
                </figure>

                <figure class="product-testimonial">
                    <blockquote>"My gut health has never been better. The convenience factor makes all the difference."</blockquote>
                    <figcaption>
                        <span class="testimonial-avatar">E</span>
                        <span class="testimonial-meta"><strong>Emily R.</strong><span class="testimonial-role">Working mom</span></span>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- Why Daily Fibre Feels Different -->
<section class="why-different product-why-different">
    <div class="container why-inner-container">
        <div class="why-left-side">
            <h2>Daily Fibre made simple</h2>

            <div class="why-grid-cols">
                <div class="why-col">
                    <svg class="why-icon" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M824.6,262.4C824.6,262.4,824.6,262.4,824.6,262.4c-3.2-20.1-20.8-35.1-41.1-35.1c-0.1,0-0.3,0-0.4,0  c-126.2,1.3-247.9,46.3-344.6,126.9c-3-35.4-13.1-69.9-29.8-101.5c-22.8-43.1-57.1-79.1-99-104.1c0,0,0,0,0,0  c-16.9-10.1-38-7.3-51.2,6.8c0,0,0,0,0,0c-62.8,66.9-96.6,154.3-95.1,246.1c1.4,88.4,35.4,171.6,96,235.5c-5.7,21.8-10,44-12.9,66.6  c-1.2,9.3,5.3,17.8,14.7,19.1c0.7,0.1,1.5,0.1,2.2,0.1c8.4,0,15.7-6.2,16.8-14.8c3.1-23.5,7.7-46.5,13.9-68.8c0.7-1.5,1.1-3,1.3-4.6  c61.3-214.9,259.5-370.9,488.3-373.3h0c0,0,0,0,0.1,0c3.6,0,7,2.9,7.6,6.4c0,0,0,0,0,0c12.6,79.5,13,160.1,1.2,239.7  c-0.2,0.6-0.4,1.2-0.5,1.8c-23.5,100.9-89.1,187.1-180.2,236.4c-80.3,43.6-173.8,55-261.5,32.9c29.6-19.5,58-40.9,85.1-64.2  c71.5-61.5,131.6-134.2,178.6-215.9c4.7-8.1,1.9-18.5-6.3-23.2c-8.1-4.7-18.5-1.9-23.2,6.3C516,600,417.9,699,301.3,768.8  c-0.5,0.2-0.9,0.5-1.4,0.8c-37.4,22.3-76.6,41.5-117.4,57.5c-8.7,3.4-13.1,13.3-9.6,22c2.6,6.7,9,10.8,15.8,10.8  c2.1,0,4.2-0.4,6.2-1.2c40.4-15.8,79.2-34.6,116.4-56.3c41.4,14,84.4,21,127.3,21c65.4,0,130.5-16.1,189.1-48  C726.3,722,797.7,629,824,520.1c0.6-1.4,1.1-2.9,1.3-4.5C838.2,431.6,837.9,346.4,824.6,262.4z M334.1,470  c-0.2-18.2-1-35.1-2.4-51.3c-3.1-34.6-9-71-18-111.5c-2-9.2-11.1-14.9-20.3-12.9c-9.2,2-14.9,11.1-12.9,20.3  c8.7,39,14.4,74,17.3,107.1c2.8,31.7,3.1,66.6,0.8,109.5c-10.8,21.8-20.2,44.3-28,67.5c-102.4-122.2-98.9-301.5,12.5-420.1  c0,0,0,0,0,0c2.2-2.4,6-2.7,9.1-0.9c0,0,0,0,0,0c72.9,43.4,115.8,122,113.1,206.4C378.5,410.4,354.7,439.2,334.1,470z"
                            fill="currentColor" />
                    </svg>
                    <div class="why-content">
                        <h4>10 Seconds.</h4>
                        <p>No prep, no cleanup.<br>Tear, drink, go.</p>
                    </div>
                </div>

                <div class="why-col">
                    <svg class="why-icon" viewBox="0 -28 512.001 512" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0"
                            fill="currentColor" />
                    </svg>
                    <div class="why-content">
                        <h4>No Mixing Required</h4>
                        <p>No shaker bottle. No clumps. No powder stuck to the glass.</p>
                    </div>
                </div>

                <div class="why-col">
                    <svg class="why-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd"
                            d="m12 2c-5.52285 0-10 4.47715-10 10 0 .1598.00374.3187.01115.4766.01293.2758-.2002.5099-.47604.5229-.27584.0129-.50993-.2002-.52287-.4761-.00813-.1735-.01224-.348-.01224-.5234 0-6.07513 4.92487-11 11-11 3.721 0 7.0098 1.8476 9.0001 4.67411l-.0001-4.17411c0-.27614.2239-.5.5-.5s.5.22386.5.5v6c0 .27614-.2239.5-.5.5h-6c-.2761 0-.5-.22386-.5-.5s.2239-.5.5-.5l5.1623.00003c-1.7295-2.98982-4.9616-5.00003-8.6623-5.00003zm10.4649 9.0006c.2759-.013.51.2002.5229.476.0081.1735.0123.348.0123.5234 0 6.0751-4.9249 11-11 11-3.72104 0-7.00979-1.8476-9.0001-4.6741v4.1741c0 .2762-.22386.5-.5.5s-.5-.2238-.5-.5v-6c0-.2761.22386-.5.5-.5h6c.27614 0 .5.2239.5.5 0 .2762-.22386.5-.5.5h-5.16224c1.72955 2.9898 4.96159 5 8.66234 5 5.5228 0 10-4.4771 10-10 0-.1598-.0038-.3187-.0112-.4766-.0129-.2758.2002-.5099.476-.5228z"
                            fill="currentColor" fill-rule="evenodd" />
                    </svg>
                    <div class="why-content">
                        <h4>Take It Anywhere</h4>
                        <p>A small pouch for mornings, work bags, travel, or busy days.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="why-right-side">
            <svg class="why-right-pattern" viewBox="0 0 403.45 38.46" xmlns="http://www.w3.org/2000/svg">
                <g fill="currentColor">
                    <path d="M136.25,0l-.96,1.95-35.87,36.29c-2.95.08-5.94.18-8.9.1-1.23-.03-2.02-.47-3.47-.29-.91.11-1.49.9-1.29-.7L122.51,0h13.74Z" />
                    <path d="M287.74,0l-.96,1.95-34.5,35.08c-2.49,1.94-6.5,1.37-9.63,1.32-.86-.01-1.48-.51-2.01-.55-.41-.04-4.34,1.45-3.39-.45L274,0h13.74Z" />
                    <path d="M227.02,0l-.96,1.95-35.87,36.29c-3.73.07-7.61.27-11.32-.13-1.02-.11-1.66.32-2.34-.76L213.27,0h13.74Z" />
                    <polygon points="196.97 0 196.02 1.95 160.14 38.24 151.24 38.34 146.48 37.34 183.23 0 196.97 0" />
                    <path d="M378.5,0l-.96,1.95-34.5,35.08-2.06,1.21c-2.29-.32-4.55.11-6.93.1-.86,0-1.48-.5-2.01-.55-.41-.04-5.02,1.52-4.04-.45L364.76,0h13.74Z" />
                    <path d="M317.78,0l-.96,1.95-35.87,36.29c-2.54-.41-4.99.26-7.59.06-.67-.05-1.3-.61-1.96-.66-.54-.04-5.11,1.68-4.12-.3L304.68,0h13.1Z" />
                    <path d="M106.21,0l-.96,1.95-34.49,35.1c-1.02.72-2.59,1.19-3.83,1.3-3.1.28-6.65-.47-9.93-.31-.81.04-1.49.98-1.28-.69L92.47,0h13.74Z" />
                    <path d="M257.7,0c-.3,1.95-1.54,1.88-2.58,2.9-9.14,9.05-17.58,18.4-26.32,27.48-.32.34-1.18.38-1.81,1.08-1.21,1.35-2.82,3.73-4.1,4.93-2.68,2.52-7.44,2.03-10.93,1.95-.73-.02-1.36-.41-1.88-.42-.36,0-3.77,1.2-2.88-.58,11.31-11.46,22.56-22.98,33.9-34.41.44-.45.46-1.22.74-1.5.09-.09,1.98-1.43,2.11-1.43h13.74Z" />
                    <path d="M76.17,0c.4,1.6-.37,1.04-.84,1.41-.63.5-1.19.88-1.75,1.51-9.96,11.32-20.79,21.24-30.97,31.51-.59.6-.88,1.75-1.91,2.61-1.84,1.53-6.53,1.39-8.99,1.32-1.02-.03-1.83-.68-2.53-.67-.37,0-4.51,1.66-3.51-.33L62.42,0h13.74Z" />
                    <path d="M45.49,0l-.96,1.95L8.65,38.24l-7.94-.22c-.96-.65-.84-5.15-.31-6.21L31.74,0h13.74Z" />
                    <polygon points="403.43 0 403.45 5.54 372.13 38.01 358.05 38.32 359.01 36.37 394.47 .31 403.43 0" />
                    <path d="M347.82,0c.26,1.12-.42,1.29-.96,1.95-5.78,7.05-14.28,14.37-20.79,21.09-4.56,4.56-8.75,8.75-13.01,13.01-.76.76-.56,2.01-2.33,2.15-.59.05-1.1-.44-1.7-.39-1.99.18-4.26.95-6.49.48l-4.81-.94c8.84-9.19,18.03-18.06,26.86-27.26,1.91-1.99,3.68-4.6,5.73-6.52,1.23-1.15,3.24-1.54,3.21-3.56h14.06Z" />
                    <path d="M166.93,0c-2.7,3.39-5.95,6.32-8.98,9.41-8.41,8.6-16.47,17.55-25.24,25.64-.73.67-1.76,2.99-3.15,3.08-.88.06-2.85-.65-4.53-.49-2.47.23-4.72.27-7.01.67-.92.16-1.86.36-1.59-.97,9.13-9.35,18.36-18.59,27.51-27.92,2.33-2.38,4.78-5.28,7.33-7.45.68-.58,1.22-1.39,1.91-1.98h13.74Z" />
                    <path d="M15.44,0c.26,1.12-.42,1.29-.96,1.95-2.89,3.53-8.99,9.73-12.46,12.66-.65.55-.82,1.24-1.92.97V.98L1.06,0h14.38Z" />
                    <path d="M403.43,37.34c-.36,1.4-4.81,1.04-6.1,1-1.54-.05-3.61-.57-5.12-.69-1.23-.1-2.51,1.28-3.48.34l14.7-15.26v14.61Z" />
                </g>
            </svg>
            <img src="assets/images/evia-hand-alt.png" class="why-right-img" alt="Hand holding Evia pouch">
        </div>
    </div>

    <img src="assets/images/plus-pattern.svg" alt="Pattern" class="why-decor-plus">
</section>

<script>
    (function () {
        var main = document.getElementById('mainImage');
        var price = document.getElementById('priceDisplay');
        var thumbs = document.querySelectorAll('.product-thumb');
        var options = document.querySelectorAll('.purchase-option');

        function setMainImage(src, alt) {
            if (!src) {
                return;
            }

            main.src = src;
            if (alt) {
                main.alt = alt;
            }

            thumbs.forEach(function (thumb) {
                thumb.classList.toggle('active', thumb.getAttribute('data-img') === src);
            });
        }

        function selectOption(opt, updateUrl) {
            if (!opt) {
                return;
            }

            options.forEach(function (x) { x.classList.remove('selected'); });
            opt.classList.add('selected');

            var p = opt.getAttribute('data-price');
            var old = opt.getAttribute('data-old');
            price.innerHTML = p + (old ? ' <span class="old">' + old + '</span>' : '');

            setMainImage(opt.getAttribute('data-image'), opt.getAttribute('data-image-alt'));

            if (updateUrl && window.history && window.history.replaceState) {
                var url = new URL(window.location.href);
                url.searchParams.set('pack', opt.getAttribute('data-pack'));
                window.history.replaceState({}, '', url);
            }
        }

        thumbs.forEach(function (t) {
            t.addEventListener('click', function () {
                setMainImage(t.getAttribute('data-img'), t.getAttribute('data-alt') || t.querySelector('img').alt);
            });
        });

        options.forEach(function (opt) {
            opt.addEventListener('click', function () {
                selectOption(opt, true);
            });
        });

        function optionForPack(pack) {
            var match = null;
            options.forEach(function (opt) {
                if (opt.getAttribute('data-pack') === pack) {
                    match = opt;
                }
            });
            return match;
        }

        var params = new URLSearchParams(window.location.search);
        var requestedPack = (params.get('pack') || params.get('package') || '').toLowerCase();
        var packAliases = {
            'first': '14',
            'first-step': '14',
            'starter': '28',
            'daily': '28',
            'daily-rhythm': '28',
            'household': '56',
            'household-rhythm': '56'
        };
        requestedPack = packAliases[requestedPack] || requestedPack.replace('-day', '');

        var initialOption = requestedPack
            ? optionForPack(requestedPack)
            : document.querySelector('.purchase-option.selected');

        selectOption(initialOption || document.querySelector('.purchase-option.selected'), false);

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
