<?php include('header.php'); ?>

<!-- main -->
<main class="main-section">
    <!-- banner -->
    <?php
    $banner_photos = new WP_Query(
        [
            'post_type' => 'banner-photos',
            'posts_per_page' => 1,
        ]
    );
    if ($banner_photos->have_posts()) : $banner_photos->the_post();
        $home_page_banner = get_field('home_page_banner');
        $footer_banner = get_field('footer_banner');
    ?>
        <section class="banner">
            <img src="<?php echo esc_url($home_page_banner['url']); ?>" alt="home banner">
        </section>
    <?php endif; ?>

    <section class="container services">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="row">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php
                            $services = new WP_Query([
                                'post_type' => 'service',
                                'posts_per_page' => -1,
                                'orderby' => 'ID',
                                'order' => 'ASC'
                            ]);

                            $count = 1;
                            while ($services->have_posts()) : $services->the_post();
                                $post_thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get full size image URL
                            ?>
                                <div class="swiper-slide">
                                    <div class="card text-light">
                                        <div class="image-container">
                                            <?php if ($post_thumbnail_url) : ?>
                                                <img src="<?php echo esc_url($post_thumbnail_url); ?>" class="card-img-top group-photo w-100 h-100" alt="<?php the_title_attribute(); ?>">
                                            <?php endif; ?>
                                        </div>
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <h5 class="card-title text-truncate"><?php the_title(); ?></h5>
                                        </div>
                                    </div>
                                    <div class="card-button">
                                        <a href="/services" class="<?php echo ($count % 2 == 1) ? 'btn btn-red' : 'btn btn-blue'; ?> services-nav-link">
                                            <svg class="vector-icon" width="22" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.1696 7.00932L21.1691 6.98635C21.1579 6.3883 21.1471 5.82306 21.1471 5.27937C21.1471 4.45541 20.4769 3.78565 19.6534 3.78565C16.4663 3.78565 14.0474 2.87686 12.0409 0.92569C11.4569 0.358103 10.542 0.358103 9.95802 0.92569C7.95201 2.87686 5.53309 3.78565 2.34646 3.78565C1.52296 3.78565 0.852733 4.45541 0.852733 5.27937C0.852733 5.8343 0.841953 6.40517 0.830236 7.00979C0.776336 9.83131 0.709314 13.3428 1.88761 16.5303C2.53581 18.2832 3.51678 19.806 4.80381 21.0574C6.26988 22.4827 8.18964 23.6132 10.5101 24.4175C10.6681 24.4723 10.8326 24.5 10.9995 24.5C11.1663 24.5 11.3313 24.4723 11.4888 24.4175C13.8093 23.6132 15.7295 22.4827 17.1956 21.0574C18.4826 19.806 19.4636 18.2828 20.1118 16.5303C21.2905 13.3423 21.2235 9.83084 21.1696 7.00932ZM16.0712 13.6694C16.0712 14.0575 15.7567 14.3724 15.3681 14.3724H13.1062V16.6348C13.1062 17.0229 12.7913 17.3378 12.4032 17.3378H9.59713C9.20905 17.3378 8.89409 17.0229 8.89409 16.6348V14.3724H6.63171C6.24316 14.3724 5.92867 14.0575 5.92867 13.6694V10.8633C5.92867 10.4752 6.24316 10.1603 6.63171 10.1603H8.89409V7.89791C8.89409 7.50983 9.20905 7.19487 9.59713 7.19487H12.4032C12.7913 7.19487 13.1062 7.50983 13.1062 7.89791V10.1603H15.3681C15.7567 10.1603 16.0712 10.4752 16.0712 10.8633V13.6694Z" fill="white" />
                                            </svg>
                                            <span class="ms-3">More Info</span>
                                        </a>
                                    </div>
                                </div>
                            <?php $count++;
                            endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about -->
    <?php
    $abouts = new WP_Query([
        'post_type' => 'about-us',
        'posts_per_page' => 1,
    ]);
    while ($abouts->have_posts()) : if ($abouts->have_posts()) : $abouts->the_post();
    ?>
            <section class="container about">
                <!-- lower about -->
                <div class="row lower-about">
                    <div class="col-10 mx-auto">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 col-12">
                                <?php the_post_thumbnail('', ['style' => 'width: 100%; height: 100%;']) ?>
                                <!-- <img width="100%" height="100%" src="<?php echo get_template_directory_uri(); ?>/includes/aung_pyit_sone/images/about.png" alt="about"> -->
                            </div>
                            <div class="col-md-12 col-lg-6 col-12 p-5">
                                <h4><?php the_field('subtitle'); ?></h4>
                                <h3><?php the_title() ?></h3>
                                <p class="my-4">
                                    <?php the_content() ?>
                                </p>
                                <a href="about-us" class="btn-red about-us-nav-link">
                                    <svg width="22" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.1696 7.00932L21.1691 6.98635C21.1579 6.3883 21.1471 5.82306 21.1471 5.27937C21.1471 4.45541 20.4769 3.78565 19.6534 3.78565C16.4663 3.78565 14.0474 2.87686 12.0409 0.92569C11.4569 0.358103 10.542 0.358103 9.95802 0.92569C7.95201 2.87686 5.53309 3.78565 2.34646 3.78565C1.52296 3.78565 0.852733 4.45541 0.852733 5.27937C0.852733 5.8343 0.841953 6.40517 0.830236 7.00979C0.776336 9.83131 0.709314 13.3428 1.88761 16.5303C2.53581 18.2832 3.51678 19.806 4.80381 21.0574C6.26988 22.4827 8.18964 23.6132 10.5101 24.4175C10.6681 24.4723 10.8326 24.5 10.9995 24.5C11.1663 24.5 11.3313 24.4723 11.4888 24.4175C13.8093 23.6132 15.7295 22.4827 17.1956 21.0574C18.4826 19.806 19.4636 18.2828 20.1118 16.5303C21.2905 13.3423 21.2235 9.83084 21.1696 7.00932ZM16.0712 13.6694C16.0712 14.0575 15.7567 14.3724 15.3681 14.3724H13.1062V16.6348C13.1062 17.0229 12.7913 17.3378 12.4032 17.3378H9.59713C9.20905 17.3378 8.89409 17.0229 8.89409 16.6348V14.3724H6.63171C6.24316 14.3724 5.92867 14.0575 5.92867 13.6694V10.8633C5.92867 10.4752 6.24316 10.1603 6.63171 10.1603H8.89409V7.89791C8.89409 7.50983 9.20905 7.19487 9.59713 7.19487H12.4032C12.7913 7.19487 13.1062 7.50983 13.1062 7.89791V10.1603H15.3681C15.7567 10.1603 16.0712 10.4752 16.0712 10.8633V13.6694Z" fill="white" />
                                    </svg>
                                    <span class="ms-3">More Info</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php endif;
    endwhile; ?>


    <!-- opportunity -->
    <?php
    if (!empty($footer_banner)) :
    ?>
        <section class="container job-opportunity-container">
            <img src="<?php echo esc_url($footer_banner['url']) ?>" alt="job-opportunity">
        </section>
    <?php
    endif;
    ?>
</main>

<?php include('footer.php'); ?>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        breakpoints: {
            // when window width is >= 992px (lg)
            992: {
                slidesPerView: 3,
                spaceBetween: 35,
            },
            // when window width is >= 768px (md)
            768: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            // when window width is <= 767px (xs)
            0: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
        },
    });
</script>