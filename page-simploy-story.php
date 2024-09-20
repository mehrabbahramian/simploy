<?php

/** Template Name: Simploy Story*/
get_header();
$text_image_data = array(
    "text_image_data" => array(
        array(
            "id" => "text_image1",
            "title" => "",
            "desc" => "Simploy's story began in 1998 when Jay King founded IPM Services. The St. Louis company provided staffing and recruitment solutions for the construction and design industries. As the business expanded and added employees across different states, Jay recognized the need for a streamlined approach to managing payroll, employee benefits, HR, and workers’ compensation. This pursuit led him to develop a pivotal partnership in 2000 with The Varsity Group, a Professional Employer Organization (PEO) founded by David Avakian in 1990, also based in St. Louis.",
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
            "desc" => "Over the years, as Jay and David navigated the complexities of entrepreneurship together, their professional relationship blossomed into a genuine friendship, built on shared business insights, personal experiences, mutual respect, and shared values. This bond paved the way for Jay to acquire The Varsity Group from David in 2004, marking a new chapter in the company’s history.",
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
            "desc" => "In 2006, the company decided to rebrand, and looked for a name that would capture its essence and vision. The process was inclusive, drawing on the creativity of the then seven-member team. The chosen name, Simploy, proposed by David himself, signaled a new era of simplicity and efficiency in employment solutions.",
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
            "desc" => "Today, Simploy serves hundreds of small businesses and thousands of employees in almost every state. This history is a testament to service excellence, growth, and enriching the lives of those whom the company serves. As Simploy continues to expand its reach and to refine its offerings, it remains passionate about fostering success and fulfillment for clients, employees, vendors, partners, and friends.",
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
                    <h1 class="mb-4 smp__process__title smp-font-48-normal">
                        SIMPLOY STORY
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
