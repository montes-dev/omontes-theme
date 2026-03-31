<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">
        <header>
            <a href="<?php echo home_url(); ?>" class="blog-title"><?php bloginfo('name'); ?></a>
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false, 'fallback_cb' => false)); ?>
            </nav>
        </header>

        <main>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post-item">
                    <div class="post-meta">
                        <?php echo get_the_date(); ?> &middot; <?php echo omontes_reading_time(); ?>
                    </div>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-excerpt"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="read-more">
                        <?php _e('leer artículo completo &rarr;', 'omontes'); ?>
                    </a>
                </div>
            <?php endwhile; endif; ?>
        </main>

        <footer>
            &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>