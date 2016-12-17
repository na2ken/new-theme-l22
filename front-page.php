<?php
/**
 * Template Name : front-page.php
 * For new-theme
 * Revision : 1.1　
 **/
get_header(); ?>
<div class="l-cover verticalPadding-t-sm verticalPadding-b-sm">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="1.0s">
            <figure>
            <img src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/img/img-noimage.png" alt="ブログ記事＃４見出しH1" class="img-responsive">
            <!-- アイキャッチ画像がないときに表示させる仮画像  -->
        </figure>
    <p class="text-center"><small><span class="label label-warning horizontalMargin-r-xs">NEW!</span>2016.08.09</small></p>
<h1 class="h1 text-center NotoSansJP-Thin"><a href="http://bp-media.iaowd.com/000006-2/">ブログ記事＃４見出しH1</a></h1>
<p class="blck-text">中見出しH2中見出しH2テスト投稿
ABCDEFG123456あいうえ５かきく１０さしすせ５たちつ２０なにぬね５はひふ３０まみむめ５やゐゆ４０らりるれ５わおん５０あいうえ５かきく１０さしすせ...</p>

            </div><!-- /.col-sm-12 -->

        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->

<article class="contents">


  <div class="container-liquid gryColor">
      <div class="row ">

    <div class="container">
        <div class="row ">

<div class="col-sm-8">
  <div class="row">

<div class="col-sm-12">
    <h2 class="h4 NotoSansJP-Thin">コンテンツA</h2>
</div>


<?php
     global $post;
     $my_posts= get_posts(array(
     'post_type' => array('content-a'),  // カスタム投稿タイプのスラッグ名
     'numberposts' => 100  // 画面に表示する記事数
     ));
     foreach($my_posts as $post):setup_postdata($post);
?>
    <section class="">
        <div class="col-sm-6">

  <?php
// アイキャッチ画像を配置する
  if ( has_post_thumbnail() ) :
      the_post_thumbnail( 'medium img-responsive' );
      else : ?>
      <figure>
          <img src="<?php bloginfo('template_url'); ?>/img/img-noimage.png" alt="<?php the_title(); ?>" class="img-responsive">
      </figure>
  <?php endif; ?>

<div class="col-xs-12 verticalMargin-b-sm wht">
    <h3 class="h2 NotoSansJP-Thin verticalMargin-t-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="small"><?php echo mb_substr(strip_tags($post-> post_content),0,100).'...'; ?></p>
    <div class="excerpt verticalMargin-t-xs verticalMargin-b-xs keyColor40pale">
        <span class="small">
        <i class="fa fa-folder-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i><?php the_taxonomies( $args ); ?>
        </span>
    </div><!-- /.excerpt -->
</div><!-- /.ccol-xs-12 -->

        </div><!-- /.col-sm-6 -->
    </section>

<?php endforeach; ?>

<div class="col-sm-12 verticalMargin-t-0 verticalMargin-b-sm">
    <ul class="navListUnit">
        <li><i class="fa fa-list-ul horizontalMargin-r-xs" aria-hidden="true"></i>
           <a href="#">このコンテンツの一覧を見る</a>
       </li>
    </ul>
</div>


</div><!-- /.row -->
</div><!-- /.col-sm-8 -->


<div class="col-sm-4">


<div class="col-sm-12">
<div class="row">
    <h2 class="h4 NotoSansJP-Thin">コンテンツB</h2>
</div>
</div>





<div class="col-sm-12 verticalPadding-b-xs">
      <div class="row no-gutter">

        <div class="col-xs-3">
                    <figure>
                    <img src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/img/img-noimage-thumbnail.png" alt="コンテンツB#4 見出しH1コンテンツB#4 見出しH1" class="img-responsive">
                    <!-- アイキャッチ画像がないときに表示させる仮画像  -->
                </figure>
            </div>

        <div class="col-xs-9">
          <h3 class="h4 NotoSansJP-Thin verticalMargin-t-0 horizontalPadding-l-xs"><a href="http://bp-media.iaowd.com/content-b/%e3%82%b3%e3%83%b3%e3%83%86%e3%83%b3%e3%83%84b4/">コンテンツB#4 見出しH1コンテンツB#4 見出しH1</a></h3>
          <div class="excerpt keyColor40pale horizontalPadding-l-xs">
              <span class="small">
                  <i class="fa fa-folder-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i>カテゴリー: <a href="http://bp-media.iaowd.com/content-b-cat/category-b-a/">カテゴリA</a>。              </span>
          </div>
        </div><!-- /.col-xs-9 -->

      </div><!-- row -->
</div><!-- col-12 -->




