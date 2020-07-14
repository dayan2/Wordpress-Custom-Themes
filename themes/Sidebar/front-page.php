<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="#"><i class="fas fa-address-card"></i>About</a></li>
                <li><a href="#"><i class="fas fa-project-diagram"></i>Portfolio</a></li>
                <li><a href="#"><i class="fas fa-blog"></i>Blogs</a></li>
                <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
                <li><a href="#"><i class="fas fa-map-pin"></i>Map</a></li>
            </ul>
            <div class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="main-content">
            <div class="header">Welcome!! Have a nice day.</div>
            <div class="info">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, dolorem enim facere illum magnam mollitia qui repellat similique veritatis? Accusantium ad, commodi consectetur consequatur consequuntur, cum dignissimos distinctio doloremque doloribus ducimus earum eum illum inventore ipsam maxime molestias nostrum officiis perferendis placeat quod ratione repellendus sint tempora velit voluptatum. Ab alias asperiores at dolorum inventore perferendis quos tenetur velit veritatis! A, animi commodi delectus doloremque esse eveniet inventore itaque laudantium libero magnam maiores necessitatibus nobis quod ratione recusandae, vitae voluptatum?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, dolorem enim facere illum magnam mollitia qui repellat similique veritatis? Accusantium ad, commodi consectetur consequatur consequuntur, cum dignissimos distinctio doloremque doloribus ducimus earum eum illum inventore ipsam maxime molestias nostrum officiis perferendis placeat quod ratione repellendus sint tempora velit voluptatum. Ab alias asperiores at dolorum inventore perferendis quos tenetur velit veritatis! A, animi commodi delectus doloremque esse eveniet inventore itaque laudantium libero magnam maiores necessitatibus nobis quod ratione recusandae, vitae voluptatum?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, dolorem enim facere illum magnam mollitia qui repellat similique veritatis? Accusantium ad, commodi consectetur consequatur consequuntur, cum dignissimos distinctio doloremque doloribus ducimus earum eum illum inventore ipsam maxime molestias nostrum officiis perferendis placeat quod ratione repellendus sint tempora velit voluptatum. Ab alias asperiores at dolorum inventore perferendis quos tenetur velit veritatis! A, animi commodi delectus doloremque esse eveniet inventore itaque laudantium libero magnam maiores necessitatibus nobis quod ratione recusandae, vitae voluptatum?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, dolorem enim facere illum magnam mollitia qui repellat similique veritatis? Accusantium ad, commodi consectetur consequatur consequuntur, cum dignissimos distinctio doloremque doloribus ducimus earum eum illum inventore ipsam maxime molestias nostrum officiis perferendis placeat quod ratione repellendus sint tempora velit voluptatum. Ab alias asperiores at dolorum inventore perferendis quos tenetur velit veritatis! A, animi commodi delectus doloremque esse eveniet inventore itaque laudantium libero magnam maiores necessitatibus nobis quod ratione recusandae, vitae voluptatum?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, dolorem enim facere illum magnam mollitia qui repellat similique veritatis? Accusantium ad, commodi consectetur consequatur consequuntur, cum dignissimos distinctio doloremque doloribus ducimus earum eum illum inventore ipsam maxime molestias nostrum officiis perferendis placeat quod ratione repellendus sint tempora velit voluptatum. Ab alias asperiores at dolorum inventore perferendis quos tenetur velit veritatis! A, animi commodi delectus doloremque esse eveniet inventore itaque laudantium libero magnam maiores necessitatibus nobis quod ratione recusandae, vitae voluptatum?</p>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer();?>
