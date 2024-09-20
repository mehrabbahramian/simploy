<section class="smp__hero__banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-12 smp__hero__banner__left">
                <h1 class="smp__hero__banner__title smp-font-32-normal smp-font-lg-48-normal">SIMPLOY.<br>SIMPLIFIED
                    EMPLOYMENT</h1>
                <p>Answer a few questions, and we'll help you find the perfect HR and payroll solution.</p>
                <form>
                    <div class="smp__hero__form">
                        <input type="number" placeholder="# of Employees">
                        <div class="smp__select__wrapper">
                            <div class="ns_dropdown">
                                <div class="ns_dropdown_input">
                                    <input placeholder="What are you interested in?" readonly>
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.00006 8.04993L4.1083 5.93945L12 13.8396L19.8918 5.93945L22 8.04993L12 18.0605L2.00006 8.04993Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <ul class="ns_dropdown_items">
                                    <li>Human Resources</li>
                                    <li>Payroll</li>
                                    <li>Workcomp</li>
                                    <li>Benefits</li>
                                </ul>
                            </div>
                        </div>
                        <button class="heroBannerSubmit">Let's Go</button>
                    </div>
                </form>
                <p class="smp__hero__banner__note">Making HR simple for over 25 years</p>
            </div>
            <div class="col-xl-3 col-lg-4 d-none d-lg-block smp__hero__banner__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/smp-hero-banner.png" alt="Experts with 25 Years of Experience in HR">
            </div>
        </div>
    </div>
    <div class="smp__popup__container" id="popupContainer">
        <div class="container">
            <div class="row">
                <?php require_once('popup-form.php');
                ?>
            </div>
        </div>
    </div>
</section>