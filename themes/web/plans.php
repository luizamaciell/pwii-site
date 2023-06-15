<?php
$this->layout("_theme");
?>
    <!-- Price Plan Section Begin -->
    

    <?php
    foreach ($plans as $plan) {
    ?>
    <section class="price-section spad set-bg">

    <div class="container">
        <div class="row">
                <div class="col-lg-4">
                    <div class="single-price-plan">
                        <h4><?= $plan->name; ?></h4>
                        <div class="price-plan">
                            <h2> <?= $plan->price; ?></h2>
                        </div>
                        <ul>
                            <li><?= $plan->description; ?></li>
                        </ul>
                        <a href="#" class="primary-btn price-btn">Começar agora</a>
                    </div>
                </div>
        </div>
    </div>
        <?php
         }
         ?>

            
        </div>
    </section>
    <!-- Price Plan Section End -->