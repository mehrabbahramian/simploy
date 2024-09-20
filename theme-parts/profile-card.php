<div class="col-lg-3 col-md-6 col-12 d-flex justify-content-center mb-lg-0 mb-3">
    <div class="smp__meet__our__team__card">
        <div class="smp__profile__image mb-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?><?php echo $profile_card["profile-image"] ?>" alt="">
        </div>
        <div class="smp__profile__details">
            <h3 class="smp-font-24-bold"><?php echo $profile_card["name"] ?></h3>
            <span class="smp-font-22-normal"><?php echo $profile_card["position"] ?></span>
            <ul class="smp__profile__contact">
                <li>
                    <a href="tel:<?php echo $profile_card["phone-link"] ?>" class="smp-font-20-normal">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/smp-phone.png" alt=""><?php echo $profile_card["phone-number"] ?>
                    </a>
                </li>
                <li>
                    <a href="mailto:<?php echo $profile_card["mail"] ?>" class="smp-font-20-normal">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/smp-email.png" alt=""><?php echo $profile_card["mail"] ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>