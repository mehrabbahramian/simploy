<?php

/** Template Name: Workers’ Compensation*/
get_header();
$workers_compensation = array(
    "checks_items" => [
        [
            "title" => "WORKERS’ COMPENSATION",
            "desc" => "At Simploy, we've got your back with a workers' compensation policy that offers competitive rates and smart risk management. Wave goodbye to deposits and audits and say hello to pay-as-you-go pricing. Plus, our Employer Practices Liability Insurance (EPLI) comes at no extra cost, safeguarding your business from the financial storms of employment-related claims. It's the full coverage your business deserves, so you can focus on growth without worry.",
            "items" => [
                [
                    "desc" => "Discounted premium rates"
                ],
                [
                    "desc" => "No deposit requirements"
                ],
                [
                    "desc" => "No policy audits"
                ],
                [
                    "desc" => "Pay-as-you-go pricing"
                ],
                [
                    "desc" => "Enterprise-level risk management solutions",
                ],
                [
                    "desc" => "Included EPLI coverage"
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
                foreach ($workers_compensation["checks_items"] as $checks) {
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