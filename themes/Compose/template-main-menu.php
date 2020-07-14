<?php
/*
Template Name: Main Menu
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="main-menu-wrapper">
        <div class="container">
            <label>
                <input type="checkbox" id="check">
                <span class="menu">
                    <span class="hamburger"></span>
                </span>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">ABOUT</a></li>
                </ul>
            </label>
        </div>
    </section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
