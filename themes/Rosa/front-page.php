<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="hero" id="hero" style="background: url(<?php echo the_post_thumbnail_url();?>) center no-repeat;  background-size: cover;">
        <div class="container">
            <h2 class="sub-headline">
                <span class="first-letter">W</span>elcome
            </h2>
            <h1 class="headline">The Rosa</h1>
            <div class="headline-description">
                <div class="separator">
                    <div class="line line-left"></div>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    <div class="line line-right"></div>
                </div>
                <div class="single-animation">
                    <h5>Ready to be opened</h5>
                    <a href="#" class="btn cta-btn">Explore</a>
                </div>
            </div>
        </div>
    </section>

    <section class="discover-our-story">
        <div class="container">
            <div class="restaurant-info">
                <div class="restaurant-description padding-right animate-left">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            <span class="first-letter">D</span>iscover
                        </h2>
                        <h1 class="headline headline-dark">Our Story</h1>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, atque beatae delectus dolores eius exercitationem fugit impedit libero omnis placeat possimus, sed vel voluptate. At expedita labore neque similique voluptate!</p>
                        <a href="#" class="btn body-btn">About Us</a>
                    </div>
                </div>
                <div class="restaurant-info-img animate-right">
                    <?php echo '<img src="'.wp_get_attachment_image_src(12, 'full', false, '')[0].'">'; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="tasteful-recipes between" style="background: url(<?php echo wp_get_attachment_image_src(14, 'full', false, '')[0];?>) center no-repeat;">
        <div class="container">
            <div class="global-headline">
                <div class="animate-top">
                    <h2 class="sub-headline">
                        <span class="first-letter">T</span>asteful
                    </h2>
                </div>
                <div class="animate-bottom">
                    <h1 class="headline">Recipes</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="discover-our-menu">
        <div class="container">
            <div class="restaurant-info">
                <div class="image-group padding-right animate-left">
                    <?php echo '<img src="'.wp_get_attachment_image_src(8, 'full', false, '')[0].'">'; ?>
                    <?php echo '<img src="'.wp_get_attachment_image_src(9, 'full', false, '')[0].'">'; ?>
                    <?php echo '<img src="'.wp_get_attachment_image_src(10, 'full', false, '')[0].'">'; ?>
                    <?php echo '<img src="'.wp_get_attachment_image_src(11, 'full', false, '')[0].'">'; ?>
                </div>
                <div class="restaurant-description animate-right">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            <span class="first-letter">D</span>iscover
                        </h2>
                        <h1 class="headline headline-dark">Menu</h1>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam at, autem delectus ducimus eos et fuga, incidunt ipsa itaque iure, laboriosam nam odio ratione voluptatem. Blanditiis distinctio dolorem maxime.</p>
                    <a href="#" class="btn body-btn">View the full menu</a>
                </div>
            </div>
        </div>
    </section>

    <section class="perfect-blend between" style="background: url(<?php echo wp_get_attachment_image_src(13, 'full', false, '')[0];?>) center no-repeat;">
        <div class="container">
            <div class="global-headline">
                <div class="animate-top">
                    <h2 class="sub-headline">
                        <span class="first-letter">T</span>he perfect
                    </h2>
                </div>
                <div class="animate-bottom">
                    <h1 class="headline">Blend</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="culiry-delight">
        <div class="container">
            <div class="restaurant-info">
                <div class="restaurant-description padding-right animate-left">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            <span class="first-letter">C</span>ulinary
                        </h2>
                        <h1 class="headline headline-dark">Delight</h1>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, atque beatae delectus dolores eius exercitationem fugit impedit libero omnis placeat possimus, sed vel voluptate. At expedita labore neque similique voluptate!</p>
                        <a href="#" class="btn body-btn">Make a reservation</a>
                    </div>
                </div>
                <div class="image-group">
                    <?php echo '<img class="animate-top" src="'.wp_get_attachment_image_src(4, 'full', false, '')[0].'">'; ?>
                    <?php echo '<img class="animate-bottom" src="'.wp_get_attachment_image_src(5, 'full', false, '')[0].'">'; ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php get_footer();?>