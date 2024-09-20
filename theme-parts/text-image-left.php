<section class="smp__text__image">
    <div class="smp__text__image__holder">
        <div class="text-start">

            <!-- <div class="col-lg-6 col-12 smp__text__image__img order-lg-<?php echo $text_image["image-order"] ?> order-1">
                <img src="<?php echo get_stylesheet_directory_uri(); ?><?php echo $text_image["image-src"] ?>" alt="<?php echo $text_image["image-alt"] ?>">
            </div> -->
            <div class="col-lg-12 col-12 order-lg-<?php echo $text_image["text-order"] ?> order-2 p-0">
                <div class="smp__text__image__content">
                    <h1 class="smp-font-32-normal smp__process__title mb-4"><?php echo $text_image["title"] ?></h1>
                    <p class="smp-font-18-normal smp__checkbox__description">
                        <?php echo $text_image["desc"] ?>
                    </p>
                    <?php if (!empty($text_image["button"])) : ?>
                        <a href="<?php echo $text_image["button-link"] ?>"><?php echo $text_image["button"] ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>