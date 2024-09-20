<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="smp__header__first">
            <div class="container">
                <div class="row">
                    <?php require_once('theme-parts/intro.php')
                    ?>
                </div>
            </div>
        </div>
        <div class="smp__header__sec">
            <div class="container">
                <div class="row">
                    <?php require_once('theme-parts/nav.php')
                    ?>
                </div>
            </div>
        </div>
        <!--    menu  -->
        <section class="nav_menu_items">
            <div class="nav_menu_item">
                <div class="container">
                    <ul>
                        <a href="<?= site_url("all-inclusive-services") ?>">
                            <li>All-Inclusive Services</li>
                        </a>
                        <a href="<?= site_url("human-resources") ?>">
                            <li>
                                Human Resources
                            </li>
                        </a>
                        <a href="<?= site_url("payroll") ?>">
                            <li>Payroll</li>
                        </a>
                        <a href="<?= site_url("benefits") ?>">
                            <li>Benefits</li>
                        </a>
                        <a href="<?= site_url("technology") ?>">
                            <li>Technology</li>
                        </a>
                        <a href="<?= site_url("hemploy") ?>">
                            <li>Hemploy</li>
                        </a>
                        <a href="<?= site_url("sos") ?>">
                            <li>Simploy Outsourcing Services</li>
                        </a>
                        <a href="<?= site_url("workers-compensation") ?>">
                            <li>Tailored Workers’ Compensation</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="nav_menu_item">
                <div class="container">
                    <ul>
                        <a href="<?= site_url("faq") ?>">
                            <li>FAQs</li>
                        </a>
                        <a href="<?= site_url("posts") ?>">
                            <li>Posts</li>
                        </a>
                    </ul>
                </div>
            </div>
        </section>
    </header>