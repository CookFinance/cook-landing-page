<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage cookfinance
 * @since cookfinance 1.0
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
    <?php head_section_script(); ?>
</head>
<body <?php body_class(); ?>>
    <?php site_loader(); ?>
    <div id="page" class="hfeed site">
        <header class="header-section">
            <div class="container nav-cont">
                <nav class="navigation-bar">
                    <div class="main-logo">
                        <?php
                        $logo = get_field('main_logo', 'option');
                        $chinese_page_link = get_field('chinese_page_link', 'option');
                        global $wp;
                        $page_url = home_url($wp->request) . "/";
                        if ($page_url == $chinese_page_link) {
                            $menu = 'chinesemenu';
                        } else {
                            $menu = 'mainmenu';
                        }
                        if (empty($logo)) {
                            $logo = get_template_directory_uri() . '/assets/images/main-logo.svg';
                        } ?>
                        <a href="<?php echo site_url(); ?>" title="cookfinance"><img src="<?php echo $logo; ?>" alt="cookfinance"></a>
                    </div>
                    <div class="main-navigation">
                        <?php
                        $english_language_text = get_field('english_language_text','option');
                        $english_language_text = !empty($english_language_text) ? $english_language_text : 'English';
                        $chinese_language_text = get_field('chinese_language_text','option');
                        $chinese_language_text = !empty($chinese_language_text) ? $chinese_language_text : '英语';
                        wp_nav_menu(
                            array(
                                'menu_class' => 'enumenu_ul',
                                'menu' => $menu,
                            )
                        );
                        if(!empty($chinese_page_link)) {
                        ?>
                        <select class="language-box">
                            <option value="<?php echo get_site_url(); ?>"><?php echo $english_language_text ?></option>
                            <option value="<?php echo $chinese_page_link; ?>" <?php if($page_url == $chinese_page_link) { echo 'selected'; } ?>><?php echo $chinese_language_text ?></option>
                        </select>
                        <?php } ?>
                    </div>
                </nav>
                <div class="m-menu">
                    <span class="menu-circle"></span>
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <span class="menu-line menu-line-1"></span>
                            <span class="menu-line menu-line-2"></span>
                            <span class="menu-line menu-line-3"></span>
                        </span>
                    </a>
                </div>
                <div class="menu-overlay">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu_class' => 'enumenu_ul',
                            'menu' => $menu,
                        )
                    );
                    if(!empty($chinese_page_link)) {
                    ?>
                    <select class="language-box">
                       <option value="<?php echo get_site_url(); ?>"><?php echo $english_language_text ?></option>
                       <option value="<?php echo $chinese_page_link; ?>" <?php if($page_url == $chinese_page_link) { echo 'selected'; } ?>><?php echo $chinese_language_text ?></option>
                    </select>      
                    <?php } ?>
                </div>
            </div>
        </header>