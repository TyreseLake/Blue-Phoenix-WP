<?php

/**
 * The Header file
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bluephoenix
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>

<body <?php body_class("bg-nutral"); ?>>
    <div <?php

            if (is_front_page()) {
            ?> class="backdrop-lg" <?php
                                } else {
                                    ?> class="backdrop-md" <?php
                                                        }

                                                            ?>></div>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a id="navbar-brand" class="navbar-brand" href="/">
                <?php

                $image_uri = get_template_directory_uri() . '/assets/images/BPLogo-06.png';

                ?>

                <div class="title-image-container">
                    <img src="<?php echo wp_kses_post(get_theme_mod('upload_nav_image', $image_uri)); ?>">
                </div>

                <span class="title-text"><?php bloginfo('name'); ?></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <?php

                wp_nav_menu(
                    array(
                        'theme_location'    => 'primary', // as registers in functions.php
                        'depth'             => 2, // as we set up in our CSS
                        'container'         => '', // html wrapper of the menu ul
                        'container_class'   => '', // wrapper class
                        'menu_class'        => 'navbar-nav', // classes of the menu ul tag
                        'fallback_cb'       => 'false' // if primary menu is not created, then show nothing
                    )
                );

                ?>
            </div>
        </div>
    </nav>