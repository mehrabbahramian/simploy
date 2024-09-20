<footer>
    <section class="smp__footer__top">
        <div class="container">
            <div class="row">
                <div class="smp__footer__holder">
                    <div class="col-md-3 col-12  mb-4">
                        <div class="smp__footer__logo">
                            <a href="https://simploydev.wpenginepowered.com/">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Simploy-Logo-black.png" alt="Simploy, Simplofied Employment, Logo">
                            </a>
                        </div>
                        <p class="smp__footer__location smp-font-18-normal"> <a href="#">13023 Tesson Ferry Road, Suite 105 <br>
                                Saint Louis, MO 63129 </a><br>
                            <a href="tel:3146352590">314-635-2590 </a><br>
                            <a href="https://www.simploy.com">simploy.com</a>
                        </p>
                    </div>
                    <div class="col-md-9 col-12 smp__footer__menu">
                        <article>
                            <h3 class="smp-font-22-bold">Company</h3>
                            <ul>
                                <li><a href="<?= site_url("simploy-story") ?>">Simploy Story</a></li>
                            </ul>
                        </article>
                        <article>
                            <h3 class="smp-font-22-bold">Solutions</h3>
                            <ul>
                                <li><a href="<?= site_url("all-inclusive-services") ?>">All-Inclusive Services</a></li>
                                <li><a href="<?= site_url("human-resources") ?>">Human Resources</a></li>
                                <li><a href="<?= site_url("payroll") ?>">Payroll</a></li>
                                <li><a href="<?= site_url("workers-compensation") ?>">Tailored Workers’ Compensation</a>
                                </li>
                                <li><a href="<?= site_url("benefits") ?>">Benefits</a></li>
                                <li><a href="<?= site_url("technology") ?>">Technology</a></li>
                                <li><a href="<?= site_url("hemploy") ?>">Hemploy</a></li>
                                <li><a href="<?= site_url("sos") ?>">Simploy Outsourcing Services</a></li>
                            </ul>
                        </article>
                        <article>
                            <h3 class="smp-font-22-bold">Resources</h3>
                            <ul>
                                <li><a href="<?= site_url("faq") ?>">FAQs</a></li>
                                <li><a href="<?= site_url("posts") ?>">Posts</a></li>
                            </ul>
                        </article>
                        <article>
                            <h3 class="smp-font-22-bold">Contact Us</h3>
                            <ul>
                                <li><a href="<?= site_url("contact") ?>">Contact Us</a></li>
                            </ul>
                        </article>
                        <article class="smp__footer__social__media">
                            <h3 class="smp-font-22-bold">Social</h3>
                            <ul>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/smp-fb-icon.png" alt="Facebook Logo" width="20px" height="20px"></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/smp-ig-icon.png" alt="Instagram Logo" width="20px" height="20px"></a></li>
                            </ul>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="smp__footer__below">
        <div class="container">
            <div class="row">
                <ul class="smp__footer__blow__items smp-font-16-normal">
                    <li>ⓒ COPYRIGHT 2024 SIMPLOY</li>
                    <li>ALL RIGHTS RESERVED</li>
                    <li><a href="<?= site_url("privacy") ?>">PRIVACY POLICY</a></li>
                    <li><a href="<?= site_url("terms") ?>">TERMS AND CONDITIONS</a></li>
                </ul>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer() ?>
</body>

</html>