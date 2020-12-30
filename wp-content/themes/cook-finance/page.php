<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Revolution
 * @since Revolution 1.0
 */

get_header(); ?>
<?php
$chinese_page_link = get_field('chinese_page_link', 'option');
$page_url = home_url($wp->request) . "/";
if ($page_url != $chinese_page_link) { ?>
<section class="default-page">
    <div class="container">
        <?php
        $page_title = get_field('page_title');
        if(!empty($page_title)){
            echo '<h2 class="page_title">'.$page_title.'</h2>';
        }
        if(have_posts()) :
            while(have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</section>
<?php } ?>
<?php
    while ( have_posts() ) : the_post();
    endwhile;
    wp_reset_query();
    $fields = get_field_objects();
    $flex_field = 'page_blocks';
    $fid = $fields[$flex_field]['ID'];
    if (isset($fid) && $fid != ''):
        $sections = array();
        $mydata = get_post_field('post_content', $fid);
        $mydata = unserialize($mydata);
        $newdata = $mydata['layouts'];
        foreach ($newdata as $l):
            array_push($sections, $l['name']);
        endforeach;
        if (have_rows($flex_field)) :
            while (have_rows($flex_field)) : the_row();
                $rowlayout = get_row_layout();
                if (in_array($rowlayout, $sections)) :
                    get_template_part("template-parts/sections/" . $rowlayout);
                endif;
            endwhile;
        endif;
    endif;
get_footer(); 
?>