<?php
function ocean_cream_customize_css()
{
    ?>
         <style>
			 body {background-color: #<?php background_color(); ?>}
       .ocean_cream_button{ background-color: <?php echo get_theme_mod('accent_background', '#00b0ff'); ?>; }
			 .ocean_cream_button{ color: <?php echo get_theme_mod('accent_text', '#3e2723'); ?>; }
			 .ocean_cream_button:hover{ background-color: <?php echo get_theme_mod('accent_hover', '#2a91d1'); ?>; }
			 .page-numbers, .OCnextpage a{ background-color: <?php echo get_theme_mod('navigation_background', '#00b0ff'); ?>;}
			 article{ background-color: <?php echo get_theme_mod('article_background', '#f5eed6'); ?>!important;}
			 article a{ color: <?php echo get_theme_mod('article_link'); ?>;}
			 article p, .ocean_cream_info{ color: <?php echo get_theme_mod('article_text'); ?>;}
			 nav.menu{ background-color: <?php echo get_theme_mod('menu_background', '#d2bc83'); ?>; }
			 nav.menu li a{ color: <?php echo get_theme_mod('menu_text', '#000'); ?>; }
			 nav.menu li a:hover{ background-color: <?php echo get_theme_mod('menu_item_hover', '#2a91d1'); ?>; }
			 aside li, svg.i-menu {color: <?php echo get_theme_mod('sidebar_text', '#ffffff'); ?>;}
			 aside a {color: <?php echo get_theme_mod('sidebar_text_link', '#ffffff'); ?>;}
         </style>
    <?php
}
add_action('wp_head', 'ocean_cream_customize_css');
?>
