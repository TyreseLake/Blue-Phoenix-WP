<?php

/**
 * Home page top section Template
 *
 * @package bluephoenix
 */
?>

<section class="container-fluid top-area">
    <div class="row">
        <div class="col-6">
            <div id="top-img-container" class="img-circle-lg">
                <img src="<?php echo wp_kses_post(get_theme_mod('upload_top_image')); ?>">
            </div>
        </div>
        <div class="col-6">
            <div class="top-main-area">
                <h1 id="top-main-text">
                    <?php echo wp_kses_post(get_theme_mod('home_main_message', 'Go Blue Phoenix Now!')); ?>
                </h1>
                <span id="top-sub-text" class="sub-head">
                    <?php echo wp_kses_post(get_theme_mod('home_sub_message', 'Try our one-of-a-kind services!')); ?>
                </span>
                <div id="top-action-area" class=" row action-area">
                    <?php

                    $content_html  = get_theme_mod('top_action', '<div class="col-6 d-flex justify-content-start">
                        <button class="btn btn-1">Our Services</button>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <button class="btn btn-0">About Us</button>
                    </div>');

                    echo $content_html;

                    ?>

                    <!-- <div class="col-6 d-flex justify-content-start">
                        <button class="btn btn-1">Our Services</button>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <button class="btn btn-0">About Us</button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>