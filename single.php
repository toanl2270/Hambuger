<?php get_header(); ?>
             <!---メイン-->
            <main class="l-main">
                <div class="l-main__single__top__image">

                <?php if( has_post_thumbnail() ) {
                the_post_thumbnail();
            } elseif ( is_singular() ) {
                echo 
                '<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/single-top.png" alt="メインビジュアル">';
            }
            ?>
                <h1 class="l-main__single__top__txt">
                <?php the_title(); ?>
                </h1>
                </div>
                <div class="l-main__body">
                <section class="l-main__single__section1">
                    <?php the_content();?>
                <button class="c-main__single__btn">
                    <a href="#">ボタン</a>
                </button>
                <div class="l-main__single__txt">
                    <p>boldboldboldboldboldboldbold</p>
                </div> 
            </div>
            </main>
            <!--サイドバー-->
            <?php get_sidebar(); ?>
            <!--フッター-->
            <?php get_footer(); ?>
            <div class="l-sidebar__main_bg"></div>
        </article>