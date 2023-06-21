<?php

/**
 * The front page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bluephoenix
 */

get_header();
?>

<?php get_template_part('template-parts/section', 'top'); ?>

<section class="container-fluid page-content">
    <div class="bg-white-right"></div>
    <div class="container content">
        <div class="content-activity" style="position: relative; padding: 400px;">



        </div>
        <?php get_template_part('template-parts/section', 'recent'); ?>
    </div>
</section>

<?php get_footer();
