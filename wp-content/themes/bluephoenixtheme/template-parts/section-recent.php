<?php

/**
 * Recent activity section
 *
 * @package bluephoenix
 * @since 1.0
 */

?>

<div class="resent-activity-section">
    <h1 class="section-title">Recent Activity</h1>

    <?php
    // the query
    $the_query = new WP_Query(array(
        // 'category_name' => 'news',
        'posts_per_page' => 3,
    ));
    ?>


    <div class="resent-activity">

        <?php if ($the_query->have_posts()) : ?>
            <?php
            while ($the_query->have_posts()) :
                $the_query->the_post();
                get_template_part('template-parts/content', 'activity');
            endwhile;
            ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </div>
    <div class="view-more-activity">
        <a href="<?php echo esc_url(get_category_link(1)); ?>">View More Activity</a>
    </div>
</div>