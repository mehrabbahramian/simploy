<?php

/** Template Name: FAQs*/
get_header();
$faq = array(
    "title" => "FAQ",
    "desc" => "PEOs Explained: Your Questions Answered",
    "items" => [
        [
            "title" => "1. What's a PEO anyway?",
            "desc" => "Think of a PEO (Professional Employer Organization) as your business's best buddy in handling all things HR. It's like having an expert partner who knows your business inside out and helps with HR, payroll, workers’ comp, and benefits. It's all about making your life easier."
        ],
        [
            "title" => "2. How does working with a PEO actually work?",
            "desc" => "It's based on this concept called co-employment. Basically, you and the PEO share the load of being an employer. It’s like joining a club that gets you bulk discounts and expert advice, which can save you money and hassle."
        ],
        [
            "title" => "3. What's the price tag on a PEO?",
            "desc" => "The cost varies, but it includes stuff you're probably already paying for, like taxes for retirement and Medicare, unemployment taxes, and an admin fee for the PEO's services. Often, it's all bundled into one percentage-based fee."
        ],
        [
            "title" => "4. Will my business actually benefit from a PEO?",
            "desc" => "Absolutely worth asking! The short answer is it's likely. PEOs have a track record of helping businesses like yours thrive by reducing failure rates, cutting down turnover, spurring growth, and saving on HR costs."
        ],
        [
            "title" => "5. How big does my company need to be to work with a PEO?",
            "desc" => "It varies. Some PEOs are looking for companies with at least 5 to 10 employees. It's about finding the right fit. At Simploy, we’re open to a partnership with businesses of all sizes."
        ],
        [
            "title" => "6. Is a PEO the same as a temp staffing service?",
            "desc" => "Nope, they're different. Temp services loan you their employees for short-term needs. PEOs, on the other hand, partner with you to co-employ your current team, offering benefits and services without sending in their own workers."
        ],
        [
            "title" => "7. When's the best time to jump on board with a PEO?",
            "desc" => "Anytime's good, but starting at the beginning of a fiscal quarter, when renewing your workers' comp policy, or when you're planning changes in your workforce can make the transition smoother."
        ],
        [
            "title" => "8. Will my team think they're working for someone else?",
            "desc" => "Not at all. Joining a PEO doesn’t change the day-to-day. Your team will likely be excited about better HR support, and you'll still be in charge of all the important decisions."
        ],
        [
            "title" => "9. Where can I find trustworthy PEOs?",
            "desc" => "The National Association of Professional Employer Organizations (NAPEO) has a list of reputable PEOs. It's a great place to start."
        ],
        [
            "title" => "10. How many businesses are in on this PEO thing?",
            "desc" => "Loads! Around 180,000 businesses are getting the PEO advantage, involving about 3 million workers."
        ],
        [
            "title" => "11. What if I have a union?",
            "desc" => "No worries. PEOs play nice with both union and non-union companies."
        ],
        [
            "title" => "12. Am I going to lose control of my business with a PEO?",
            "desc" => "Absolutely not. This is a big myth. You stay in the driver's seat, making the big decisions. The PEO is there to support and advise, not take over."
        ],
    ],
);
?>
<section class="pages__background">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8 col-12 text-left">
                <?php
                include_once "theme-parts/faq.php";
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