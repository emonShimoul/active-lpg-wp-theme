<?php get_header(); ?>

<body <?php body_class(); ?>>
    <?php get_template_part("navbar"); ?>

    <div class="heading">
        <p>Active LPG</p>
        <h1>Unleash the Power <br> of LPG Conversion</h1>
    </div>

    <!-- clients-seen section starts -->
    <div class="clients-seen container">
        <h3>Our clients have seen</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <i class="fa-solid fa-gas-pump"></i>
                <h5>Reduced fuel costs</h5>
            </div>
            <div class="col">
                <i class="fa-solid fa-taxi"></i>
                <h5>Prolonged engine life</h5>
            </div>
            <div class="col">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h5>Lower maintenance costs</h5>
            </div>
        </div>
        <div class="clients-seen-bottom mx-auto">
            <p>The right LPG conversion can be the difference between a problematic car that's always at the garage and a car that lives up to the promise of LPG conversion. </p>
            <button type="button" class="btn btn-dark btn-lg">Contact Us</button>
        </div>
    </div>
    <!-- clients-seen section ends -->

    <!-- services section starts -->
    <div class="services container">
        <h3>Services to Save You Money</h3>
        <p>Every person needs something a little different. Here are ways we can <br> help you save money.</p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <h5>Conversion</h5>
                <ul>
                    <li><i class="fa-solid fa-circle-dot"></i> LPG Conversion: Sequential or Traditional kits (made in Italy or Turkey)</li>
                    <li><i class="fa-solid fa-circle-dot"></i> Installation: Our conversion time is around 4 hours. There is a variance in the time it takes based on the vehicle but we will always look to complete your vehicle as quickly as possible. Call us to check availability. </li>
                </ul>
            </div>
            <div class="col service-section">
                <h5>Service</h5>
                <ul>
                <i class="fa-solid fa-circle-dot"></i><li>CNG Service and Maintenance</li>
                    <li><i class="fa-solid fa-circle-dot"></i> Oil change</li>
                    <li><i class="fa-solid fa-circle-dot"></i> Tune-up / Spark Plug Replacement</li>
                    <li><i class="fa-solid fa-circle-dot"></i> Cabin Air Filter Replacement</li>
                    <li><i class="fa-solid fa-circle-dot"></i> Engine Air Filter Replacement</li>
                    <li><i class="fa-solid fa-circle-dot"></i> Radiator Coolant Fluid Exchange</li>
                    <li><i class="fa-solid fa-circle-dot"></i> Vehicle Inspections and Diagnostics</li>
                </ul>
            </div>
            <div class="col">
                <h5>Wholesale</h5>
                <ul>
                    <li><i class="fa-solid fa-circle-dot"></i> LPG Full Kit Set</li>
                    <li><i class="fa-solid fa-circle-dot"></i> LPG Front Kit Set</li>
                    <li><i class="fa-solid fa-circle-dot"></i> LPG Rear Kit Set</li>
                    <li><i class="fa-solid fa-circle-dot"></i> LPG Spare Parts</li>
                    <li><i class="fa-solid fa-circle-dot"></i> LPG Regulator</li>
                </ul>
            </div>
        </div>
        <!-- <div class="services-btn mx-auto">
            <button type="button" class="btn btn-dark btn-lg">Contact Us</button>
        </div> -->
    </div>
    <!-- services section ends -->

    <div class="container text-center">
        <img src="<?php echo header_image(); ?>" alt="">
    </div>

    <div class="posts">
        <?php
            while(have_posts()){
                the_post();
                get_template_part("post-formats/content",get_post_format());
            }
        ?>
    </div>

<?php get_footer(); ?>