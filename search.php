<?php get_header(); ?>
             <!---メイン-->
            <main class="l-main">
                <div class="l-main__archive__top__image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/archive-top.png" alt="メインビジュアル">
                    <h2 class="l-main__archive__top__txt">
                    Search:
                    </h2>
                    <p class="l-main____archive__top__txt_sub">
                    <?php echo get_search_query(); ?>
                    </p>
                </div>
            <section>
                <div class="l-main__archive">
                <div class="l-mian__search">
                <?php if (have_posts()): ?>
                <?php
                    if (isset($_GET['s']) && empty($_GET['s'])) {
                        echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
                    } else {
                        echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
                    }
                ?>
            
                <?php else: ?>
                検索されたキーワードにマッチする記事はありませんでした
                <?php endif; ?>
            </section>
            
            <?php
                if ( have_posts()) : while ( have_posts()) :
                    the_post();
            ?>
            </div>
            </div>
            <section class="archive__body">
                <div>
                    <figure class="archive__card">
                        <div class="archive__card__body">
                            <div class="archive__card__img"><?php the_post_thumbnail(); ?></div>
                        <figcaption class="archive__card__txt">
                            <h2>
                            <?php the_title(); ?>
                            </h2>
                            <h4>
                                小見出しが入ります
                            </h4>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。   
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。   
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。   
                            </p>
                            <div class="archive__card__btn" >
                            <a href="<?php the_permalink(); ?>">詳しく見る</a>
                        </figcaption>
                    </figure>
                </section>
                <?php wp_link_pages(); ?>
<?php endwhile; ?>

<?php 
else: 
?>
<?php 
endif; 
?>
            
            </section>
            <div class="text-center">
                <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            
            </div>  
            </main>
            <!--サイドバー-->
            <?php get_sidebar(); ?>
            <!--フッター-->
            <?php get_footer(); ?>
            <div class="l-sidebar__main_bg"></div>
        </article>