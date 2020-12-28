<?php

/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage cookfinance
 * @since cookfinance 1.0
 */
?>
<footer class="footer-section">
	<div class="container">
		<div class="footer-left">
			<?php if(have_rows('social_links','option')) : ?>
		    <div class="social">
		    	<?php 
		    	while(have_rows('social_links','option')) :
		    		the_row();
		    		$social_media_title = get_sub_field('social_media_title');
		    		$icon_class = get_sub_field('icon_class');
		    		$social_media_link = get_sub_field('social_media_link');
		    		if(!empty($social_media_link) && !empty($icon_class)) {
		    			echo '<a href="'.$social_media_link.'" target="_blank" title="'.sanitize_text_field($social_media_title).'"><i class="'.$icon_class.'"></i></a>';
		    		}
		    	endwhile;
		    	?>
		    </div>
			<?php endif; ?>
		</div>
		<?php
		$chinese_copyright_text = get_field('chinese_copyright_text','option');
		$copyright_text = get_field('copyright_text','option');
		$chinese_page_link = get_field('chinese_page_link','option');
		global $wp;
		$page_url = home_url( $wp->request )."/";
		if($page_url == $chinese_page_link){
			$copyright_text = $chinese_copyright_text;
		}
		?>
		<div class="footer-right">
			<?php if(!empty($copyright_text)) { ?>
		    <div class="footer-copyright">
		        <p><?php echo do_shortcode($copyright_text); ?></p>
		    </div>
			<?php } ?>
		</div>
	</div>
</footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>