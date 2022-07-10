<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="WordPress theme development static data for beginners">
        <meta name="keywords" content="WordPress, Theme, development">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <article class="l-container">
            <header class="l-header">
                <h1 class="l-header__title">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo( 'name' ); ?></a>
                </h1> 
                <?php bloginfo( 'description' ); ?>

                <div class="c-seach__container" >              
                <?php get_search_form(); ?>
                </div>
                <botton class="l-header__sidebar__open">Menu</botton>
             </header>
            