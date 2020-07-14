<?php
/*
Template Name: Image Slider Dark
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="image-slider-dark-wrapper">
        <div class="banner1">
            <?php echo '<img src="'.wp_get_attachment_image_src(17, 'image-large', false, '')[0].'">'; ?>
            <div class="text-box">
                <h1>Silence Is Not Enough</h1>
                <span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur corporis dolore laboriosam molestias pariatur praesentium ratione ullam velit voluptas! Autem blanditiis dignissimos distinctio facere nesciunt nihil omnis, optio quibusdam?</p>
            </div>
        </div>
        <div class="banner2">
            <?php echo '<img src="'.wp_get_attachment_image_src(18, 'image-large', false, '')[0].'">'; ?>
            <div class="text-box">
                <h1>Know Your Passion</h1>
                <span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur corporis dolore laboriosam molestias pariatur praesentium ratione ullam velit voluptas! Autem blanditiis dignissimos distinctio facere nesciunt nihil omnis, optio quibusdam?</p>
            </div>
        </div>
        <div class="banner3">
            <?php echo '<img src="'.wp_get_attachment_image_src(19, 'image-large', false, '')[0].'">'; ?>
            <div class="text-box">
                <h1>Keep Your Dream Alive</h1>
                <span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur corporis dolore laboriosam molestias pariatur praesentium ratione ullam velit voluptas! Autem blanditiis dignissimos distinctio facere nesciunt nihil omnis, optio quibusdam?</p>
            </div>
        </div>
        <div class="banner4">
            <?php echo '<img src="'.wp_get_attachment_image_src(20, 'image-large', false, '')[0].'">'; ?>
            <div class="text-box">
                <h1>Silence Is Not Enough</h1>
                <span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur corporis dolore laboriosam molestias pariatur praesentium ratione ullam velit voluptas! Autem blanditiis dignissimos distinctio facere nesciunt nihil omnis, optio quibusdam?</p>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
