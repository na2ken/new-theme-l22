<?php
/* Template Name: archive-bootstrap.php */
/* Template ID: archive-panel-3col template */
/* v1.0 */
get_header(); ?>
<!-- ◆ archive-panel-3col ◆ -->
<div class="l-cover">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="h2 text-center NotoSansJP-Thin verticalMargin-t-sm verticalMargin-b-sm"><?php echo esc_html(get_post_type_object(get_post_type())->label ); ?></h1>
            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->

<article class="gryColor">

            <div class="container">
                <div class="row">


                  <?php while (have_posts()) : the_post(); ?>

                    <div class="">
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



                    <h2 class="h2 NotoSansJP-Thin verticalMargin-t-xs verticalMargin-b-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="verticalMargin-t-0">
                        <span class="small">
                            <i class="fa fa-folder"></i><?php the_taxonomies( $args ); ?>
                        </span>
                    </div>

                  <?php endwhile;?>






      </div><!-- /.row -->
  </div>
</article>

<?php
get_footer();
