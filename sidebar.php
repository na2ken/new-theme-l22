<?php
/**
 * Template Name :sidebar.php
 * For new-theme
 * Revision : 1.1　
 **/
if ( ! is_active_sidebar( 'sidebar01' ) ) {
	return;
}
?>
    <?php dynamic_sidebar( 'sidebar01' ); ?>
