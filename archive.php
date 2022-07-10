            <?php get_header(); ?>
             <!---メイン-->
            <main class="l-main">
                <div class="l-main__archive__top__image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/archive-top.png" alt="メインビジュアル">
                    <h2 class="l-main__archive__top__txt">
                    Menu:  
                    </h2>
                    <p class="l-main____archive__top__txt_sub">
                    <?php wp_title(''); ?>
                    </p>
                </div>
            <section>
                <div class="l-main__archive">
                    <h3 class="l-main__archive__subheading">小見出しが入ります</h3>
                        <p class="l-main__archive__subheading__txt">
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。   
                        </p>
                </div>
            </section>
            <?php
if ( have_posts()) : while ( have_posts()) :
        the_post();
        ?>
                <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>  class="archive__body">
            <!-- <section class="archive__body"> -->
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
                            </div>
                        </figcaption>
                        </div>
                    </figure>
                </div>
                <?php wp_link_pages(); ?>
                <?php
endwhile;                
else : 
    echo '<p>コンテンツがありません。</p>';
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