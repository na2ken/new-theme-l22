<?php
/**
 * Template Name : single.php
 * For new-theme
 * Revision : 1.1　
 **/
get_header(); ?>
<!-- single-panel-1col-sidebar single -->
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
                                         <p class="small">
                                             <?php echo get_avatar( 1, 32, '', '', array('class'=>'img-circle', 'extra_attr'=>'style="margin: 0 5px 0 0;"') ); ?>
                                             <?php the_author_posts_link(); ?>(<?php the_author_posts(); ?> )
                                         </p>

                                             <?php comments_template(); ?>


                                        <?php get_template_part('offer'); ?>
                                 </div>

                           <?php endwhile; ?>
    </section>
</div><!-- col-8 -->
                    <div class="col-sm-4 verticalMargin-t-sm verticalMargin-b-sm">
                    <div class="col-xs-12 gryColor verticalPadding-t-0 verticalPadding-b-sm">

                      <h3 class="h2 verticalMargin-t-0 headeigDec-Underline">アクセスランキング</h3>
<ul class="navbarNavUnit-local">
<?php
  $args = array(
    'posts_per_page' => 10,
    'post_type' => get_post_type(),  //表示中の記事と同じ投稿タイプの記事を取得
  );
  $my_query = new WP_Query($args);
?>
<?php if($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post(); ?>
<li class="list-unstyled"><a href="<?php the_permalink(); ?>">
  <?php the_title(); ?></a></li>
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); ?>
</ul>


                    </div>
                    </div><!-- col-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
</article>

<?php
get_footer();
