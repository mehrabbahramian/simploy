<?php

/** Template Name: SOS*/
get_header();
$checks = array(
    "checks_items" => [
        [
            "title" => "SOS",
            "desc" => "Signal a new era in your business with Simploy Outsourcing Services—your SOS when navigating the complexities of modern workforce management. We're the safe harbor in a sea of compliance and risk, offering a lifeline with tailored HR solutions and premium workers' compensation coverage. With our seamless payroll services and a toolkit brimming with benefits, we make the complex simple. Our agile approach to workers' compensation and HR lets you lead with confidence, while our self-service portal puts the power at your fingertips. With SOS distress calls over payroll and HR are a thing of the past. Ready to transform your workplace? ",
            "items" => [
                [
                    "desc" => "Highly competitive premium rates",
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
                    "desc" => "Enterprise-level risk management solutions"
                ],
                [
                    "desc" => "Recruiting & Staffing"
                ],
                [
                    "desc" => "Hiring / Terminations"
                ],
                [
                    "desc" => "Onboarding Employees"
                ],
                [
                    "desc" => "Onboarding Employees"
                ],
                [
                    "desc" => "Compliance"
                ],
                [
                    "desc" => "Employee Training & Development"
                ],
                [
                    "desc" => "W-2 forms"
                ],
                [
                    "desc" => "Pay stubs and pay history"
                ],
                [
                    "desc" => "PTO requests"
                ],
                [
                    "desc" => "HR policies and handbooks"
                ],
                [
                    "desc" => "Retirement accounts"
                ],
                [
                    "desc" => "Benefits information and online enrollments"
                ],
                [
                    "desc" => "Master Medical & Health Insurance"
                ],
                [
                    "desc" => "Dental, Vision, Life Insurance"
                ],
                [
                    "desc" => "Retirement benefits like 401(k) and IRAs"
                ],
                [
                    "desc" => "Access to Gold & Silver Investments"
                ],
                [
                    "desc" => "Pet Insurance"
                ],
                [
                    "desc" => "Legal Shield"
                ],
                [
                    "desc" => "Our Enterprise-level HR Information System and Online Employee Portal"
                ],
                [
                    "desc" => "No loss runs or E-Mod required to get your employees covered"
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