<?php
/**
 * Template Name : footer.php
 * For new-theme
 * Revision : 1.1　
 **/
?>
<footer class="l-footer">
    <!-- Scroll to Top Button -->
    <div class="scroll-top page-scroll">
      <a class="btn" href="#pageTop"><i class="fa fa-chevron-up"></i></a>
    </div>
       <div class="l-footerAbove">
             <div class="container">
                   <div class="row">
                       <div class="col-md-4">
                           <h3 class="textColor-gryColorTone2nd">Link</h3>
                           <div class="l-utilityNav-main">
                               <?php wp_nav_menu( array( 'theme_location' => 'footer-left-column', 'items_wrap' => '<ul class="navListUnit">%3$s</ul>' ) ); ?>
                           </div>
                       </div>
                       <div class="col-md-4">
                           <h3 class="textColor-gryColorTone2nd">Category</h3>
                           <div class="l-utilityNav-main">
                               <?php wp_nav_menu( array( 'theme_location' => 'footer-center-column', 'items_wrap' => '<ul class="navListUnit">%3$s</ul>' ) ); ?>
                           </div>
                       </div>
                       <div class="col-md-4">
                           <h3 class="textColor-gryColorTone2nd">Search</h3>

<div id="searchBox" class="col-sm-12">
<div id="searchBox" class="row no-gutter">
    <div class="col-sm-9">
<form method="get" id="searchBox" action="http://bp-media.iaowd.com/" class="">
            <input placeholder="キーワードを入力" class="form-control" type="text" name="s" id="searchInput" value="" >
    </div>
    <div class="col-sm-3"><input type="submit" value="検索" accesskey="f" class="btn btn-success"/>
</form>
    </div>
</div>
</div>


                        </div>
                   </div><!-- /.row -->
              </div><!-- /.container -->
        </div><!-- /.l-footerAbove -->

        <div class="l-footeBelow">
              <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
<p class="text-center"><small><?php bloginfo('name'); ?> Allrights Reserved.</small></p>
                          </div>
                      </div><!-- /.row -->
              </div><!-- /.container -->
        </div><!-- /.lay-footeBelow -->
</footer><!-- /.footer -->

<!-- Bootstrap & fontawesome js -->
<script src="https://use.fontawesome.com/48d2973362.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- other js -->
<script src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/js/wow.js"></script>

<script src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/js/jquery.bootstrap-autohidingnavbar.js"></script>

<script src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/js/jquery.easing.min.js"></script>

<script src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/js/cbpAnimatedHeader.js"></script>

<script src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/js/bp.js"></script>

<script src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/js/jcolumn.jquery.min.js"></script>
<script>
  wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      callback:     function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    }
  );
  wow.init();
  document.getElementById('moar').onclick = function() {
    var section = document.createElement('section');
    section.className = 'section--purple wow fadeInDown';
    this.parentNode.insertBefore(section, this);
  };
</script>
<script>
    $('.col-xs-12' ).jcolumn();
</script>
</body>
</html>
