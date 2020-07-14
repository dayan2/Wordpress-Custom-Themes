<?php
/*
Template Name: Collapse Nav
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="collapse-nav-wrapper">
        <input type="checkbox" id="check">
        <div class="header">
            <label for="check"><i class="fas fa-bars" id="sidebar_btn"></i></label>
            <div class="left_area">
                <h3>Coding <span>Snow</span></h3>
            </div>
            <div class="right_area">
                <a href="#" class="logout_btn">Logout</a>
            </div>
        </div>

        <div class="sidebar">
            <center>
                <?php echo '<img class="profile_image" src="'.wp_get_attachment_image_src(13, 'thumbnail', false, '')[0].'">'; ?>
                <h4>John</h4>
            </center>

            <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href="#"><i class="fas fa-cogs"></i><span>Component</span></a>
            <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
            <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
            <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
            <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
        </div>

        <div class="content" style="background: url(<?php echo wp_get_attachment_image_src(14,  'full', false, '')[0];?>) center no-repeat; background-size: cover"></div>
    </section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
