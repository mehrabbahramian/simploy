<?php

/** Template Name: All Inclusive Services*/
$text_image_data = array(
    "text_image_data" => array(
        array(
            "id" => "text_image1",
            "title" => "",
            "desc" => "Our HR services are tailored, from recruitment to retirement, ensuring every step supports your team's growth and your business's vision.",
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
            "desc" => "With Simploy, payroll becomes a breeze. We ensure your team gets paid on time and accurately, all while navigating the complexities of tax compliance for you. ",
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
            "desc" => "Our risk management approach is proactive and robust, safeguarding your business with competitive workers' compensation solutions and minimizing exposure to various workplace risks.",
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
            "desc" => "Benefits administration through Simploy is a curated experience, offering comprehensive packages designed to attract and retain the best talent, fostering a satisfied and secure workforce.",
            "button" => "",
            "button-link" => "#",
            "image-src" => "/images/smp-team2.jpg",
            "image-alt" => "Simploy's Inclusive HR Plans Benefit Everyone",
            "image-order" => "1",
            "text-order" => "2",
        ),
        array(
            "id" => "text_image5",
            "title" => "",
            "desc" => "Leveraging technology, we streamline employment processes with intuitive platforms that enhance efficiency and provide insightful data at your fingertips.",
            "button" => "",
            "button-link" => "#",
            "image-src" => "/images/smp-team1.jpg",
            "image-alt" => "Simploy's HR Solutions Empowers People and Enriches Lives",
            "image-order" => "2",
            "text-order" => "1",
        ),
    )
);
get_header()
?>
<section class="pages__background">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8 col-12 text-left">
                <section>
                    <h1 class="smp__process__title smp-font-48-normal mb-4">
                        ALL INCLUSIVE SERVICES
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
<?php get_footer() ?>