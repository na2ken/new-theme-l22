<?php
/**
 * Template Name : single-content-a.php
 * For new-theme
 * Revision : 1.1　
 **/
get_header(); ?>
<!-- single-panel-1col-sidebar -->
<div class="l-cover">
</div><!-- /.l-cover -->

<article class="gryColor">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 wht verticalMargin-t-sm verticalMargin-b-sm">
                    <section class="wht">

                           <?php
                             // ループ開始
                             while ( have_posts() ) : the_post(); ?>

                           <div class="eyeCatch">
                           <?php
                           // アイキャッチ画像を配置する
                                 if ( has_post_thumbnail() ) :
                                 the_post_thumbnail( 'medium img-responsive' );
                                 else : ?>
                                     <figure>
                                         <img src="<?php echo get_template_directory_uri(); ?>/img/img-noimage.png" alt="<?php the_title(); ?>" class="img-responsive">
                                         <!-- アイキャッチ画像がないときに表示させる仮画像  -->
                                     </figure>
                           <?php endif; ?>
                           </div>

                                 <div class="">
                                     <h1 class="h2 NotoSansJP-Thin verticalMargin-t-xs"><?php the_title(); ?></h1>
                                     <div class="verticalMargin-t-sm">
                                         <p class="small"><?php the_content(); ?></p>
                                     </div>
                                 </div>

                           <?php endwhile; ?>
                    </section>
</div><!-- col-8 -->
                    <div class="col-sm-4 verticalMargin-t-sm verticalMargin-b-sm">
                    <div class="col-xs-12 gryColor verticalPadding-t-0 verticalPadding-b-sm">

                      <h3 class="h2 verticalMargin-t-0 headeigDec-Underline">アクセスランキング</h3>
<ul class="navbarNavUnit-local">
<li class="list-unstyled"><a href="http://bp-media.iaowd.com/content-a/%e3%82%b3%e3%83%b3%e3%83%86%e3%83%b3%e3%83%84a6/">
  コンテンツA#6 あいうえ５かきく１０</a></li>
<li class="list-unstyled"><a href="http://bp-media.iaowd.com/content-a/%e3%82%b3%e3%83%b3%e3%83%86%e3%83%b3%e3%83%84a5/">
  コンテンツA#5 見出しH1コンテンツA#5 見出しH1</a></li>
<li class="list-unstyled"><a href="http://bp-media.iaowd.com/content-a/%e3%82%b3%e3%83%b3%e3%83%86%e3%83%b3%e3%83%84a4/">
  コンテンツA#4 見出しH1コンテンツA#4</a></li>
<li class="list-unstyled"><a href="http://bp-media.iaowd.com/content-a/%e3%82%b3%e3%83%b3%e3%83%86%e3%83%b3%e3%83%84a3/">
  コンテンツA#3 見出し</a></li>
<li class="list-unstyled"><a href="http://bp-media.iaowd.com/content-a/%e3%82%b3%e3%83%b3%e3%83%86%e3%83%b3%e3%83%84a2/">
  コンテンツA#2 見出しH1コンテンツA#2 見出しH1コンテンツA#2 見出しH1</a></li>
<li class="list-unstyled"><a href="http://bp-media.iaowd.com/content-a/%e3%82%b3%e3%83%b3%e3%83%86%e3%83%b3%e3%83%84a/">
  コンテンツA見出しH1コンテンツA見出しH1</a></li>
</ul>


                    </div>
                    </div><!-- col-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
</article>

<?php
get_footer(); ?>
