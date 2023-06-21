<?php

/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bluephoenix
 */

get_header();
?>

<section class="container-fluid page-content">
    <div class="bg-white-right"></div>
    <div class="container content">
        <div class="body-content">
            <h1 class="section-title">All Activity</h1>

            <?php

            if (have_posts()) {
                my_pagination();
            }

            ?>

            <div class="articles">
                <?php

                // are there any posts in the DB?
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        get_template_part('template-parts/content', 'excerpt');
                    }
                } else {

                    echo ("<span class='empty-message'>Nothing was found.</span>");
                }

                ?>

            </div>

            <?php

            if (have_posts()) {
                my_pagination();
            }

            ?>
        </div>

    </div>
</section>

<?php get_footer();
