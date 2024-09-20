<section class="smp__check__section">
    <div>
        <h1 class="smp__process__title smp-font-48-normal mb-4">
            <?= $checks["title"] ?>
        </h1>
        <div class="smp__checkbox__description">
            <p class="smp-font-18-normal">
                <?= $checks["desc"] ?>
            </p>
        </div>
        <div class="content_check_code mt-4">
            <div class="<?php if (isset($checks["items"]["item"]["sub_items"])) : ?>check_box_items_sub <?php else : ?>check_box_items <?php endif; ?>">
                <?php
                foreach ($checks["items"] as $check) :
                ?>
                    <div class="check_box_item">
                        <div class="svg-check">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 8.18156C1.19332 9.27844 4.01926 12.1423 5.46038 14.5305C7.62372 18.1147 8.62604 21.7154 9.10939 24C10.2437 20.358 12.1754 15.2895 15.4407 10.1219C18.4828 5.30722 21.6312 2.06988 24 0C22.4592 0.713986 20.591 1.74555 18.5691 3.25836C17.0706 4.38002 15.0704 5.89883 12.9104 8.62564C11.79 10.0401 10.3834 12.086 9.05259 14.8811C7.85455 13.0905 5.75226 11.0679 3.49091 9.81787C2.42956 9.23152 0.849747 8.39478 0 8.18156Z" fill="#02A64D" />
                            </svg>
                        </div>
                        <div class="Checks font-16">
                            <?= $check["desc"] ?>
                            <?php
                            if (isset($check["sub_items"])) :
                                foreach ($check["sub_items"] as $sub_item) :
                            ?>
                                    <div class=" <?php if (isset($checks["items"]["item"]["sub_items"])) : ?>check_box_item_sub <?php else : ?>check_box_item <?php endif; ?> sub_item">
                                        <div class="svg-check">
                                            <svg stroke="#02A64D" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 8.18156C1.19332 9.27844 4.01926 12.1423 5.46038 14.5305C7.62372 18.1147 8.62604 21.7154 9.10939 24C10.2437 20.358 12.1754 15.2895 15.4407 10.1219C18.4828 5.30722 21.6312 2.06988 24 0C22.4592 0.713986 20.591 1.74555 18.5691 3.25836C17.0706 4.38002 15.0704 5.89883 12.9104 8.62564C11.79 10.0401 10.3834 12.086 9.05259 14.8811C7.85455 13.0905 5.75226 11.0679 3.49091 9.81787C2.42956 9.23152 0.849747 8.39478 0 8.18156Z" fill="white" />
                                            </svg>
                                        </div>
                                        <div class="Checks font-16">
                                            <?= $sub_item ?>
                                        </div>
                                    </div>
                            <?php endforeach;
                            endif; ?>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>