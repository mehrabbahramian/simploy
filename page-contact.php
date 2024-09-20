<?php

/** Template Name: Contact*/
get_header();
?>
<div class="smp__homepage__form">
    <?php require_once('theme-parts/form.php');
    ?>
</div>
    <section class="pages__background">
        <div class="container">
            <div class="row justify-content-between">
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