<div class="col-sm-12 verticalPadding-b-xs">
      <div class="row no-gutter">

        <div class="col-xs-3">
                    <figure>
                    <img src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/img/img-noimage-thumbnail.png" alt="コンテンツB#3 見出しH1コンテンツB#3" class="img-responsive">
                    <!-- アイキャッチ画像がないときに表示させる仮画像  -->
                </figure>
            </div>

        <div class="col-xs-9">
          <h3 class="h4 NotoSansJP-Thin verticalMargin-t-0 horizontalPadding-l-xs"><a href="http://bp-media.iaowd.com/content-b/%e3%82%b3%e3%83%b3%e3%83%86%e3%83%b3%e3%83%84b3/">コンテンツB#3 見出しH1コンテンツB#3</a></h3>
          <div class="excerpt keyColor40pale horizontalPadding-l-xs">
              <span class="small">
                  <i class="fa fa-folder-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i>カテゴリー: <a href="http://bp-media.iaowd.com/content-b-cat/category-b-b/">カテゴリB</a>。              </span>
          </div>
        </div><!-- /.col-xs-9 -->

      </div><!-- row -->
</div><!-- col-12 -->




<div class="col-sm-12 verticalPadding-b-xs">
      <div class="row no-gutter">

        <div class="col-xs-3">
                    <figure>
                    <img src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/img/img-noimage-thumbnail.png" alt="コンテンツB#2 見出しH1コンテンツB#2 見出しH1" class="img-responsive">
                    <!-- アイキャッチ画像がないときに表示させる仮画像  -->
                </figure>
            </div>

        <div class="col-xs-9">
          <h3 class="h4 NotoSansJP-Thin verticalMargin-t-0 horizontalPadding-l-xs"><a href="http://bp-media.iaowd.com/content-b/%e3%82%b3%e3%83%b3%e3%83%86%e3%83%b3%e3%83%84b2-%e8%a6%8b%e5%87%ba%e3%81%97h1%e3%82%b3%e3%83%b3%e3%83%86%e3%83%b3%e3%83%84b2-%e8%a6%8b%e5%87%ba%e3%81%97h1/">コンテンツB#2 見出しH1コンテンツB#2 見出しH1</a></h3>
          <div class="excerpt keyColor40pale horizontalPadding-l-xs">
              <span class="small">
                  <i class="fa fa-folder-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i>カテゴリー: <a href="http://bp-media.iaowd.com/content-b-cat/category-b-a/">カテゴリA</a>。              </span>
          </div>
        </div><!-- /.col-xs-9 -->

      </div><!-- row -->
</div><!-- col-12 -->




<div class="col-sm-12 verticalPadding-b-xs">
      <div class="row no-gutter">

        <div class="col-xs-3">
                    <figure>
                    <img src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/img/img-noimage-thumbnail.png" alt="コンテンツB見出しH1コンテンツB見出しH1" class="img-responsive">
                    <!-- アイキャッチ画像がないときに表示させる仮画像  -->
                </figure>
            </div>

        <div class="col-xs-9">
          <h3 class="h4 NotoSansJP-Thin verticalMargin-t-0 horizontalPadding-l-xs"><a href="http://bp-media.iaowd.com/content-b/%e3%82%b3%e3%83%b3%e3%83%86%e3%83%b3%e3%83%84b%e8%a6%8b%e5%87%ba%e3%81%97h1%e3%82%b3%e3%83%b3%e3%83%86%e3%83%b3%e3%83%84b%e8%a6%8b%e5%87%ba%e3%81%97h1/">コンテンツB見出しH1コンテンツB見出しH1</a></h3>
          <div class="excerpt keyColor40pale horizontalPadding-l-xs">
              <span class="small">
                  <i class="fa fa-folder-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i>カテゴリー: <a href="http://bp-media.iaowd.com/content-b-cat/category-b-b/">カテゴリB</a>。              </span>
          </div>
        </div><!-- /.col-xs-9 -->

      </div><!-- row -->
</div><!-- col-12 -->


<div class="col-sm-12 verticalMargin-t-0 verticalMargin-b-sm">
    <div class="row">
              <ul class="navListUnit">
                  <li><i class="fa fa-list-ul horizontalMargin-r-xs" aria-hidden="true"></i>
                     <a href="#">このコンテンツの一覧を見る</a>
                 </li>
              </ul>
    </div>
</div>


<figure class="verticalMargin-b-sm">
    <a href="#">
        <img src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/img/bnr01.png" class="img-responsive bnr" alt="bp-media.iaowd.com">
    </a>
</figure>

<figure class="verticalMargin-b-sm">
    <a href="#">
        <img src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/img/bnr02.png" class="img-responsive bnr" alt="bp-media.iaowd.com">
    </a>
</figure>


</div><!-- /.col-sm-4 -->

        </div><d!-- /.row -->
    </div>

  </div><d!-- /.row -->
</div>


</article>
<?php
get_footer(); ?>
