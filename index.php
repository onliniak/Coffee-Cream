<!DOCTYPE html>
<html <?php
language_attributes(); ?>>
<head>
   <meta charset="<?php
    bloginfo('charset'); ?>">

    <!-- Mobile zoom -->
    <meta name=viewport content="width=device-width, initial-scale=1">

    <?php
    wp_head(); ?>
</head>
<body <?php
body_class(); ?>>
    <!-- Create menu
    Show on mobile only when click on button -->
    <header>
        <div id="mobinu">
    <?php
    wp_nav_menu(
    array(
        'theme_location' => 'header-menu',
        'container_class' => 'menu'
        )
    ); ?>
	    </div>
		<span id="hamburger-cream">
<svg class="i-menu" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24"></path>
        </svg>
			</span>
    </header>

<main>
<!-- Widgets, default hide -->
    <div id="sidiBer">
    <aside class="sidebar">
    <?php
    dynamic_sidebar('sidebar'); ?>
    </aside>
    </div>
   <span id="ShoSid" class="button"><?php esc_html_e('Show Sidebar', 'ocean-cream'); ?></span>
  <!-- Your post -->
 <article <?php
    post_class(); ?>>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     <h1><a href="<?php
        the_permalink(); ?>"><?php
        the_title(); ?></a></h1>
 <!-- Header info like date, author, category, tags etc. -->

        <?php
        esc_html_e('Written by', 'ocean-cream'); ?>
                <?php
                the_author_posts_link(); ?>
        <?php
        esc_html_e('on', 'ocean-cream'); ?> <?php
        echo get_the_date(); ?>
            <?php
            esc_html_e('in', 'ocean-cream'); ?>
            <?php
            the_category(', '); ?>
            <br />
                <?php
                the_tags(); ?>

            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('post-thumbnails');
            } ?>
     <!-- Use full content for single post and excerpt for archive/latest posts -->
        <?php
        if (is_archive()) {
            the_excerpt();
        } elseif (is_home()) {
            the_excerpt();
        } else {
            the_content();
        } ?>
        <?php
        wp_link_pages(); ?>

	 <div class="OCnextpage">
        <?php
        wp_list_comments(); ?>
	 </div>

        <?php
        comments_template(); ?>
	 <a href="#comments" class="button"><?php esc_html_e('Comments', 'ocean-cream'); ?></a>
	 <?php
if (is_singular()) {
            wp_enqueue_script("comment-reply");
            esc_url(previous_post_link());
            echo '<div class="rinav">', esc_url(next_post_link());
            echo '</div>';
        } elseif (is_tax()) {
            ;
        }?>
	 <?php endwhile; else : ?>
            <p>
              <?php
                esc_html_e('Sorry, no posts matched your criteria.', 'ocean-cream'); ?>
            </p>
    <?php
endif; ?>
        <?php
        the_posts_pagination(
            array(
            'mid_size' => 2
            )
        ); ?>
 </article>
</main>
        <?php
        wp_footer(); ?>
</body>
</html>
