<?php get_header(); ?>

<main class="home">

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to My Restaurant</h1>
            <p>Fresh ingredients, bold flavors, unforgettable experience</p>
            <a href="#menu" class="btn">View Menu</a>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="menu" id="menu">
        <h2>Our Menu</h2>
        <div class="menu-grid">
            <?php
            $menu_items = get_posts([
                'post_type'      => 'menu_item',
                'posts_per_page' => -1,
                'orderby'        => 'title',
                'order'          => 'ASC'
            ]);

            foreach ($menu_items as $item):
                $price       = get_post_meta($item->ID, 'price', true);
                $description = get_post_meta($item->ID, 'description', true);
            ?>
                <div class="menu-card">
                    <?php if (has_post_thumbnail($item->ID)): ?>
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url($item->ID, 'medium')); ?>"
                             alt="<?php echo esc_attr($item->post_title); ?>">
                    <?php endif; ?>
                    <div class="menu-card-content">
                        <h3><?php echo esc_html($item->post_title); ?></h3>
                        <p><?php echo esc_html($description); ?></p>
                        <span class="price">$<?php echo esc_html($price); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <h2>Find Us</h2>
        <div class="contact-grid">
            <div class="contact-info">
                <p>123 Main Street, Charlotte NC</p>
                <p>Mon&ndash;Fri: 11am &ndash; 10pm</p>
                <p>Sat&ndash;Sun: 10am &ndash; 11pm</p>
                <p>(704) 555-0123</p>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
