<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <nav id="nav">
        <ul>
            <li class="active"><a href="#"><i class="fa fa-home"></i>Home</a></li>
            <li>
                <a href="#"><i class="fa fa-user"></i>About Us</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="#">Mission</a></li>
                        <li><a href="#">Vision</a></li>
                        <li><a href="#">Team</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#"><i class="fa fa-clone"></i>Services</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="#">Marketing</a></li>
                        <li class="hover-me">
                            <a href="#">Design</a> <i class="fa fa-angle-right"></i>
                            <div class="sub-menu-2">
                                <ul>
                                    <li><a href="#">SEO</a></li>
                                    <li><a href="#">Social Media</a></li>
                                    <li><a href="#">NEWS</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="hover-me">
                            <a href="#">Mobile App</a> <i class="fa fa-angle-right"></i>
                            <div class="sub-menu-2">
                                <ul>
                                    <li><a href="#">SEO</a></li>
                                    <li><a href="#">Social Media</a></li>
                                    <li><a href="#">NEWS</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="#"><i class="fa fa-users"></i>Clients</a></li>
            <li><a href="#"><i class="fa fa-kaaba"></i>Investers</a></li>
            <li><a href="#"><i class="fa fa-envelope"></i>Pricing</a></li>
            <li><a href="#"><i class="fa fa-edit"></i>Training</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>Contact</a></li>
        </ul>
    </nav>
<?php endwhile; endif; ?>

<?php get_footer();?>