<?php

/**
 * Standard Excerpt Template
 *
 * @package bluephoenix
 */
?>

<a id="post-<?php the_ID(); ?>" <?php post_class("article-item"); ?> href="<?php the_permalink(); ?>">
    <!-- <div class="article-image"></div> -->
    <?php

    if (has_post_thumbnail()) {
        the_post_thumbnail(
            'small',
            array(
                'class' => 'article-image'
            )
        );
    } else {
    ?>

        <div class="article-image"></div>

    <?php
    }

    ?>
    <div class="activity-body">
        <h1 class="article-title"><?php the_title(); ?></h1>
        <p class="article-excerpt"><?php echo force_balance_tags(get_the_excerpt()); ?></p>
    </div>
    <div class="article-footer">
        <?php echo get_avatar(get_the_author_meta('ID'), $size = '32', $default = '', $alt = '', $args = array('class' => 'author-image')); ?>
        <span class="author-name"><?php the_author() ?></span>
        <span class="article-date"><?php echo get_the_date('M d, Y'); ?></span>
    </div>
</a>