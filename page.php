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
                <article>
                    <h1><?php the_title(); ?></h1>
                    <div class="post-content"><?php the_content(); ?></div>
                </article>
            <?php endwhile; endif; ?>
        </main>

        <footer>
            &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>