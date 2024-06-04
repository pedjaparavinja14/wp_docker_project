<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sports Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    }
    ?>

    <?php if (sports_blog_get_option('enable_preloader') == 1) { ?>
        <div class="preloader">
            <div class='circle'>
                <div class='inner'></div>
            </div>
        </div>
    <?php } ?>
    <?php if (sports_blog_get_option('enable_cursor_option') == 1) { ?>
        <div class="theme-custom-cursor theme-cursor-primary"></div>
        <div class="theme-custom-cursor theme-cursor-secondary"></div>
    <?php } ?>
    
<div id="page" class="site <?php if (sports_blog_get_option('enable_featured_page_section') == 1) {
    echo "content-block";
} ?>">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'sports-blog'); ?></a>

<?php if (is_front_page() || is_home()) {
        do_action('sports_blog_action_ticker');
    }
?>

<?php $global_banner_image = get_header_image(); ?>
<?php if (has_header_image()) {
    $sports_blog_header_img = "data-attrbg";
} else {
    $sports_blog_header_img = "data-attr-blank";
}

 ?>
    <header id="masthead" class="site-header <?php echo esc_attr($sports_blog_header_img); ?>" data-background="<?php echo esc_url($global_banner_image); ?>">
        <!-- header -->
        <div class="site-branding">
            <div class="wrapper">
                <div class="text-center">
                    <div class="logo">
                        <?php
                        the_custom_logo();
                        if (is_front_page() && is_home()) : ?>
                            <h1 class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </h1>
                        <?php else : ?>
                            <p class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </p>
                        <?php
                        endif;

                        $description = get_bloginfo('description', 'display');
                        if ($description || is_customize_preview()) : ?>
                            <p class="site-description">
                                <?php echo esc_html($description); ?>
                            </p>
                        <?php
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="united-navigation">
        <div class="wrapper">
            <div class="row">
                <div class="col col-full">
                    <nav id="site-navigation" class="main-navigation">
                        <span class="toggle-menu" aria-controls="primary-menu" aria-expanded="false">
                            <span class="screen-reader-text"><?php esc_html_e('Primary Menu', 'sports-blog'); ?></span>
                            <i class="toogle-icon"></i>
                        </span>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'mainnav',
                            'menu_id' => 'primary-menu',
                            'container' => 'div',
                            'container_class' => 'menu'
                        ));
                        ?>
                        <button type="button" class="icon-search" aria-label="search">
                            <?php echo sports_blog_get_svg( array( 'icon' => 'loupe' ) ); ?>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="model-search">
        <a href="javascript:void(0)" class="searchbar-skip-link"></a>
        <a href="javascript:void(0)" class="cross-exit"></a>
        <div class="model-search-wrapper">
            <div class="popup-form">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>


    <?php
    if (is_front_page() || is_home()) {
        do_action('sports_blog_action_slider_post');
    }
    ?>

    <?php
    if (is_front_page() || is_home()) {
        do_action('sports_blog_action_featured_page');
    }
    ?>
    <div id="content" class="site-content">