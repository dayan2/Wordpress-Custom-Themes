<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main>
        <section class="site-title" style="background: url(<?php echo the_post_thumbnail_url();?>);  background-size: cover;">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                <h3>Tours & Travels</h3>
                <h1>Amazing Place on Earth</h1>
                <button class="btn">Explore</button>
            </div>
        </section>

        <section>
            <div class="blog" style="background: url(<?php echo wp_get_attachment_image_src(7, 'full', false, '')[0];?>); background-repeat: no-repeat; background-position: right; background-size: 65%;">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <?php echo '<img src="'.wp_get_attachment_image_src(14, 'full', false, '')[0].'">'; ?>
                            <div class="blog-title">
                                <h3>London Fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <?php echo '<img src="'.wp_get_attachment_image_src(16, 'full', false, '')[0].'">'; ?>
                            <div class="blog-title">
                                <h3>London Fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <?php echo '<img src="'.wp_get_attachment_image_src(15, 'full', false, '')[0].'">'; ?>
                            <div class="blog-title">
                                <h3>London Fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <?php echo '<img src="'.wp_get_attachment_image_src(18, 'full', false, '')[0].'">'; ?>
                            <div class="blog-title">
                                <h3>London Fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div><?php echo '<img src="'.wp_get_attachment_image_src(9, 'full', false, '')[0].'" class="img">'; ?></div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="far fa-calendar-alt text-gray"></i>&nbsp;&nbsp;July 1, 2020</span>
                                <span>2 Comments</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Why should boys have all the fun? it's the women who are making India an alcohol-loving country</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>

                    <hr>

                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div><?php echo '<img src="'.wp_get_attachment_image_src(24, 'full', false, '')[0].'" class="img">'; ?></div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="far fa-calendar-alt text-gray"></i>&nbsp;&nbsp;July 2, 2020</span>
                                <span>7 Comments</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Why should boys have all the fun? it's the women who are making India an alcohol-loving country</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>

                    <hr>

                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div><?php echo '<img src="'.wp_get_attachment_image_src(11, 'full', false, '')[0].'" class="img">'; ?></div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="far fa-calendar-alt text-gray"></i>&nbsp;&nbsp;July 3, 2020</span>
                                <span>5 Comments</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Why should boys have all the fun? it's the women who are making India an alcohol-loving country</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>

                    <hr>

                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div><?php echo '<img src="'.wp_get_attachment_image_src(12, 'full', false, '')[0].'" class="img">'; ?></div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="far fa-calendar-alt text-gray"></i>&nbsp;&nbsp;July 4, 2020</span>
                                <span>22 Comments</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Why should boys have all the fun? it's the women who are making India an alcohol-loving country</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>

                    <div class="pagination flex-row">
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="pages">1</a>
                        <a href="#" class="pages">2</a>
                        <a href="#" class="pages">3</a>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>

                </div>
                <aside class="sidebar">
                    <div class="category">
                        <h1>Category</h1>
                        <ul class="category-list">
                            <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                <a href="#">Software</a>
                                <span>(05)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                                <a href="#">Software</a>
                                <span>(05)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                                <a href="#">Techonology</a>
                                <span>(02)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                                <a href="#">Lifestyle</a>
                                <span>(07)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="#">Shopping</a>
                                <span>(01)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="600">
                                <a href="#">Food</a>
                                <span>(08)</span>
                            </li>
                        </ul>
                    </div>

                    <div class="popular-post">
                        <h2>Popular Post</h2>
                        <div class="post-content">
                            <div class="post-image" data-aos="flip-up" data-aos-delay="200">
                                <div><?php echo '<img src="'.wp_get_attachment_image_src(30, 'full', false, '')[0].'" class="img">'; ?></div>
                                <div class="post-info flex-row">
                                    <span><i class="far fa-calendar-alt text-gray"></i>&nbsp;&nbsp;July 1, 2020</span>
                                    <span>2 Comments</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">New data recording system to better analyse road accidents</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div><?php echo '<img src="'.wp_get_attachment_image_src(31, 'full', false, '')[0].'" class="img">'; ?></div>
                                <div class="post-info flex-row">
                                    <span><i class="far fa-calendar-alt text-gray"></i>&nbsp;&nbsp;July 1, 2020</span>
                                    <span>2 Comments</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">New data recording system to better analyse road accidents</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div><?php echo '<img src="'.wp_get_attachment_image_src(32, 'full', false, '')[0].'" class="img">'; ?></div>
                                <div class="post-info flex-row">
                                    <span><i class="far fa-calendar-alt text-gray"></i>&nbsp;&nbsp;July 1, 2020</span>
                                    <span>2 Comments</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">New data recording system to better analyse road accidents</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                            <div class="post-image">
                                <div><?php echo '<img src="'.wp_get_attachment_image_src(33, 'full', false, '')[0].'" class="img">'; ?></div>
                                <div class="post-info flex-row">
                                    <span><i class="far fa-calendar-alt text-gray"></i>&nbsp;&nbsp;July 1, 2020</span>
                                    <span>2 Comments</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">New data recording system to better analyse road accidents</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                            <div class="post-image">
                                <div><?php echo '<img src="'.wp_get_attachment_image_src(34, 'full', false, '')[0].'" class="img">'; ?></div>
                                <div class="post-info flex-row">
                                    <span><i class="far fa-calendar-alt text-gray"></i>&nbsp;&nbsp;July 1, 2020</span>
                                    <span>2 Comments</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">New data recording system to better analyse road accidents</a>
                            </div>
                        </div>
                    </div>

                    <div class="news-letter" data-aos="flip-up" data-aos-delay="300">
                        <h2>Newsletter</h2>
                        <div class="form-element">
                            <input type="text" class="input-element" placeholder="Email">
                            <button class="btn form-btn">Subscribe</button>
                        </div>
                    </div>

                    <div class="popular-tags">
                        <h2>Popular Tags</h2>
                        <div class="tags flex-row">
                            <span class="tag" data-aos="flip-up" data-aos-delay="100">Software</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="200">Technology</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="300">Travel</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="400">Illustration</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="500">Design</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="600">Lifestyle</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="700">Love</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="800">Project</span>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </main>


    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid aut, consequatur exercitationem
                    itaque laboriosam praesentium quaerat quia saepe tempora?</p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Newsletter</h2>
                <p>Stay update with our latest</p>
                <div class="form-element">
                    <input type="text" placeholder="Email">
                    <span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h2>Instagram</h2>
                <div class="flex-row">
                    <?php echo '<img src="'.wp_get_attachment_image_src(24, 'full', false, '')[0].'">'; ?>
                    <?php echo '<img src="'.wp_get_attachment_image_src(25, 'full', false, '')[0].'" >'; ?>
                    <?php echo '<img src="'.wp_get_attachment_image_src(26, 'full', false, '')[0].'" >'; ?>
                </div>
                <div class="flex-row">
                    <?php echo '<img src="'.wp_get_attachment_image_src(27, 'full', false, '')[0].'" >'; ?>
                    <?php echo '<img src="'.wp_get_attachment_image_src(28, 'full', false, '')[0].'" >'; ?>
                    <?php echo '<img src="'.wp_get_attachment_image_src(29, 'full', false, '')[0].'" >'; ?>
                </div>
            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Follow Us</h2>
                <p>Let us be Social</p>
                <div>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="rights flex-row">
            <h4 class="text-gray">© Copyright 2020 DM</h4>
        </div>

        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>
<?php endwhile; endif; ?>

<?php get_footer();?>