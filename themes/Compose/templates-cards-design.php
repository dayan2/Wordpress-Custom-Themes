<?php
/*
Template Name: Card Design
 */
?>
<?php get_header();?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="cards-wrapper">
        <div class="card">
            <div class="card-image" style="background: url(<?php echo wp_get_attachment_image_src(10,  'medium', false, '')[0];?>) center no-repeat; background-size: cover"></div>
            <div class="card-text">
                <span class="date">4 days ago</span>
                <h2>Post One</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque autem beatae deleniti doloremque dolorum eaque eos explicabo, facere fuga fugiat incidunt ipsam laborum minus mollitia numquam porro quae repudiandae saepe.</p>
            </div>
            <div class="card-stats">
                <div class="stat">
                    <div class="value">4<sup>m</sup></div>
                    <div class="type">read</div>
                </div>
                <div class="stat border">
                    <div class="value">5214</div>
                    <div class="type">views</div>
                </div>
                <div class="stat">
                    <div class="value">32</div>
                    <div class="type">comments</div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-image" style="background: url(<?php echo wp_get_attachment_image_src(8,  'medium', false, '')[0];?>) center no-repeat;"></div>
            <div class="card-text">
                <span class="date">4 days ago</span>
                <h2>Post Two</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque autem beatae deleniti doloremque dolorum eaque eos explicabo, facere fuga fugiat incidunt ipsam laborum minus mollitia numquam porro quae repudiandae saepe.</p>
            </div>
            <div class="card-stats">
                <div class="stat">
                    <div class="value">2<sup>m</sup></div>
                    <div class="type">read</div>
                </div>
                <div class="stat border">
                    <div class="value">9995</div>
                    <div class="type">views</div>
                </div>
                <div class="stat">
                    <div class="value">100</div>
                    <div class="type">comments</div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-image" style="background: url(<?php echo wp_get_attachment_image_src(9,  'medium', false, '')[0];?>) center no-repeat;"></div>
            <div class="card-text">
                <span class="date">2 days ago</span>
                <h2>Post Three</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque autem beatae deleniti doloremque dolorum eaque eos explicabo, facere fuga fugiat incidunt ipsam laborum minus mollitia numquam porro quae repudiandae saepe.</p>
            </div>
            <div class="card-stats">
                <div class="stat">
                    <div class="value">8<sup>m</sup></div>
                    <div class="type">read</div>
                </div>
                <div class="stat border">
                    <div class="value">5500</div>
                    <div class="type">views</div>
                </div>
                <div class="stat">
                    <div class="value">200</div>
                    <div class="type">comments</div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>
