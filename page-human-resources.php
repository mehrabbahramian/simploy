<?php

/** Template Name: Human Resources*/
get_header();
$human_resources = array(
    "checks_items" => [
        [
            "title" => "HUMAN RESOURCES",
            "desc" => "At Simploy, we reimagine HR with a focus on simplicity and effectiveness. From the initial job posting to the intricacies of labor laws and EPLI coverage, we handle it all. Tailored pre-employment screenings, dynamic onboarding, and tailored performance reviews are just the start. We ensure legal compliance across the board, as well as offer detailed unemployment claims handling. Our approach is designed to foster a productive, compliant, and harmonious workplace environment. ",
            "items" => [
                [
                    "desc" => "Training and consulting",
                ],
                [
                    "desc" => "Job Posting and Candidate Screening"
                ],
                [
                    "desc" => "Job Posting and Candidate Screening"
                ],
                [
                    "desc" => "Unemployment Claims & Hearings"
                ],
                [
                    "desc" => "Creation and Upkeep of Company Handbook"
                ],
                [
                    "desc" => "Offer Letters"
                ],
                [
                    "desc" => "Pre-employment screenings"
                ],
                [
                    "desc" => "Onboarding Maintenance"
                ],
                [
                    "desc" => "Performance Reviews"
                ],
                [
                    "desc" => "Legal Compliance"
                ],
                [
                    "desc" => "Labor Law posters"
                ],
                [
                    "desc" => "EPLI coverage"
                ],
                [
                    "desc" => "FMLA compliance"
                ],
                [
                    "desc" => "ThinkHR Portal"
                ],
                [
                    "desc" => "New Hire Reporting to the state"
                ],
                [
                    "desc" => "Conflict Resolution and Mediation"
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
                foreach ($human_resources["checks_items"] as $checks) {
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