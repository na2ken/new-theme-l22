<?php
/* Template Name: category.php */
/* Template ID: taxonomy-panel-1col-sidebar template */
/* v1.0 */
get_header(); ?>
<!-- taxonomy-panel-1col-sidebar　-->
<!-- category　-->
<div class="l-cover">
</div><!-- /.l-cover -->


<article class="gryColor">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 wht wow fadeInUp verticalMargin-t-sm verticalMargin-b-sm" data-wow-duration="2.5s" data-wow-delay="1.0s">

                  <?php if(have_posts()): while(have_posts()):
                  the_post(); ?>
<section class="">
<div class="eyeCatch">
<div class="excerpt gryColor">
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
                  <?php if( is_single() ): ?>

                  <?php else: ?>
                    <h2 class="h2 NotoSansJP-Thin verticalMargin-t-xs verticalMargin-b-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div class="excerpt gryColor">
                  <p class="small"><time datetime="<?php echo get_the_date( 'Y-m-j' ) ?>"><?php the_time( get_option( 'date_format' ) ); ?>
                  </time>
                  <?php comments_number( 'なし', 'あり', '%件' ); ?>
                  <br>
                  <?php the_taxonomies( $args ); ?></p>
</div>

                  <p class="small"><?php echo mb_substr(strip_tags($post-> post_content),0,100).'・・・'; ?></p>

                  <p class="more small"><a href="<?php the_permalink(); ?>">続きを読む </a></p>


                  <?php endif; ?>
</section>
                  <?php endwhile; endif; ?>

             </div><!-- col-8 -->


             <div class="col-sm-4 verticalMargin-t-sm verticalMargin-b-sm">
             <div class="col-xs-12 gryColor verticalPadding-t-0 verticalPadding-b-sm">
               <h3 class="h2 verticalMargin-t-0 headeigDec-Underline">アクセスランキング</h3>
<ul class="navListUnit">
               <?php
                 $args = array(
                   'posts_per_page' => 7,
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
             </div><!-- col-12 -->
             </div><!-- col-4 -->

        </div><!-- /.row -->
    </div>
</article>

<?php
get_footer();
