<?php include('header.php'); ?>

<!-- main -->
<main class="sub-page service-page">
    <!-- banner -->
    <section class="banner position-relative">
        <img class="w-full h-full" src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/medical.png" alt="medical">
        <div class="text-light header-content">
            <h1 class="ps-4">Services</h1>
            <div class="w-50 mt-3 mx-auto d-flex jusitify-content-center">
                <p class="d-flex">
                    <a href="/" class="me-4 text-light text-decoration-none">Home</a>
                    <svg class="me-4 mt-1" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.69169e-05 12.88V1.71C-0.00113818 1.51138 0.0568838 1.31691 0.166685 1.15139C0.276486 0.985868 0.433091 0.856797 0.616535 0.78063C0.799979 0.704464 1.00195 0.684652 1.1967 0.723722C1.39145 0.762791 1.57015 0.858972 1.71002 1L7.29002 6.59C7.47627 6.77736 7.58081 7.03082 7.58081 7.295C7.58081 7.55919 7.47627 7.81264 7.29002 8L1.71002 13.59C1.57015 13.731 1.39145 13.8272 1.1967 13.8663C1.00195 13.9054 0.799979 13.8855 0.616535 13.8094C0.433091 13.7332 0.276486 13.6041 0.166685 13.4386C0.0568838 13.2731 -0.00113818 13.0786 1.69169e-05 12.88Z" fill="white" />
                    </svg>
                </p>
                <p class="">Services</p>
            </div>
        </div>
    </section>

    <section class="container" style="margin-top: 90px; margin-bottom: 90px">
        <div class="row">
            <div class="col-10 inner-container mx-auto">
                <h2 class="text-center mb-3" style="font-weight: 600;color: var(--clr-primary);">Category 1</h2>
                <?php
                $services = new WP_Query([
                    'post_type' => "service",
                    'posts_per_page' => -1,
                    'orderBy' => 'id',
                    'order' => 'ASC'
                ]);
                while ($services->have_posts()) : if ($services->have_posts()) : $services->the_post();
                ?>
                        <div class="row my-5">
                            <div class="mb-3 col-md-12 col-lg-6 col-12">
                                <div class="image-container overflow-hidden">
                                    <?php echo the_post_thumbnail('', array('class' => 'w-100 group-photo')) ?>
                                    <!-- <img class="w-100 group-photo" height="335px" src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/Mask_group.png" alt="group"> -->
                                </div>
                            </div>
                            <div class="my-3 col-md-12 col-lg-6 col-12">
                                <h3><?php echo the_title() ?>သင်တန်း</h3>
                                <?php if (get_field('fee')) : ?>
                                    <div class="d-flex jusitify-content-between align-items-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/calendar.svg" alt="calendar">
                                        <p class="desc d-flex mt-2 ms-2"><span class="me-2"><?php the_field('duration') ?></span></p>
                                    </div>
                                <?php endif ?>
                                <?php if (get_field('fee')) : ?>
                                    <div class="d-flex jusitify-content-between align-items-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/money.svg" alt="">
                                        <p class="desc d-flex mt-2 ms-2"><span class="me-4"><?php the_field('fee') ?></span></p>
                                    </div>
                                <?php endif ?>

                                <div class="mt-2">
                                    <p class="sub-desc">PACKAGE တွင်ပါ၀င်သောပစ္စည်းများ</p>
                                </div>
                                <div class="d-flex jusitify-content-between align-items-center">
                                    <?php if (get_field('book')) : ?>
                                        <div class="d-flex jusitify-content-between align-items-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/book.svg" alt="book">
                                            <p class="mt-2 ms-2"><?php echo the_field('book') ?></p>
                                        </div>
                                    <?php endif ?>
                                    <?php if (get_field('uniform')) : ?>
                                        <div class="d-flex jusitify-content-between align-items-center ms-4">
                                            <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/uniform.svg" alt="uniform">
                                            <p class="mt-2 ms-2"><?php echo the_field('uniform') ?></p>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <div class="d-flex jusitify-content-between align-items-center">
                                    <?php if (get_field('equipment')) : ?>
                                        <div class="d-flex jusitify-content-between align-items-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/medical_instrument.svg" alt="medical_instrument">
                                            <p class="mt-2 ms-2"><?php echo the_field('equipment') ?></p>
                                        </div>
                                    <?php endif ?>
                                    <?php if (get_field('document')) : ?>
                                        <div class="d-flex jusitify-content-between align-items-center ms-4">
                                            <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/pages.svg" alt="pages">
                                            <p class="mt-2 ms-2"><?php echo the_field('document') ?></p>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <div class="d-flex jusitify-content-between align-items-center">
                                    <?php if (get_field('language')) : ?>
                                        <div class="d-flex jusitify-content-between align-items-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/conversation.svg" alt="conversation">
                                            <p class="mt-2 ms-2"><?php echo the_field('language') ?></p>
                                        </div>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                <?php
                    endif;
                endwhile;
                ?>

            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>