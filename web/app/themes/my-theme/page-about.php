<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<main class="about-page">

    <!-- About Hero -->
    <section class="about-hero">
        <h1 class="section__title">Our Story</h1>
        <p class="section__subtitle" style="color: rgba(250,246,240,0.7);">Family recipes, served with heart</p>
    </section>

    <!-- Story Section -->
    <section class="section">
        <div class="about-story">
            <div class="about-story__content">
                <h2 class="about-story__title">From Our Family to Yours</h2>
                <p class="about-story__text">La Mesa started with a simple idea: bring the authentic flavors of our grandmother's kitchen to the Durham community. Every recipe we serve has been passed down through three generations.</p>
                <p class="about-story__text">We opened our doors in 2020, and since then we've been committed to using the freshest ingredients, hand-pressed tortillas, and traditional cooking techniques that make every bite taste like home.</p>
            </div>
            <div>
                <div class="about-story__image" style="background: var(--color-cream); display: flex; align-items: center; justify-content: center; color: var(--color-text-light); font-size: 1rem;">Photo placeholder</div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section section--cream">
        <div class="section__header">
            <h2 class="section__title">What We Stand For</h2>
            <p class="section__subtitle">The principles behind every plate</p>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-card__icon">&#x1f331;</div>
                <h3 class="value-card__title">Fresh Ingredients</h3>
                <p class="value-card__text">We source locally whenever possible and never use frozen produce. Every salsa, guacamole, and sauce is made in-house daily.</p>
            </div>
            <div class="value-card">
                <div class="value-card__icon">&#x1f468;&#x200d;&#x1f373;</div>
                <h3 class="value-card__title">Traditional Methods</h3>
                <p class="value-card__text">Hand-pressed tortillas, slow-cooked meats, and recipes that haven't changed in generations. We do it the right way.</p>
            </div>
            <div class="value-card">
                <div class="value-card__icon">&#x2764;&#xfe0f;</div>
                <h3 class="value-card__title">Community First</h3>
                <p class="value-card__text">La Mesa means "the table" &mdash; and everyone has a seat at ours. We're proud to be part of the Durham neighborhood.</p>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section section--green" style="text-align: center;">
        <h2 class="section__title" style="margin-bottom: 1rem;">Come Say Hello</h2>
        <p class="section__subtitle" style="margin-bottom: 2rem;">We'd love to meet you. Stop by for a meal.</p>
        <a href="<?php echo esc_url(home_url('/menu')); ?>" class="btn btn--outline">See Our Menu</a>
    </section>

</main>

<?php get_footer(); ?>
