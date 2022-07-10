<?php get_header(); ?>
             <!---メイン-->
            <main class="l-main">
            <?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>

                <div class="l-main__page__top__image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page-top.png" alt="メインビジュアル">
                    <h1 class="l-main__page__top__txt">
                    <?php the_title(); ?>
                    </h1>
                </div>
                <div class="l-main__body">
                <section class="l-main__page__section1">
                    <h2 class="l-main__page__section1__title">
                        見出しh2
                    </h2>
                    <p class="l-main__page__section1__txt">
                        Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                        Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                        Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                        Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                        Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                        Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                    </p>
                </section>
                <section class="l-main__page__section2">
                    <h3>見出しh3</h3>
                    <h4>見出しh4</h4>
                    <h5>見出しh5</h5>
                    <h6>見出しh6</h6>
                </section>
                <section>
                    <blockquote class="l-main__page__section3">
                        <p>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                            引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                            引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                            引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                            引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                            引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                            引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                            引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                            引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                        </p>
                        <div class="l-main__page__section3__cite">出典元：<cite><a href=”引用元のURL”>○○○○○○○○○○○○</a></cite></div>
                    </blockquote>
                </section>
                <section class="l-main__page__section4">
                <figure>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/single-section-main.png">
                </figure>
                <div class="l-main__page__section4__sub1">
                    <figure class="l-main__page__section4__sub1__body1">
                        <img class="l-main__page__section4__sub1_img" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/single-section-sub.png">
                        <figcaption>
                            <p>
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                            </p>
                        </figcaption>
                    </figure>
                    <figure class="l-main__page__section4__sub1__body2">
                        <figcaption>
                            <p>
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります
                            </p>
                        </figcaption>
                        <img class="l-main__page__section4__sub1_img" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/single-section-sub.png">
                    </figure>
                </div>
                <div class="l-main__page__section4__sub1__body3">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/single-section-sub.png">
                </div>
                </section>
                <section class="l-main__page__section5">
                    <div class="l-main__page__section5__body">
                        <figure>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/single-section-main.png">
                        </figure>
                        <figure>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/single-section-main.png">
                        </figure>
                        <figure>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/single-section-main.png">
                        </figure>
                        <figure>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/single-section-main.png">
                        </figure>
                        <figure>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/single-section-main.png">
                        </figure>
                        <figure>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/single-section-main.png">
                        </figure>
                        <figure>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/single-section-main.png">
                        </figure>
                        <figure>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/single-section-main.png">
                        </figure>
                        <figure>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/single-section-main.png">
                        </figure>
                    </div>
                </section>
                <section class="l-main__page__section6">
                    <div class="l-main__page__section6__body">
                    <ol class="l-main__page__section6__body__list1">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ol>
                    <ol class="l-main__page__section6__body__list2">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ol>
                    <ol class="l-main__page__section6__body__list3">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ol>
                    <ul class="l-main__page__section6__body__list4">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ul>
                    <ul class="l-main__page__section6__body__list5">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ul>
                    <ul class="l-main__page__section6__body__list6">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ul>
                    </div>
                </section>
                <section class="l-main__page__section7">
                    <div class="l-main__page__section7__body">
                    <ul>
                        <li>&lt;html&gt;</li>
                        <li>&lt;head&gt;</li>
                        <li>&lt;/head&gt;</li>
                        <li>&lt;body&gt;</li>
                        <li>&lt;/body&gt;</li>
                        <li>&lt;/html&gt;</li>
                    </ul>
                    </div>
                </section>
                <section class="l-main__page__section8">
                <div class="l-main__page__section8__body">  
                <table>
                    <tr>
                        <td>テーブル</td>
                        <td>テーブル</td>
                    </tr>
                    <tr>
                        <td>テーブル</td>
                        <td>テーブル</td>
                    </tr>
                    <tr>
                        <td>テーブル</td>
                        <td>テーブル</td>
                    </tr>
                    <tr>
                        <td>テーブル</td>
                        <td>テーブル</td>
                    </tr>
                </table>
                </div>
                </section>
                <button class="c-main__single__btn">
                    <a href="#">ボタン</a>
                </button>
                <div class="l-main__page__txt">
                    <p>boldboldboldboldboldboldbold</p>
                </div>
                <?php 
          endwhile;
      endif;
      ?>
            </div>
            </main>
            <!--サイドバー-->
            <?php get_sidebar(); ?>
            <!--フッター-->
            <?php get_footer(); ?>
            <div class="l-sidebar__main_bg"></div>
      </article>