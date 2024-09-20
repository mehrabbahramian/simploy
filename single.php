<?php
get_header();
?>
<section class="pages__background">
    <div class="container single">
        <div class="row">
            <div class="col-lg-8 col-12 text-left">
                <section>
                    <div class="privacy_content">
                        <h1 class="smp__process__title text-center smp-font-48-normal mb-4">
                            <?= get_the_title() ?>
                        </h1>
                        <div class="content smp__checkbox__description">
                            <?= get_the_content() ?>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-4 col-0 p-0">
                <?php require_once('theme-parts/sidebar-form.php');
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
get_footer();
