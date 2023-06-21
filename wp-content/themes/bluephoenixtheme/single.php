<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bluephoenix
 * @since 1.0
 */

get_header();
?>

<section class="container-fluid page-content">
    <div class="bg-white-right"></div>

    <div class="container content">
        <div class="body-content">

            <?php

            if (have_posts()) {
                while (have_posts()) {

                    the_post();
                    $blog_title = get_the_title(get_option('page_for_posts', true));

            ?>

                    <div class="article-page-header">
                        <h1 class="article-title"><?php echo esc_html($blog_title); ?></h1>
                        <div class="header-base">
                            <?php echo get_avatar(get_the_author_meta('ID'), $size = '32', $default = '', $alt = '', $args = array('class' => 'header-author-image')); ?>
                            <span class="header-author-name"><?php the_author() ?></span> ·
                            <span class="header-date"><?php echo get_the_date('M jS, Y'); ?></span>
                        </div>

                        <?php

                        if (has_post_thumbnail()) {
                            the_post_thumbnail(
                                'large',
                                array(
                                    'class' => 'article-image'
                                )
                            );
                        }

                        ?>

                        <!-- <div class="article-image"></div> -->
                    </div>

                    <div id="post-<?php the_ID(); ?>" <?php post_class("text-content"); ?>>

                        <?php

                        the_content();

                        ?>

                    </div>

                    <div class="article-page-footer">
                        <div class="about-author">
                            <h1 class="about-title">About the Author</h1>
                            <div class="about-author-container">
                                <!-- <div class="about-author-image"></div> -->
                                <?php echo get_avatar(get_the_author_meta('ID'), $size = '64', $default = '', $alt = '', $args = array('class' => 'about-author-image')); ?>
                                <div class="about-body">
                                    <span class="about-author-name"><?php the_author() ?></span>
                                    <span class="about-author-description">
                                        <?php
                                        if (the_author_meta('user_description')) {
                                            the_author_meta('user_description');
                                        } else {
                                            echo "<i>no description of this author available.</i>";
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>

                        </div>
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

<?php

get_footer();
