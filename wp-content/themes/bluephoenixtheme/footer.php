<?php

/**
 * The Footer file
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bluephoenix
 */

?>

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 text-center text-lg-start">
                    <a class="footer-brand" href="/">
                        <?php

                        $image_uri = get_template_directory_uri() . '/assets/images/BPLogo-06.png';

                        ?>
                        <div class="title-image-container">
                            <img src="<?php echo wp_kses_post(get_theme_mod('upload_nav_image', $image_uri)); ?>">
                        </div>
                        <div class="title-text">
                            <?php bloginfo('name'); ?>
                        </div>
                    </a>
                    <div class="social-media d-flex justify-content-center">
                        <button class="btn"><i class="fa-brands fa-xl fa-facebook-f"></i></button>
                        <button class="btn"><i class="fa-brands fa-xl fa-instagram"></i></button>
                        <button class="btn"><i class="fa-brands fa-xl fa-tiktok"></i></button>
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-0 d-flex justify-content-end">
                    <div>
                        <?php
                        if (has_nav_menu('sub-menu-1')) {
                        ?>
                            <span id="footer-sub-menu-1" class="list-title">
                                <?php echo wp_kses_post(get_theme_mod('sub_menu_title_1', 'Sub-Menu #1')); ?>
                            </span>
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'sub-menu-1',
                                    'depth' => 1,
                                    'container' => '',
                                    'container_class' => '',
                                    'menu_class' => 'list list-1',
                                    'fallback_cb' => 'false'
                                )
                            );
                        }
                        ?>
                    </div>
                </div>
                <div class="col-12 col-lg-4 offset-lg-0 d-flex justify-content-end">
                    <div>
                        <?php
                        if (has_nav_menu('sub-menu-2')) {
                        ?>
                            <span id="footer-sub-menu-2" class="list-title">
                                <?php echo wp_kses_post(get_theme_mod('sub_menu_title_2', 'Sub-Menu #2')); ?>
                            </span>
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'sub-menu-2',
                                    'depth' => 1,
                                    'container' => '',
                                    'container_class' => '',
                                    'menu_class' => 'list list-1',
                                    'fallback_cb' => 'false'
                                )
                            );
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class=" container-xxl pt-2 px-4 footer-bottom ">
        <div id="copyright-area" class="copyright-area text-center py-2 mt-2">
            <p><?php echo wp_kses_post(get_theme_mod('copyright', '© 2023 Tyrese Lake, All rights reserved.')); ?></p>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>

</html>