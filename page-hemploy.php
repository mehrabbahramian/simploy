<?php

/** Template Name: Hemploy*/
get_header();
$text_image_data = array(
    "text_image_data" => array(
        array(
            "id" => "text_image1",
            "title" => "",
            "desc" => "Hemploy: Elevate Your Cannabis Enterprise
                        Welcome to Hemploy – where your cannabis venture blossoms.<br>
                         Our passion fuels the green revolution, offering bespoke solutions that nurture your business and its people.<br>
                          From HR brilliance to payroll precision, compliance clarity to safety and benefits, we handle the intricacies so you can thrive in your craft.
             ",
            "button" => "",
            "button-link" => "#",
            "image-src" => "/images/smp-team1.jpg",
            "image-alt" => "Simploy's HR Solutions Empowers People and Enriches Lives",
            "image-order" => "2",
            "text-order" => "1",
        ),
        array(
            "id" => "text_image2",
            "title" => "",
            "desc" => "Whether you're a quaint dispensary or a robust grow operation, we tailor our services to fit like a glove, ensuring your team and business grow in harmony. In manufacturing, our partnership spells streamlined efficiency, pouring savings back into your growth.",
            "button" => "",
            "button-link" => "#",
            "image-src" => "/images/smp-team2.jpg",
            "image-alt" => "Simploy's Inclusive HR Plans Benefit Everyone",
            "image-order" => "1",
            "text-order" => "2",
        ),
        array(
            "id" => "text_image3",
            "title" => "",
            "desc" => "For the precision-driven world of medicinal cannabis testing, Hemploy champions a workforce that's as dedicated as it is skilled.<br>
             And for those steering the wheels of transportation, we're your co-pilot in safety, making every mile a journey in wellbeing.",
            "button" => "",
            "button-link" => "#",
            "image-src" => "/images/smp-team1.jpg",
            "image-alt" => "Simploy's HR Solutions Empowers People and Enriches Lives",
            "image-order" => "2",
            "text-order" => "1",
        ),
        array(
            "id" => "text_image4",
            "title" => "",
            "desc" => "Simplify, secure, and elevate with Hemploy by Simploy. Custom solutions, compliance mastery, and a support team that's all in – that's the Hemploy promise.<br>
             Transform your business with a partner that scales with your ambitions. Ready to branch out? ",
            "button" => "",
            "button-link" => "#",
            "image-src" => "/images/smp-team2.jpg",
            "image-alt" => "Simploy's Inclusive HR Plans Benefit Everyone",
            "image-order" => "1",
            "text-order" => "2",
        ),
    )
);
?>
<section class="pages__background">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8 col-12 text-left">
                <section>
                    <h1 class="smp__process__title smp-font-48-normal mb-4">
                        HEMPLOY
                    </h1>
                    <?php foreach ($text_image_data["text_image_data"] as $text_image) {
                        include 'theme-parts/text-image-left.php';
                    }
                    ?>
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
