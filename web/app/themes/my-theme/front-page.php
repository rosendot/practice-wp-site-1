<?php get_header(); ?>

<main class="home">

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero__content">
            <p class="hero__tagline">Authentic Mexican Cuisine</p>
            <h1 class="hero__title">Made From Family Recipes</h1>
            <p class="hero__description">Tacos, burritos, flautas, and more &mdash; crafted with fresh ingredients and generations of tradition.</p>
            <div class="hero__buttons">
                <a href="<?php echo esc_url(home_url('/menu')); ?>" class="btn btn--primary">View Our Menu</a>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn--outline">Our Story</a>
            </div>
        </div>
    </section>

    <!-- Featured Menu Items -->
    <section class="section section--cream featured-menu">
        <div class="section__header">
            <h2 class="section__title">Fan Favorites</h2>
            <p class="section__subtitle">The dishes our guests keep coming back for</p>
        </div>
        <div class="menu-grid">
            <?php
            $menu_items = get_posts([
                'post_type'      => 'menu_item',
                'posts_per_page' => 6,
                'orderby'        => 'date',
                'order'          => 'DESC'
            ]);

            if ($menu_items):
                foreach ($menu_items as $item):
                    $price       = get_post_meta($item->ID, 'price', true);
                    $description = get_post_meta($item->ID, 'description', true);
            ?>
                <div class="menu-card">
                    <?php if (has_post_thumbnail($item->ID)): ?>
                        <img class="menu-card__image"
                             src="<?php echo esc_url(get_the_post_thumbnail_url($item->ID, 'medium')); ?>"
                             alt="<?php echo esc_attr($item->post_title); ?>">
                    <?php endif; ?>
                    <div class="menu-card__content">
                        <h3 class="menu-card__name"><?php echo esc_html($item->post_title); ?></h3>
                        <?php if ($description): ?>
                            <p class="menu-card__description"><?php echo esc_html($description); ?></p>
                        <?php endif; ?>
                        <?php if ($price): ?>
                            <span class="menu-card__price">$<?php echo esc_html($price); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                endforeach;
            else:
            ?>
                <p style="grid-column: 1 / -1; text-align: center; color: var(--color-text-light);">Menu items coming soon!</p>
            <?php endif; ?>
        </div>
        <div class="section__footer">
            <a href="<?php echo esc_url(home_url('/menu')); ?>" class="btn btn--secondary">See Full Menu</a>
        </div>
    </section>

    <!-- About Teaser -->
    <section class="section section--green">
        <div class="about-teaser">
            <div class="about-teaser__content">
                <h2 class="about-teaser__title">A Taste of Home</h2>
                <p class="about-teaser__text">Every dish at La Mesa starts with a family recipe passed down through generations. We use traditional techniques and the freshest ingredients to bring you the authentic flavors of Mexico.</p>
                <p class="about-teaser__text">From our kitchen to your table, every plate is made with love.</p>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn--outline">Learn More About Us</a>
            </div>
            <div>
                <div class="about-teaser__image" style="background: rgba(250, 246, 240, 0.1); border-radius: 8px; height: 400px; display: flex; align-items: center; justify-content: center; color: rgba(250,246,240,0.3); font-size: 1rem;">Photo placeholder</div>
            </div>
        </div>
    </section>

    <!-- Hours & Location -->
    <section class="section section--dark">
        <div class="section__header">
            <h2 class="section__title" style="color: var(--color-secondary);">Visit Us</h2>
            <p class="section__subtitle">We can't wait to serve you</p>
        </div>
        <div class="info-bar">
            <div class="info-bar__item">
                <div class="info-bar__icon">&#x1f4cd;</div>
                <h3 class="info-bar__label">Location</h3>
                <p class="info-bar__text">123 Main Street<br>Charlotte, NC 28202</p>
            </div>
            <div class="info-bar__item">
                <div class="info-bar__icon">&#x1f552;</div>
                <h3 class="info-bar__label">Hours</h3>
                <p class="info-bar__text">Mon&ndash;Fri: 11am &ndash; 10pm<br>Sat&ndash;Sun: 10am &ndash; 11pm</p>
            </div>
            <div class="info-bar__item">
                <div class="info-bar__icon">&#x1f4de;</div>
                <h3 class="info-bar__label">Contact</h3>
                <p class="info-bar__text">(704) 555-0123<br>hola@lamesa.com</p>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
