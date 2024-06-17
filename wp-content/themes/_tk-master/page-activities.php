<?php include('header.php'); ?>

<!-- main -->
<main class="sub-page activity-page">
    <!-- banner -->
    <section class="banner position-relative">
        <img class="w-full h-full" src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/medical.png" alt="medical">
        <div class="text-light header-content">
            <h1>ACTIVITIES</h1>
            <div class="w-50 mt-3 mx-auto d-flex jusitify-content-center">
                <p class="d-flex text-light">
                    <a href="/" class="me-4 text-light text-decoration-none">Home</a>
                    <svg class="me-4 mt-1" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.69169e-05 12.88V1.71C-0.00113818 1.51138 0.0568838 1.31691 0.166685 1.15139C0.276486 0.985868 0.433091 0.856797 0.616535 0.78063C0.799979 0.704464 1.00195 0.684652 1.1967 0.723722C1.39145 0.762791 1.57015 0.858972 1.71002 1L7.29002 6.59C7.47627 6.77736 7.58081 7.03082 7.58081 7.295C7.58081 7.55919 7.47627 7.81264 7.29002 8L1.71002 13.59C1.57015 13.731 1.39145 13.8272 1.1967 13.8663C1.00195 13.9054 0.799979 13.8855 0.616535 13.8094C0.433091 13.7332 0.276486 13.6041 0.166685 13.4386C0.0568838 13.2731 -0.00113818 13.0786 1.69169e-05 12.88Z" fill="white" />
                    </svg>
                </p>
                <p class="text-light">Activities</p>
            </div>
        </div>
    </section>

    <div class="container" style="margin-top: 90px;">
        <div class="row">
            <?php
            $activites = new WP_Query([
                'post_type' => 'activity',
                'posts_per_page' => -1,
                'orderBy' => 'id',
                'order' => 'ASC'
            ]);
            if ($activites->have_posts()) : while ($activites->have_posts()) : $activites->the_post();
            ?>

                    <div class="col-lg-4 col-md-6 col-12 p-2 p-0">
                        <div class="position-relative activity-gallery-container" style="overflow: hidden;">
                            <?php the_post_thumbnail("", ["style" => 'width: 100%; height: 100%;', 'class' => 'group-photo']); ?>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop-<?php the_ID(); ?>" class="eye-holder position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%); background: transparent; border: none;">
                                <svg class="eye" width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 12C4 12 5.6 7 12 7M12 7C18.4 7 20 12 20 12M12 7V4M18 5L16 7.5M6 5L8 7.5M15 13C15 14.6569 13.6569 16 12 16C10.3431 16 9 14.6569 9 13C9 11.3431 10.3431 10 12 10C13.6569 10 15 11.3431 15 13Z" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>

                            <!-- Modal -->
                            <!-- <div class="modal fade" data-bs-backdrop="true" id="staticBackdrop-<?php the_ID(); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered model-xl">
                                    <div class="modal-inner">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" style="width: 100%" class="img-fluid" alt="Activity Image">
                                    </div>
                                </div>
                            </div> -->
                            <div class="modal fade" data-bs-backdrop="true" id="staticBackdrop-<?php the_ID(); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content p-0">
                                        <div class="modal-body p-0 text-center">
                                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" class="img-fluid" style="width: 100%; height: auto; max-width: none;" alt="Activity Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif; ?>
        </div>
        <!-- <div class="row row2 mt-5">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/calendar.svg" alt="calendar">
                            <p class="ms-4"><small>May 9, 2024</small></p>
                        </div>
                        <h3 class="my-3">
                            Lorem ipsum dolor sit amet
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Odio est tortor fermentum dictum turpis elementum. Dolor
                            mollis viverra id malesuada pellentesque pulvinar ac proin. Lorem molestie sem auctor eget
                            maecenas. Commodo faucibus pretium morbi ac tortor eget nisl mi cum. Duis habitasse ut faucibus
                            sodales sit iaculis. Volutpat quam maecenas purus molestie. Amet fusce ullamcorper rhoncus
                            facilisi lacus nibh porttitor. Nibh elementum libero ut luctus tincidunt. Odio sagittis
                            phasellus euismod arcu. Bibendum ac commodo dignissim urna eget ut aenean. Ac enim arcu eget
                            lacus mauris. Quam et elementum donec sollicitudin cursus vel nam.
                            Viverra sed velit aliquam in tellus in ipsum iaculis dolor. Pretium quam bibendum et ornare
                            congue. Nisl id eu elit nec viverra amet pellentesque lectus vitae. Urna lobortis lectus eget
                            ornare eget in quisque dui. Sed vestibulum augue fames erat enim massa ac. Lorem in lorem nunc
                            odio massa in.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div id="carouselControls2" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/activity.png" class="d-block w-100" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/activity2.png" class="d-block w-100" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/activity3.png" class="d-block w-100" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/activity4.png" class="d-block w-100" alt="Fourth slide">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselControls2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div> -->
    </div>
</main>

<?php include('footer.php'); ?>