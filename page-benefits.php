<?php

/** Template Name: Benefits*/
get_header();
$checks = array(
    "checks_items" => [
        [
            "title" => "BENEFITS",
            "desc" => "Simploy elevates benefits management to an art form. Our tailored benefits packages, designed uniquely for each client, ensure your team feels valued and supported. From COBRA notifications to meticulous compliance with ACA, ERISA, HIPAA, and FMLA, we handle the complexities. Our Simploy Select Care + and 401K implementation services go beyond standard offerings, enhancing employee satisfaction and retention. Let us manage the details, so you can focus on what you do best—growing your business. ",
            "items" => [
                [
                    "desc" => "Summarize offerings"
                ],
                [
                    "desc" => "Simploy Select Care +"
                ],
                [
                    "desc" => "COBRA offering and notifications"
                ],
                [
                    "desc" => "Employee Communication and Support"
                ],
                [
                    "desc" => "New Hire benefit enrollment maintenance",
                ],
                [
                    "desc" => "Vendor and Broker Management"
                ],
                [
                    "desc" => "ACA, ERISA, HIPAA, FMLA compliance and regulation"
                ],
                [
                    "desc" => "Long Term/ Short Term Disability Claims Assistance"
                ],
                [
                    "desc" => "Strategize and Design benefits packages unique to the client"
                ],
                [
                    "desc" => "401K implementation"
                ],
            ],
        ],
    ],
);
?>
<section class="pages__background">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8 col-12 text-left">
                <?php
                foreach ($checks["checks_items"] as $checks) {
                    include('theme-parts/check.php');
                }
                ?>
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
?>