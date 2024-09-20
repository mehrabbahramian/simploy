<section>
    <div>
        <div class="faq">
            <h1 class="smp__process__title text-center smp-font-48-bold">
                <?= $faq["title"] ?>
            </h1>
            <h3 class="description">
                <?= $faq["desc"] ?>
            </h3>
            <?php
            $faqs = $faq["items"];
            foreach ($faqs as $faq_item) : ?>
                <div class="faq_item">
                    <div class="faq_content">
                        <h3 class="faq_question smp-font-16-normal smp-font-lg-24-normal">
                            <?= $faq_item["title"] ?>
                        </h3>
                        <p class="faq_answer smp-font-10-normal smp-font-lg-18-normal">
                            <?= $faq_item["desc"] ?>
                        </p>
                    </div>
                    <div class="faq_arrow">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Arrow.svg" alt="<?= $faq_item["title"] ?>">
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>