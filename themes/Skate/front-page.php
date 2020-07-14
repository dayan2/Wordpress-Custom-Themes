<?php get_header();?>

<div class="main_container" id="home">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="navbar">
            <div class="logo">
                <a href="#">Coding Market</a>
            </div>
            <div class="navbar_items">
                <ul>
                    <li><a href="#home">home</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#services">services</a></li>
                    <li><a href="#contactus">contact</a></li>
                    <li><a href="#ourteam">our team</a></li>
                </ul>
            </div>
        </div>


        <div class="banner_image" style="background: url(<?php echo the_post_thumbnail_url('blog-large');?>) no-repeat top center; background-size: cover;">
            <div class="banner_content">
                <h1>Only I can change my life.<br/><span>No one can do it for me.</span>
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>
        </div>

        <div class="about" id="about">
            <h1 class="title">About Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="btn"><a href="#">Learn More</a></div>
        </div>

        <div class="services" id="services">
            <h1 class="title">Our services</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="btn"><a href="#">Learn More</a></div>

            <div class="diff_service">
                <div class="diff_service_item">
                    <?php echo '<img src="'.wp_get_attachment_image_src(14, 'full', false, '')[0].'">'; ?>
                    <h3>Web Development</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                </div>
                <div class="diff_service_item">
                    <?php echo '<img src="'.wp_get_attachment_image_src(15, 'full', false, '')[0].'">'; ?>
                    <h3>App Development</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                </div>
                <div class="diff_service_item">
                    <?php echo '<img src="'.wp_get_attachment_image_src(16, 'full', false, '')[0].'">'; ?>
                    <h3>PSD to HTML</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                </div>
            </div>
        </div>

        <div class="contactus" id="contactus">
            <h1 class="title">Contact Us</h1>
            <div class="form_wrapper">
                <div class="form_input"><input type="text" placeholder="Email"></div>
                <div class="form_input"><input type="text" placeholder="Subject"></div>
                <div class="form_input"><textarea placeholder="Message"></textarea></div>
                <div class="btn"><a href="#">Submit</a></div>
            </div>           
        </div>

        <div class="ourteam" id="ourteam">
            <h1 class="title">Our Team</h1>
            <div class="ourteam_wrapper">
                <div class="team_1 team">
                    <div class="team_member">
                        <?php echo '<img src="'.wp_get_attachment_image_src(17, 'full', false, '')[0].'">'; ?>
                    </div>
                    <div class="team_member">
                        <?php echo '<img src="'.wp_get_attachment_image_src(18, 'full', false, '')[0].'">'; ?>
                    </div>
                    <div class="team_member">
                        <?php echo '<img src="'.wp_get_attachment_image_src(19, 'full', false, '')[0].'">'; ?>
                    </div>
                </div>
                <div class="team_2 team">
                    <div class="team_member">
                        <?php echo '<img src="'.wp_get_attachment_image_src(20, 'full', false, '')[0].'">'; ?>
                    </div>
                    <div class="team_member">
                        <?php echo '<img src="'.wp_get_attachment_image_src(21, 'full', false, '')[0].'">'; ?>
                    </div>
                    <div class="team_member">
                        <?php echo '<img src="'.wp_get_attachment_image_src(22, 'full', false, '')[0].'">'; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <a href="#">@ 2020 DM</a>
        </div>

        <div class="arrow">
            <a href="#home"><?php echo '<img src="'.wp_get_attachment_image_src(23, 'full', false, '')[0].'">'; ?></a>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer();?>