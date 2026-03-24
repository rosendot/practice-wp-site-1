<?php get_header(); ?>

<main class="home">

    <!-- Hero -->
    <section class="hero">
        <div class="hero__content">
            <p class="hero__label">Welcome to</p>
            <h1 class="hero__title">La Mesa Mexican Kitchen</h1>
            <p class="hero__text">Bold flavors and family tradition &mdash; from handmade tortillas to slow-braised meats, every dish is crafted with recipes passed down through generations.</p>
            <div class="hero__buttons">
                <a href="<?php echo esc_url(home_url('/menu')); ?>" class="btn btn--primary">Order Online</a>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn--outline">Our Story</a>
            </div>
        </div>
    </section>

    <!-- Featured Items Carousel -->
    <section class="section section--cream featured-items">
        <div class="section__header">
            <div class="section__icon">&#x1f952;</div>
            <h2 class="section__title">Fan Favorites</h2>
        </div>
        <div class="carousel">
            <div class="carousel__track">
                <div class="carousel__slide">
                    <div class="featured-card">
                        <div class="placeholder-image placeholder-image--square">Photo</div>
                        <h3 class="featured-card__name">Taco de Carne Asada</h3>
                        <p class="featured-card__description">Grilled steak with cilantro, onion, and salsa verde</p>
                        <span class="featured-card__price">$ 4.50</span>
                    </div>
                </div>
                <div class="carousel__slide">
                    <div class="featured-card">
                        <div class="placeholder-image placeholder-image--square">Photo</div>
                        <h3 class="featured-card__name">Enchiladas de Mole</h3>
                        <p class="featured-card__description">Chicken enchiladas smothered in house-made mole poblano</p>
                        <span class="featured-card__price">$ 14.00</span>
                    </div>
                </div>
                <div class="carousel__slide">
                    <div class="featured-card">
                        <div class="placeholder-image placeholder-image--square">Photo</div>
                        <h3 class="featured-card__name">Super Burrito</h3>
                        <p class="featured-card__description">Choice of meat with everything &mdash; rice, beans, cheese, crema, guac, pico</p>
                        <span class="featured-card__price">$ 14.00</span>
                    </div>
                </div>
                <div class="carousel__slide">
                    <div class="featured-card">
                        <div class="placeholder-image placeholder-image--square">Photo</div>
                        <h3 class="featured-card__name">Churros con Chocolate</h3>
                        <p class="featured-card__description">Crispy cinnamon sugar churros with warm chocolate dipping sauce</p>
                        <span class="featured-card__price">$ 6.00</span>
                    </div>
                </div>
                <div class="carousel__slide">
                    <div class="featured-card">
                        <div class="placeholder-image placeholder-image--square">Photo</div>
                        <h3 class="featured-card__name">Pozole Rojo</h3>
                        <p class="featured-card__description">Traditional pork and hominy stew in red chile broth</p>
                        <span class="featured-card__price">$ 13.00</span>
                    </div>
                </div>
                <div class="carousel__slide">
                    <div class="featured-card">
                        <div class="placeholder-image placeholder-image--square">Photo</div>
                        <h3 class="featured-card__name">Flautas de Pollo</h3>
                        <p class="featured-card__description">Crispy rolled tortillas with shredded chicken, crema, and lettuce</p>
                        <span class="featured-card__price">$ 10.00</span>
                    </div>
                </div>
                <div class="carousel__slide">
                    <div class="featured-card">
                        <div class="placeholder-image placeholder-image--square">Photo</div>
                        <h3 class="featured-card__name">Horchata</h3>
                        <p class="featured-card__description">Sweet cinnamon rice water &mdash; house-made daily</p>
                        <span class="featured-card__price">$ 3.50</span>
                    </div>
                </div>
                <div class="carousel__slide">
                    <div class="featured-card">
                        <div class="placeholder-image placeholder-image--square">Photo</div>
                        <h3 class="featured-card__name">Torta Cubana</h3>
                        <p class="featured-card__description">Ham, chorizo, milanesa, cheese, avocado &mdash; the works</p>
                        <span class="featured-card__price">$ 13.00</span>
                    </div>
                </div>
            </div>
            <div class="carousel__dots"></div>
        </div>
        <div class="section__footer">
            <a href="<?php echo esc_url(home_url('/menu')); ?>" class="btn btn--outline-dark">View Menu</a>
        </div>
    </section>

    <!-- Visit Us -->
    <section class="section section--dark visit-us">
        <div class="section__header">
            <h2 class="section__title" style="color: var(--color-secondary);">Visit Us</h2>
            <p class="section__subtitle">Walk-ins welcome, or call ahead for parties of 6 or more</p>
        </div>
        <div class="visit-us__grid">
            <div class="visit-us__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.0515497419537!2d-78.7861464545959!3d35.92123821753584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89acfa64a956fd5f%3A0xb274216d4b4956dd!2s3001%20Brellon%20Ln%2C%20Durham%2C%20NC%2027703!5e0!3m2!1sen!2sus!4v1774325377898!5m2!1sen!2sus" width="100%" height="100%" style="border:0; border-radius: 8px; min-height: 350px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="visit-us__info">
                <div class="visit-us__detail">
                    <h3>Location</h3>
                    <p>3001 Brellon Ln<br>Durham, NC 27703</p>
                </div>
                <div class="visit-us__detail">
                    <h3>Hours</h3>
                    <p>Mon&ndash;Fri: 11am &ndash; 10pm<br>Sat&ndash;Sun: 10am &ndash; 11pm</p>
                </div>
                <div class="visit-us__detail">
                    <h3>Contact</h3>
                    <p>(704) 555-0123<br>hola@lamesa.com</p>
                </div>
                <a href="tel:+17045550123" class="btn btn--primary">Call (704) 555-0123</a>
            </div>
        </div>
    </section>

    <!-- Photo Gallery -->
    <section class="section gallery-section">
        <div class="section__header">
            <h2 class="section__title">Gallery</h2>
        </div>
        <div class="carousel carousel--gallery">
            <div class="carousel__track">
                <div class="carousel__slide"><div class="placeholder-image placeholder-image--gallery">Photo 1</div></div>
                <div class="carousel__slide"><div class="placeholder-image placeholder-image--gallery">Photo 2</div></div>
                <div class="carousel__slide"><div class="placeholder-image placeholder-image--gallery">Photo 3</div></div>
                <div class="carousel__slide"><div class="placeholder-image placeholder-image--gallery">Photo 4</div></div>
                <div class="carousel__slide"><div class="placeholder-image placeholder-image--gallery">Photo 5</div></div>
                <div class="carousel__slide"><div class="placeholder-image placeholder-image--gallery">Photo 6</div></div>
                <div class="carousel__slide"><div class="placeholder-image placeholder-image--gallery">Photo 7</div></div>
                <div class="carousel__slide"><div class="placeholder-image placeholder-image--gallery">Photo 8</div></div>
            </div>
            <div class="carousel__dots"></div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
