<?php
$section_text_image = array(
    "text_image_data" => array(
        array(
            "id" => "text_image1",
            "title" => "Enriching the lives of those we serve.",
            "desc" => "You probably didn't start your business to be an expert in human resources, government compliance, shopping for benefits, or dealing with workers' compensation. But we did.",
            "button" => "Contact Us",
            "button-link" => "/contact",
            "image-src" => "/images/smp-team1.jpg",
            "image-alt" => "Simploy's HR Solutions Empowers People and Enriches Lives",
            "image-order" => "2",
            "text-order" => "1",
        ),
        array(
            "id" => "text_image2",
            "title" => "Plan that benefit everyone.",
            "desc" => "Because of our scale economies will lower your current expenses, save you time, and provide new benefits that will keep your employees happy and healthy far into the future. We have the purchasing power for thousands of employees, so we pay less and pass the savings on to you.",
            "button" => "Find Out More",
            "button-link" => "/benefits",
            "image-src" => "/images/smp-team2.jpg",
            "image-alt" => "Simploy's Inclusive HR Plans Benefit Everyone",
            "image-order" => "1",
            "text-order" => "2",
        ),
    )
);
$section_circles = array(
    array(
        "circle-link-data" => array(
            array(
                "image" => "smp-help-1.png",
                "title" => "HUMAN RESOURCES",
                "link" => "/human-resources"
            ),
            array(
                "image" => "smp-help-2.png",
                "title" => "PAYROLL",
                "link" => "/payroll"
            ),
            array(
                "image" => "smp-help-3.png",
                "title" => "WORK COMP",
                "link" => "/workers-compensation"
            ),
            array(
                "image" => "smp-help-4.png",
                "title" => "BENEFITS",
                "link" => "/benefits"
            ),
            array(
                "image" => "smp-help-5.png",
                "title" => "TECHNOLOGY",
                "link" => "/technology"
            ),
        )
    )
);
$section_meet_our_team = array(
    array(
        "profile-card-data" => array(
            array(
                "name" => "Jay King",
                "position" => "Chief Executive Officer",
                "phone-number" => "314-375-0030",
                "phone-link" => "3143750030",
                "mail" => "Jking@simploy.com",
                "profile-image" => "/images/JAY-1.png"
            ),
            array(
                "name" => "Carson King",
                "position" => "Vice president",
                "phone-number" => "314-375-0035",
                "phone-link" => "3143750035",
                "mail" => "Cking@simploy.com",
                "profile-image" => "/images/HEADSHOTS-1.png"
            ),
            array(
                "name" => "Chassie Smith",
                "position" => "Chief Operations Officer",
                "phone-number" => "314-375-0038",
                "phone-link" => "3143750038",
                "mail" => "Csmith@simploy.com",
                "profile-image" => "/images/CHASSIE-1.png"
            ),
            array(
                "name" => "Lewis Marty",
                "position" => "Business Development",
                "phone-number" => "314-635-2590",
                "phone-link" => "3146352590",
                "mail" => "Lmarty@simploy.com",
                "profile-image" => "/images/LEWIS-1.png"
            ),
        )
    )
);
?>
<?php get_header() ?>


<main>
    <?php require_once('theme-parts/hero-banner.php');
    ?>
    <?php require_once('theme-parts/how-it-helps.php');
    ?>
    <?php foreach ($section_circles as $circles) {
        include 'theme-parts/circles.php';
    }
    ?>
    <?php require_once('theme-parts/three-box.php');
    ?>
    <?php require_once('theme-parts/calculate.php');
    ?>
    <?php require_once('theme-parts/process.php');
    ?>
    <?php foreach ($section_meet_our_team as $meet_our_team) {
        include 'theme-parts/meet-our-team.php';
    }
    ?>

    <div class="smp__homepage__form">
        <?php require_once('theme-parts/form.php');
        ?>
    </div>
    <?php
    include_once 'theme-parts/green-card.php' ?>
</main>

<?php get_footer() ?>