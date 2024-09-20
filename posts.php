<?php

/** Template Name: Posts*/
get_header();
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
);
$query = new WP_Query($args)
?>

<section class="ns_posts">
    <div class="container">
        <div class="row">
            <h1 class="smp__process__title text-center smp-font-48-bold">
                Posts
            </h1>
            <div class="cards">
                <?php if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                ?>
                        <div class="card_item card card_radius_top_left">
                            <a href="<?= get_the_permalink() ?>">
                                <div class="image_card">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
                                    <?php else : ?>
                                        <img src="<?= get_template_directory_uri() . '/images/default-image.jpg'; ?>" alt="<?php the_title() ?>">
                                    <?php endif; ?>
                                </div>

                                <h3 class="smp-font-24-bold title"><?= the_title() ?></h3>
                                <div class="card_p smp-font-18-normal">
                                    <p>
                                        <?php
                                        $excerpt = get_the_excerpt();
                                        echo mb_substr($excerpt, 0, 80) . ' ...';
                                        ?>
                                    </p>
                                </div>
                                <div class="button_center smp__text__image__content smp__post__btn">
                                    <span class="post_button">
                                        Read More
                                    </span>
                                </div>
                            </a>
                        </div>

                <?php
                    endwhile;
                endif;
                ?>
            </div>
            <div class="smp__popup__container" id="popupContainer">
                <div class="container">
                    <div class="row">
                        <?php require_once('theme-parts/popup-form.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer()
?>