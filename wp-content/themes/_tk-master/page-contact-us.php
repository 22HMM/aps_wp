<?php include('header.php'); ?>

<!-- main -->
<main class="sub-page contact-page">
    <!-- banner -->
    <section class="banner position-relative">
        <img class="w-full h-full" src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/medical.png" alt="medical">
        <div class="text-light header-content">
            <h1>Contact Us</h1>
            <div class="w-50 mt-3 mx-auto d-flex jusitify-content-center">
                <p class="d-flex">
                    <a href="/" class="me-4 text-light text-decoration-none">Home</a>
                    <svg class="me-4 mt-1" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.69169e-05 12.88V1.71C-0.00113818 1.51138 0.0568838 1.31691 0.166685 1.15139C0.276486 0.985868 0.433091 0.856797 0.616535 0.78063C0.799979 0.704464 1.00195 0.684652 1.1967 0.723722C1.39145 0.762791 1.57015 0.858972 1.71002 1L7.29002 6.59C7.47627 6.77736 7.58081 7.03082 7.58081 7.295C7.58081 7.55919 7.47627 7.81264 7.29002 8L1.71002 13.59C1.57015 13.731 1.39145 13.8272 1.1967 13.8663C1.00195 13.9054 0.799979 13.8855 0.616535 13.8094C0.433091 13.7332 0.276486 13.6041 0.166685 13.4386C0.0568838 13.2731 -0.00113818 13.0786 1.69169e-05 12.88Z" fill="white" />
                    </svg>
                </p>
                <p class="text-light">Contact</p>
            </div>
        </div>
    </section>

    <!-- contact form -->
    <section class="container" style="margin-top: 90px;">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="row">
                    <!-- Information -->
                    <div class="mb-3 col-md-6 address-side">
                        <h4>Contact Info.</h4>
                        <h3>Connect With Us</h3>
                        <div class="my-3" style="width: 40px; height: 5px; background: #022541;"></div>

                        <?php
                        $address = new WP_Query([
                            'post_type' => "contact",
                            'orderby' => 'id',
                            'order' => 'ASC'
                        ]);
                        while ($address->have_posts()) : if ($address->have_posts()) : $address->the_post();
                        ?>
                        <h5>Yangon</h5>
                                <div id="contact-info-1" class="contact-info mb-3">
                                    <div class="d-flex align-items-center">
                                        <img class="me-3" src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/location.svg" alt="location">
                                        <p class="mt-3">
                                            <?= get_field('location-yangon'); ?>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img class="me-3 mt-2" src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/contact-phone.svg" alt="contact-page">
                                        <a href="tel:<?= get_field('phone'); ?>" class="mt-2">
                                            <?= get_field('phone-yangon'); ?>
                                        </a>
                                    </div>
                                </div>
                                <h5>Mandalay</h5>
                                <div id="contact-info-2" class="contact-info mb-3">
                                    <div class="d-flex align-items-center">
                                        <img class="me-3" src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/location.svg" alt="location">
                                        <p class="mt-3">
                                            <?= the_field('location-mandalay'); ?>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img class="me-3 mt-2" src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/contact-phone.svg" alt="contact-page">
                                        <a href="tel:<?= the_field('phone'); ?>" class="mt-2">
                                            <?= the_field('phone-mandalay'); ?>
                                        </a>
                                    </div>
                                </div>
                                <h5>Myitkyina</h5>
                                <div id="contact-info-3" class="contact-info mb-3">
                                    <div class="d-flex align-items-center">
                                        <img class="me-3" src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/location.svg" alt="location">
                                        <p class="mt-3">
                                            <?= the_field('location-myitkyina'); ?>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img class="me-3 mt-2" src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/contact-phone.svg" alt="contact-page">
                                        <a href="tel:<?= the_field('phone'); ?>" class="mt-2">
                                            <?= the_field('phone-myitkyina'); ?>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center mb-5">
                                        <img class="me-3 mt-2" src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/contact-mail-box.svg" alt="contact-mail-box">
                                        <a href="mailto:<?= the_field('email'); ?>" class="mt-2">
                                            <?= the_field('email'); ?>
                                        </a>
                                    </div>
                                </div>
                        <?php
                            endif;
                        endwhile; ?>



                        <div>
                            <h4>Follow us on social media</h4>
                            <div class="mt-4 d-flex">
                                <div class="me-4">
                                    <a href="https://www.facebook.com/AungPyaeSoneNurseAid?mibextid=LQQJ4d" target="_blank" rel="noopener noreferrer">
                                        <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/facebook.svg" alt="fb">
                                    </a>
                                </div>
                                <div class="me-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/telegram.svg" alt="telegram">
                                </div>
                                <div class="me-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/instagram.svg" alt="instagram">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- form -->
                    <div class="my-3 col-md-6">
                        <h4>Drop Us A Line</h4>
                        <h3>We’d Love To Hear From You</h3>
                        <div class="my-3" style="width: 40px; height: 5px; background: #022541;"></div>

                        <div class="my-4">
                            <form action="#">
                                <div class="row my-4">
                                    <div class="col-md-6">
                                        <input type="text" name="" placeholder="Name" id="" class="form-control" style="padding: 10px 20px;">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" name="" placeholder="Phone Number" id="" class="form-control" style="padding: 10px 20px;">
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-md-12">
                                        <input type="email" name="" placeholder="Email" id="" class="form-control" style="padding: 10px 20px;">
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-md-12">
                                        <input type="text" name="" placeholder="Subject" id="" class="form-control" style="padding: 10px 20px;">
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-md-12">
                                        <textarea cols="30" rows="10" name="" placeholder="Type Your Message Here" id="" class="form-control" style="padding: 10px 20px;"></textarea>
                                    </div>
                                </div>
                                <div class="mt-5 d-flex justify-content-end">
                                    <button class="btn-red d-flex">
                                        <img class="me-4" src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/contact-mail.svg" alt="mail">
                                        <span>SEND US</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- map -->
    <section class="mb-0" style="margin-top: 50px; height: 550px">
        <!-- <img width="100%" src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/Basemap image.png" alt="map"> -->
        <iframe width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3744.4022569915046!2d95.44244727601246!3d20.20059881570569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c84b0062649d97%3A0xd7f5f81206c8db0d!2sAung%20Pyit%20Sone%20(Nurse-Aid%20%26%20Pharmacist%20Training%20Center)!5e0!3m2!1sen!2smm!4v1718002248846!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</main>

<script>
    jQuery(document).ready(function($) {
        $('.location-button').on('click', function() {
            var locationNumber = $(this).attr('data-location');
            $('.location-button').removeClass('active');
            $(this).addClass('active');
            $('.contact-info').hide();
            $('#contact-info-' + locationNumber).show();
        });
    });
</script>


<?php include('footer.php'); ?>