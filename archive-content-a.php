<?php
/**
 * Template Name : archive-a.php
 * For new-theme
 * Revision : 1.1　
 **/
get_header(); ?>
<!-- ◆ archive-panel-3col ◆ -->
<div class="l-cover">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="h2 text-center NotoSansJP-Thin verticalMargin-t-sm verticalMargin-b-sm">コンテンツA</h1>
            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->

<article class="gryColor">

    <div class="container">
        <div class="row">


          <?php if(have_posts()): while(have_posts()):
          the_post(); ?>

          <div class="col-xs-12 col-sm-6 col-md-4 verticalMargin-t-sm verticalMargin-b-sm wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="0s">
              <section>

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

<div class="horizontalPadding-l-xs horizontalPadding-r-xs">
          <?php if( is_single() ): ?>

          <?php else: ?>
              <h2 class="h2 NotoSansJP-Thin verticalMargin-t-xs verticalMargin-b-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="excerpt gryColor">
              <p class="small"><i class="fa fa-folder-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i><?php the_taxonomies( $args ); ?></p>
</div>
              <p class="small"><?php echo mb_substr(strip_tags($post-> post_content),0,10).'・・・'; ?></p>
          <?php endif; ?>
</div><!-- LR Padding -->

        </section>
    </div><!-- col-12 & col-sm-6 -->

          <?php endwhile; endif; ?>




        </div><!-- /.row -->
    </div>
</article>

<?php
get_footer(); ?>
