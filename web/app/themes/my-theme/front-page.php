<?php get_header(); ?>

<main class="home">

    <!-- Hero -->
    <section class="hero">
        <div class="hero__content">
            <h1 class="hero__title">Charlotte&rsquo;s Home for<br>Authentic Mexican Food</h1>
            <p class="hero__tagline">&mdash; Taste the Tradition &mdash;</p>
            <a href="<?php echo esc_url(home_url('/menu')); ?>" class="btn btn--primary">Order Online</a>
        </div>
    </section>

    <!-- Address Bar -->
    <div class="address-bar">
        <span class="address-bar__pin">&#x1f4cd;</span>
        <span class="address-bar__text">123 Main Street, Charlotte, NC 28202</span>
    </div>

    <!-- Welcome / About -->
    <section class="section welcome">
        <div class="welcome__grid">
            <div class="welcome__image">
                <div class="placeholder-image placeholder-image--tall">Photo placeholder</div>
            </div>
            <div class="welcome__content">
                <p class="welcome__label">Welcome to</p>
                <h2 class="welcome__title">La Mesa Mexican Kitchen</h2>
                <p class="welcome__text">Step into a world of bold flavors and family tradition at La Mesa, your home for authentic Mexican cuisine in Charlotte. From our handmade tortillas to our slow-braised meats, every dish is crafted with recipes passed down through generations.</p>
                <p class="welcome__text">We&rsquo;re passionate about bringing you the true taste of Mexico &mdash; made fresh, served with love, and meant to be shared.</p>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn--primary">Read More</a>
            </div>
        </div>
    </section>

    <!-- Featured Items -->
    <section class="section section--cream featured-items">
        <div class="section__header">
            <div class="section__icon">&#x1f952;</div>
            <h2 class="section__title">Fan Favorites</h2>
        </div>
        <div class="featured-items__grid">
            <?php
            $menu_items = get_posts([
                'post_type'      => 'menu_item',
                'posts_per_page' => 4,
                'orderby'        => 'rand',
            ]);

            if ($menu_items):
                foreach ($menu_items as $item):
                    $price       = get_post_meta($item->ID, 'price', true);
                    $description = get_post_meta($item->ID, 'description', true);
            ?>
                <div class="featured-card">
                    <div class="placeholder-image placeholder-image--square">Photo</div>
                    <h3 class="featured-card__name"><?php echo esc_html($item->post_title); ?></h3>
                    <?php if ($description): ?>
                        <p class="featured-card__description"><?php echo esc_html($description); ?></p>
                    <?php endif; ?>
                    <?php if ($price): ?>
                        <span class="featured-card__price">$ <?php echo esc_html($price); ?></span>
                    <?php endif; ?>
                </div>
            <?php
                endforeach;
            else:
            ?>
                <p class="featured-items__empty">Menu items coming soon!</p>
            <?php endif; ?>
        </div>
        <div class="section__footer">
            <a href="<?php echo esc_url(home_url('/menu')); ?>" class="btn btn--outline-dark">View Menu</a>
        </div>
    </section>

    <!-- Our Kitchen -->
    <section class="kitchen">
        <div class="kitchen__image">
            <div class="placeholder-image placeholder-image--wide">Photo placeholder</div>
        </div>
        <div class="kitchen__content">
            <h2 class="kitchen__title">Our Kitchen</h2>
            <p class="kitchen__text">Step into the heart of La Mesa, where traditional techniques meet the freshest ingredients. Our kitchen runs on passion &mdash; from hand-pressed tortillas every morning to slow-simmered salsas made from scratch.</p>
            <p class="kitchen__text">Whether it&rsquo;s our carne asada kissed by open flame or our mole that takes two days to prepare, every dish tells a story of dedication and love for authentic Mexican cooking.</p>
            <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn--outline">Our Story</a>
        </div>
    </section>

    <!-- Menu Categories -->
    <section class="section section--light-pink categories">
        <div class="section__header">
            <div class="section__icon">&#x1f37d;</div>
            <p class="section__label">&mdash; La Mesa Mexican Kitchen Menu &mdash;</p>
            <h2 class="section__title">Menu</h2>
        </div>
        <div class="categories__grid">
            <?php
            $categories = get_terms([
                'taxonomy'   => 'menu_category',
                'hide_empty' => true,
                'number'     => 6,
            ]);

            if (!is_wp_error($categories) && $categories):
                foreach ($categories as $cat):
            ?>
                <div class="category-card">
                    <div class="placeholder-image placeholder-image--category">Photo</div>
                    <span class="category-card__name"><?php echo esc_html($cat->name); ?></span>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
        <div class="section__footer">
            <a href="<?php echo esc_url(home_url('/menu')); ?>" class="btn btn--primary">View Menu</a>
        </div>
    </section>

    <!-- Visit Us -->
    <section class="visit-us">
        <div class="visit-us__background">
            <div class="visit-us__overlay">
                <div class="visit-us__content">
                    <h2 class="visit-us__title">Visit Us</h2>
                    <p class="visit-us__text">Secure your table and enjoy your favorite dishes. Walk-ins are always welcome, or call ahead for parties of 6 or more.</p>
                    <div class="visit-us__details">
                        <div class="visit-us__detail">
                            <h3>Location</h3>
                            <p>123 Main Street<br>Charlotte, NC 28202</p>
                        </div>
                        <div class="visit-us__detail">
                            <h3>Hours</h3>
                            <p>Mon&ndash;Fri: 11am &ndash; 10pm<br>Sat&ndash;Sun: 10am &ndash; 11pm</p>
                        </div>
                        <div class="visit-us__detail">
                            <h3>Contact</h3>
                            <p>(704) 555-0123<br>hola@lamesa.com</p>
                        </div>
                    </div>
                    <a href="tel:+17045550123" class="btn btn--primary">Call (704) 555-0123</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Photo Gallery -->
    <section class="section gallery">
        <div class="gallery__grid">
            <div class="placeholder-image placeholder-image--gallery">Photo 1</div>
            <div class="placeholder-image placeholder-image--gallery">Photo 2</div>
            <div class="placeholder-image placeholder-image--gallery">Photo 3</div>
            <div class="placeholder-image placeholder-image--gallery">Photo 4</div>
            <div class="placeholder-image placeholder-image--gallery">Photo 5</div>
            <div class="placeholder-image placeholder-image--gallery">Photo 6</div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
