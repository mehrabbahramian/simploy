<?php

/** Template Name: Payroll*/
get_header();
$checks = array(
    "checks_items" => [
        [
            "title" => "PAYROLL",
            "desc" => "At Simploy, our payroll services are tailored to streamline your business operations. We cover everything from time and attendance tracking to garnishment and deduction management, ensuring compliance with I9 and other regulations. Our dedicated specialists are the first point of contact, ready to handle all employee queries and maintain payroll records meticulously. With Simploy, payroll becomes a seamless part of your business process.",
            "items" => [
                [
                    "desc" => "All-Inclusive Payroll Services"
                ],
                [
                    "desc" => "Time and Attendance Tracking "
                ],
                [
                    "desc" => "Garnishment and Deduction Management"
                ],
                [
                    "desc" => "Maintaining employee payroll records"
                ],

                [
                    "desc" => "Ensure Payroll and Tax Compliance"
                ],
                [
                    "desc" => "Automated I-9 Compliance"
                ],
                "item" => [
                    "desc" => "Handling Employee Queries ",
                    "sub_items" => [
                        "First point of contact for employees / clients",
                        "Dedicated specialist"
                    ]
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