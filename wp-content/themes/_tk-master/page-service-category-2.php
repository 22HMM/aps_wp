<?php include('header.php'); ?>
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

<!-- main -->
<main class="sub-page service-page">

    <section class="container" style="margin-top: 90px; margin-bottom: 90px">
        <div class="row">
            <div class="col-10 inner-container mx-auto">
                <h2 class="text-center mb-3" style="font-weight: 600;color: var(--clr-primary);">Category 2</h2>
                <?php
                $category2 = new WP_Query([
                    'post_type' => 'service2',
                    'posts_per_page' => -1,
                    'orderby' => 'id',
                    'order' => 'ASC'
                ]);

                if ($category2->have_posts()) :
                    while ($category2->have_posts()) : $category2->the_post();
                ?>
                        <div class="my-5">
                            <div class="w-75 mx-auto mb-5">
                                <?php the_post_thumbnail("large", ['class' => 'w-100']); ?>
                            </div>
                            <h3 class="text-center"><?php the_title() ?></h3>
                        </div>
                <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>