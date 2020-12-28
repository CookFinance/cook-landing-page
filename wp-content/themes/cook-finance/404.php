<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage cookfinance
 * @since cookfinance 1.0
 */

get_header(); ?>
<section class="error-404 not-found">
    <div class="container">
        <h1><?php _e( '404', 'cookfinance' ); ?></h1>
        <h3><?php _e('Oops! That page can&rsquo;t be found.', 'cookfinance'); ?></h3>			
        <p><?php _e('It looks like nothing was found at this location.', 'cookfinance'); ?></p>
    </div>
</section>
<?php get_footer(); ?>
