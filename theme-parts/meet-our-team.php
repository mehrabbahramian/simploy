<section class="smp__meet__our team">
    <div class="container">
        <div class="row">
            <div class="smp__meet__our__team__header text-center mb-4 center_align">
                <h2 class="smp-font-32-normal mb-4 ">MEET OUR TEAM</h2>
                <p class="smp-font-18-normal text-center  p_760">PEO’s (Professional Employment Organizations) aren’t new, and neither is Simploy. We’re an experienced PEO that for over 25 years has helped small to mid-size companies have access to big company HR solutions.</p>
            </div>

            <?php foreach ($meet_our_team["profile-card-data"] as $profile_card) {
                include "profile-card.php";
            }
            ?>

            <div class="smp__meet__our__team__button mt-32">
                <a href="#">List of Key Contacts</a>
            </div>
        </div>
    </div>
</section>