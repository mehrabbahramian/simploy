<?php

/** Template Name: Technology*/
get_header();
$checks = array(
    "checks_items" => [
        [
            "title" => "TECHNOLOGY",
            "desc" => "Embrace the ease of Simploy's technology, designed for the modern business. Navigate HR compliance effortlessly with our comprehensive library and enjoy streamlined administrative processes. Payroll is a breeze with our efficient and accurate systems. Tailor your benefits platform, from health to retirement, for a happy team. Clock every moment with advanced time and labor tools and fuse it seamlessly with payroll. Empower your talent from hire to inspire with our full spectrum of management services. Dive into deep analytics for smart insights and give your team the power of self-service on the go. Simplify your operations with Simploy, where technology enhances every HR function. ",
            "items" => [
                [
                    "desc" => "HR Compliance & Administration"
                ],
                [
                    "desc" => "Payroll Processing"
                ],
                [
                    "desc" => "Benefits Administration"
                ],
                [
                    "desc" => "Time & Labor Management"
                ],
                [
                    "desc" => "Talent Management",
                ],
                [
                    "desc" => "Reporting & Analytics"
                ],
                [
                    "desc" => "Employee Self-Service Portal"
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