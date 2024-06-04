<?php
/**
 * Sports Blog About Page
 * @package Sports Blog
 *
 */
if (!class_exists('Sports_Blog_Admin_About_page')):
    class Sports_Blog_Admin_About_page
    {
        function __construct()
        {
            add_action('admin_menu', array($this, 'sports_blog_backend_menu'), 999);
        }
        // Add Backend Menu
        function sports_blog_backend_menu()
        {
            add_theme_page(esc_html__('Sports Blog', 'sports-blog'), esc_html__('Sports Blog', 'sports-blog'), 'activate_plugins', 'sports-blog-about', array($this, 'sports_blog_main_page'),1);
        }
        // Settings Form
        function sports_blog_main_page()
        {
            $site_url = 'https://unitedtheme.com';
            $base_url = home_url();
            $theme_version = wp_get_theme()->get('Version');
            $theme_info = wp_get_theme();
            $theme_name = $theme_info->__get('Name');
            $theme_descrioption = $theme_info->__get('Description');
            ?>
            <div class="theme-admin-wrapper">
                <div class="theme-admin-top">
                    <div class="theme-admin-logo">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/sports-blog-logo.png'); ?>"
                             class="theme-branding-logo">
                        <span class="theme-version-info"> <?php echo esc_attr($theme_version); ?> </span>
                    </div>
                    <h1 class="theme-welcome-text">
                        <?php echo esc_html__('Bonjour! Ciao! Willkommen! Hello!', 'sports-blog'); ?>
                    </h1>
                    <h2 class="theme-main-title">
                        <?php printf(__('Thank you for choosing %1$s', 'sports-blog'), esc_html($theme_name)); ?>
                    </h2>
                    <p>
                        <?php echo esc_html__("Oh my goodness, we're so thrilled you decided to join the UnitedTheme family! Hats off on making an excellent decision!", 'sports-blog'); ?>
                    </p>
                    <div class="theme-admin-button-block">
                        <a href="<?php echo esc_url($site_url); ?>/themes/sports-blog/" class="theme-admin-button" target="_blank"> <?php echo esc_html__('Theme Details', 'sports-blog'); ?> </a>
                        <a href="<?php echo esc_url($site_url); ?>/live-preview/sports-blog/" class="theme-admin-button" target="_blank"> <?php echo esc_html__('View Demo', 'sports-blog'); ?> </a>
                        <a href="https://wordpress.org/support/theme/sports-blog/reviews/" class="theme-admin-button" target="_blank"><?php echo esc_html__('Rate This Theme', 'sports-blog'); ?></a>
                        <a href="<?php echo esc_url($site_url); ?>/themes/sports-blog-plus/" class="theme-admin-button" target="_blank"> <?php echo esc_html__('Upgrade To Pro', 'sports-blog'); ?>  </a>
                    </div>
                </div>
                <div class="theme-admin-bottom">
                    <div class="theme-admin-tab">
                        <ul class="theme-admin-tablist">
                            <li class="active-tab"><?php echo esc_html__('getting started', 'sports-blog'); ?></li>
                            <li><?php echo esc_html__('support', 'sports-blog'); ?></li>
                            <li class="freevspro"><?php echo esc_html__('free vs pro', 'sports-blog'); ?></li>
                        </ul>
                    </div>
                    <div class="theme-tab-wrapper">
                        <div class="theme-admin-getting-started theme-tab-content">
                            <div class="theme-admin-item">
                                <div class="theme-admin-content">
                                    <div class="theme-admin-text">
                                        <?php echo esc_html($theme_descrioption); ?>
                                    </div>
                                    <h3 class="entry-title entry-title-small">
                                        <?php echo esc_html__('Site Title', 'sports-blog'); ?>
                                    </h3>
                                    <div class="theme-admin-text">
                                        <?php echo esc_html__('Manage your site logo and site icon', 'sports-blog'); ?>
                                    </div>
                                    <a href="<?php echo esc_url($base_url . '/wp-admin/customize.php?autofocus%5Bsection%5D=title_tagline') ?>"
                                       class="theme-admin-button">
                                        <?php echo esc_html__('Site Identity', 'sports-blog'); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="theme-admin-item">
                                <div class="theme-admin-content">
                                    <h3 class="entry-title entry-title-small">
                                        <?php echo esc_html__('General settings', 'sports-blog'); ?>
                                    </h3>
                                    <div class="theme-admin-text">
                                        <?php echo esc_html__('Manage your typography options and color options', 'sports-blog'); ?>
                                    </div>
                                    <a href="<?php echo esc_url($base_url . '/wp-admin/customize.php?autofocus%5Bsection%5D=theme_color_typo') ?>"
                                       class="theme-admin-button">
                                        <?php echo esc_html__('General settings', 'sports-blog'); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="theme-admin-item">
                                <div class="theme-admin-content">
                                    <h3 class="entry-title entry-title-small">
                                        <?php echo esc_html__('Menu', 'sports-blog'); ?>
                                    </h3>
                                    <div class="theme-admin-text">
                                        <?php echo esc_html__('Manage your Sites menu form here', 'sports-blog'); ?>
                                    </div>
                                    <a href="<?php echo esc_url($base_url . '/wp-admin/customize.php?autofocus%5Bsection%5D=nav_menus') ?>"
                                       class="theme-admin-button">
                                        <?php echo esc_html__('Setting up Menu', 'sports-blog'); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="theme-admin-item">
                                <div class="theme-admin-content">
                                    <h3 class="entry-title entry-title-small">
                                        <?php echo esc_html__('Theme Options', 'sports-blog'); ?>
                                    </h3>
                                    <div class="theme-admin-text">
                                        <?php echo esc_html__('Manage your site via theme option panel on customizer', 'sports-blog'); ?>
                                    </div>
                                    <a href="<?php echo esc_url($base_url . '/wp-admin/customize.php?autofocus%5Bsection%5D=theme_option_panel') ?>"
                                       class="theme-admin-button">
                                        <?php echo esc_html__('Theme Options', 'sports-blog'); ?>
                                    </a>
                                </div>
                            </div>
                            <h2 class="entry-title entry-title-small">
                                <?php echo esc_html__('Quick Setup Links from Theme Option Panel', 'sports-blog'); ?>
                            </h2>
                            <div class="theme-admin-item">
                                <div class="theme-admin-content">
                                    <h3 class="entry-title entry-title-small">
                                        <?php echo esc_html__('Featured Image Galler', 'sports-blog'); ?>
                                    </h3>
                                    <div class="theme-admin-text">
                                        <?php echo esc_html__('Manage Image Gallery, choosing category and other settings', 'sports-blog'); ?>
                                    </div>
                                    <a href="<?php echo esc_url($base_url . '/wp-admin/customize.php?autofocus%5Bsection%5D=featured_blog_settings') ?>"
                                       class="theme-admin-button">
                                        <?php echo esc_html__('Featured Image Gallery', 'sports-blog'); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="theme-admin-item">
                                <div class="theme-admin-content">
                                    <h3 class="entry-title entry-title-small">
                                        <?php echo esc_html__('Slider Settings', 'sports-blog'); ?>
                                    </h3>
                                    <div class="theme-admin-text">
                                        <?php echo esc_html__('Manage your main slider and their content', 'sports-blog'); ?>
                                    </div>
                                    <a href="<?php echo esc_url($base_url . '/wp-admin/customize.php?autofocus%5Bsection%5D=slider_section_settings') ?>"
                                       class="theme-admin-button">
                                        <?php echo esc_html__('Slider Options', 'sports-blog'); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="theme-admin-item">
                                <div class="theme-admin-content">
                                    <h3 class="entry-title entry-title-small">
                                        <?php echo esc_html__('Featured Page Settings', 'sports-blog'); ?>
                                    </h3>
                                    <div class="theme-admin-text">
                                        <?php echo esc_html__('Manage featured page settings', 'sports-blog'); ?>
                                    </div>
                                    <a href="<?php echo esc_url($base_url . '/wp-admin/customize.php?autofocus%5Bsection%5D=featured_page_settings') ?>"
                                       class="theme-admin-button">
                                        <?php echo esc_html__('Featured Page Options', 'sports-blog'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="theme-admin-support theme-tab-content">
                            <div class="theme-admin-item">
                                <div class="theme-icon-item">
                                    <i class="dashicons dashicons-book"></i>
                                </div>
                                <div class="theme-admin-content">
                                    <h3 class="entry-title entry-title-small"> <?php echo esc_html__('Documentation', 'sports-blog'); ?></h3>
                                    <div class="theme-admin-text">
                                        <?php echo esc_html__('Read our full documentation for all the detailed information on
                                        how to setup and use Meta News theme.', 'sports-blog'); ?>
                                    </div>
                                    <a href="https://docs.unitedtheme.com/sports-blog" class="theme-admin-button" target="_blank"><?php echo esc_html__('read documentation', 'sports-blog'); ?> </a>
                                </div>
                            </div>
                            <div class="theme-admin-item">
                                <div class="theme-icon-item">
                                    <i class="dashicons dashicons-editor-help"></i>
                                </div>
                                <div class="theme-admin-content">
                                    <h3 class="entry-title entry-title-small">
                                        <?php echo esc_html__('Contact support', 'sports-blog'); ?>
                                    </h3>
                                    <div class="theme-admin-text">
                                        <?php echo esc_html__('Still need support? Please create a support ticket and one of our support member will get back to you ASAP.', 'sports-blog'); ?>
                                    </div>
                                    <a href="<?php echo esc_url($site_url); ?>/submit-a-request/" class="theme-admin-button" target="_blank"><?php echo esc_html__('contact support', 'sports-blog'); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="theme-admin-freevspro theme-tab-content">
                            <ul>
                                <li class="table-item">
                                    <ul class="table-data theme-equal-half">
                                        <li>
                                            <h3 class="entry-title entry-title-xs">
                                                <?php echo esc_html__('Upgrade To Pro', 'sports-blog'); ?>
                                            </h3>
                                            <div class="theme-admin-text">
                                                <?php printf(__('Unlock all the features with %1$s Plus', 'sports-blog'), esc_html($theme_name)); ?>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url($site_url); ?>/themes/sports-blog-plus/" class="theme-freevspro-button theme-admin-button" target="_blank">
                                                <?php echo esc_html__('upgrade to pro', 'sports-blog'); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <?php echo esc_html__('List of features', 'sports-blog'); ?>
                                        </li>
                                        <li>
                                            <?php echo esc_html__('Free', 'sports-blog'); ?>
                                        </li>
                                        <li>
                                            <?php echo esc_html__('Plus', 'sports-blog'); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('Fully Responsive', 'sports-blog'); ?>
                                            </span>
                                            <span>
                                            <?php echo esc_html__('Provide your mobile users with the best experience by sharing the most detailed images.', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('High-speed Performance', 'sports-blog'); ?>
                                            </span>
                                            <span>
                                            <?php echo esc_html__('Your customers will never have to wait for too long with our algorithms and optimizations.', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('Unrestricted Features', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-no-alt cross"></i>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('Webmaster Tools', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-no-alt cross"></i>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('Fonts and color option', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-no-alt cross"></i>
                                        </li>
                                        <li>
                                            <div class="theme-table-detail">
                                                <?php echo esc_html__('1000+ Google fonts', 'sports-blog'); ?>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('TypeKit Fonts', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-no-alt cross"></i>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('Custom Fonts', 'sports-blog'); ?>
                                            </span>
                                            <span>
                                                <?php echo esc_html__('Easily upload and integrate custom fonts on your site by using the Custom Fonts module.', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-no-alt cross"></i>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('SEO optimized', 'sports-blog'); ?>
                                            </span>
                                            <span>
                                            <?php echo esc_html__('Get more visitors by making the content of your website fully visible for search engines.', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('Newsletter option', 'sports-blog'); ?>
                                            </span>
                                            <span>
                                            <?php echo esc_html__('Provides a ready-to-go solution for your mail marketing needs.', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-no-alt cross"></i>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('Footer Credit Remove', 'sports-blog'); ?>
                                            </span>
                                            <span>
                                            <?php echo esc_html__('Remove default copyright text from the footer.', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-no-alt cross"></i>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('Translation Ready', 'sports-blog'); ?>
                                            </span>
                                            <span>
                                            <?php echo esc_html__('Translate your project to any language with po translation, WPML plugin and RTL style', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('Instagram Feature', 'sports-blog'); ?>
                                            </span>
                                            <span>
                                            <?php echo esc_html__('Show images from your Instagram account', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-no-alt cross"></i>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('Facebook Integration', 'sports-blog'); ?>
                                            </span>
                                            <span>
                                            <?php echo esc_html__('Display your Facebook Fanpage widget in your sidebar or post content via a shortcode', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-no-alt cross"></i>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('Pinterest Integration', 'sports-blog'); ?>
                                            </span>
                                            <span>
                                            <?php echo esc_html__('Display your Pinterest Board widget in your sidebar or post content via a shortcode', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-no-alt cross"></i>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data">
                                        <li>
                                            <span class="feature-list-lead">
                                            <?php echo esc_html__('Twitter Integration', 'sports-blog'); ?>
                                            </span>
                                            <span>
                                            <?php echo esc_html__('Display your Twitter feed in your sidebar with a widget or post content via a shortcode', 'sports-blog'); ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-no-alt cross"></i>
                                        </li>
                                        <li>
                                            <i class="dashicons dashicons-saved check"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="table-item">
                                    <ul class="table-data theme-equal-half">
                                        <li>
                                            <h3 class="entry-title entry-title-xs"><?php echo esc_html__('Upgrade To Pro', 'sports-blog'); ?></h3>
                                            <div class="theme-admin-text">
                                                <?php printf(__('Unlock all the features with %1$s Plus', 'sports-blog'), esc_html($theme_name)); ?>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url($site_url); ?>/themes/sports-blog-plus/" class="theme-freevspro-button theme-admin-button" target="_blank">
                                                <?php echo esc_html__('Upgrade To Pro', 'sports-blog'); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="theme-admin-footer">
                    <svg width="55" height="55" viewBox="0 0 40.5 48.3">
                        <path fill="#2d82c8" d="M33.4 29.4l7.1 12.3-7.4.6-4 6-7.3-12.9"></path>
                        <path d="M33.5 29.6L26 42.7l-4.2-7.3 11.6-6 .1.2zM0 41.7l7.5.6 3.9 6 7.2-12.4-11-7.3L0 41.7z" fill="#2271b1"></path>
                        <path d="M39.5 18.7c0 1.6-2.4 2.8-2.7 4.3-.4 1.5 1 3.8.2 5.1-.8 1.3-3.4 1.2-4.5 2.3-1.1 1.1-1 3.7-2.3 4.5-1.3.8-3.6-.6-5.1-.2-1.5.4-2.7 2.7-4.3 2.7S18 35 16.5 34.7c-1.5-.4-3.8 1-5.1.2s-1.2-3.4-2.3-4.5-3.7-1-4.5-2.3.6-3.6.2-5.1-2.7-2.7-2.7-4.3 2.4-2.8 2.7-4.3c.4-1.5-1-3.8-.2-5.1C5.4 8 8.1 8.1 9.1 7c1.1-1.1 1-3.7 2.3-4.5s3.6.6 5.1.2C18 2.4 19.2 0 20.8 0c1.6 0 2.8 2.4 4.3 2.7 1.5.4 3.8-1 5.1-.2 1.3.8 1.2 3.4 2.3 4.5 1.1 1.1 3.7 1 4.5 2.3s-.6 3.6-.2 5.1c.3 1.5 2.7 2.7 2.7 4.3z" fill="#599fd9"></path>
                        <path d="M23.6 7c-6.4-1.5-12.9 2.5-14.4 8.9-.7 3.1-.2 6.3 1.5 9.1 1.7 2.7 4.3 4.6 7.4 5.4.9.2 1.9.3 2.8.3 2.2 0 4.4-.6 6.3-1.8 2.7-1.7 4.6-4.3 5.4-7.5C34 15 30 8.5 23.6 7zm7 14c-.6 2.6-2.2 4.8-4.5 6.2-2.3 1.4-5 1.8-7.6 1.2-2.6-.6-4.8-2.2-6.2-4.5-1.4-2.3-1.8-5-1.2-7.6.6-2.6 2.2-4.8 4.5-6.2 1.6-1 3.4-1.5 5.2-1.5.8 0 1.5.1 2.3.3 5.4 1.3 8.7 6.7 7.5 12.1zm-8.2-4.5l3.7.5-2.7 2.7.7 3.7-3.4-1.8-3.3 1.8.6-3.7-2.7-2.7 3.8-.5 1.6-3.4 1.7 3.4z" fill="#fff"></path>
                    </svg>
                    <h3 class="entry-title entry-title-small"><?php echo esc_html__('Upgrade now', 'sports-blog'); ?>  </h3>
                    <div class="theme-admin-text">
                        <?php echo esc_html__('Upgrade to the Pro version and get instant access to all premium extensions, features and future updates.', 'sports-blog'); ?>
                    </div>
                    <a href="<?php echo esc_url($site_url); ?>/themes/sports-blog-plus/" class="theme-admin-button"><?php echo esc_html__('Purchase', 'sports-blog'); ?> <?php echo esc_html($theme_name); ?> <?php echo esc_html__('Plus', 'sports-blog'); ?></a>
                </div>
            </div>
            <?php
        }
    }
    new Sports_Blog_Admin_About_page();
endif;