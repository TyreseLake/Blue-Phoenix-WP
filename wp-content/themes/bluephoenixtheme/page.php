<?php

/**
 * The template for displaying all single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bluephoenix
 * @since 1.0
 */

get_header();

?>

<?php if (is_front_page()) : ?>

    <?php get_template_part('template-parts/section', 'top'); ?>

    <section class="container-fluid page-content">
        <div class="bg-white-right"></div>
        <div class="container content">
            <div class="text-content">



                <?php the_content() ?>
            </div>
            <?php get_template_part('template-parts/section', 'recent'); ?>
        </div>
    </section>


<?php else : ?>

    <section class="container-fluid page-content">
        <div class="bg-white-right"></div>
        <div class="container content">
            <div class="body-content">

                <?php

                if (have_posts()) {
                    while (have_posts()) {
                        the_post();

                ?>

                        <div id="post-<?php the_ID(); ?>" <?php post_class("text-content"); ?>>

                            <?php

                            if (is_page()) {

                                the_title(
                                    '<h1 class="entry-title">',
                                    '</h1>'
                                );
                            } elseif (is_archive()) {

                                the_archive_title(
                                    '<h1 class="entry-title">',
                                    '</h1>'
                                );
                            }

                            ?>



                            <?php the_content(); ?>

                        </div>

                <?php

                    }
                } else {

                    echo ("<span class='empty-message'>Nothing was found.</span>");
                }

                ?>

            </div>
        </div>
    </section>


<?php endif ?>

<?php

get_footer();
