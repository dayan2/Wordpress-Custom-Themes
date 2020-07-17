<?php
/*
Template Name: Login Form
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="login-form-wrapper">
<!--        --><?php //echo '<img class="wave" src="'.wp_get_attachment_image_src(40, 'full', false, '')[0].'">'; ?>

        <div class="container">
            <div class="img">
                <?php echo '<img src="'.wp_get_attachment_image_src(40, 'full', false, '')[0].'">'; ?>
            </div>
            <div class="login-container">
                <form action="#">
                    <?php echo '<img class="avatar" src="'.wp_get_attachment_image_src(42, 'full', false, '')[0].'">'; ?>

                    <h2>Welcome</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h5>Username</h5>
                            <input type="text" class="input">
                        </div>
                    </div>

                    <div class="input-div two">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div>
                            <h5>Password</h5>
                            <input type="password" class="input">
                        </div>
                    </div>

                    <a href="#">Forget Password?</a>
                    <input type="submit" class="btn" value="Login">
                </form>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
