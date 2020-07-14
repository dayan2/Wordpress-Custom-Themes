<?php
/*
Template Name: Registration Form
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="registration-form-wrapper">
        <div class="wrapper-form">
            <div class="title">Registration Form</div>

            <div class="form">
                <div class="input_field">
                    <label>First Name</label>
                    <input type="text" class="input">
                </div>
                <div class="input_field">
                    <label>Last Name</label>
                    <input type="text" class="input">
                </div>
                <div class="input_field">
                    <label>Password</label>
                    <input type="password" class="input">
                </div>
                <div class="input_field">
                    <label>Confirm Password</label>
                    <input type="password" class="input">
                </div>
                <div class="input_field">
                    <label>Gender</label>
                    <div class="custom_select">
                        <select>
                            <option value="">Select</option>
                            <option value="">Male</option>
                            <option value="">Female</option>
                        </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>Email Address</label>
                    <textarea class="textarea"></textarea>
                </div>
                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="text" class="input">
                </div>
                <div class="input_field">
                    <label>Address</label>
                    <input type="text" class="input">
                </div>
                <div class="input_field">
                    <label>Postal Code</label>
                    <input type="text" class="input">
                </div>
                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" class="kkkkk">
                        <span class="checkmark"></span>
                    </label>
                    <p>Agreed to terms and conditions</p>
                </div>
                <div class="input_field">
                    <input type="submit" value="Register" class="btn">
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
