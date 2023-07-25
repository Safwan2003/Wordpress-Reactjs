<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <div class="site-logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                <?php endif; ?>
            </div>

            <nav class="site-navigation">
                <?php
                $args = array(
                    'theme_location' => 'primary-menu',
                    'container'      => false,
                );
                wp_nav_menu($args);
                ?>
            </nav>
        </div>
    </header>

    <div id="root"></div> <!-- The mount point for your React app -->

    <!-- Load your React app's JavaScript bundle -->
    <script src="<?php echo get_template_directory_uri(); ?>/react-src/build/static/js/main.<YOUR_HASH>.js"></script>
    <?php wp_footer(); ?>
</body>
</html>
