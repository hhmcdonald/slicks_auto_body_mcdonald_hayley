<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

    <div class="row">
        <div class="six columns contactInfo">
            <h2>Contact Us</h2>
            <p><strong>Phone:</strong> 123-456-7890</p>
            <p><strong>Email:</strong> hello@slicksautobody.com</p>
            <p><strong>Address:</strong> 123 Slicks Auto Body Way <br> Auto Body City, TN <br> 12345</p>
        </div>
        <div class="six columns locationInfo">
            <img src="http://www.hayleymacdesigns.com/slicksautobody/wp-content/uploads/2016/08/location.jpg" alt="locationInfoMap" />
        </div>
    </div>

    <div class="row">
        <div class="twelve columns contactForm">
            <h1>How can we help you?</h1>
            <form method="post" action="">
                Name: <input type="text" name="name" value=""><br />
                Make: <input type="text" name="type" value=""><br />
                Model: <input type="text" name="size" value=""><br />
                Year: <input type="text" name="location" value=""><br />
                Issue: <input type="text" name="doa" value=""><br />
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>

<?php get_footer(); ?>
