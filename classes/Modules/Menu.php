<?php

namespace Sitepilot\Modules;

use Sitepilot\Model;
use Sitepilot\Module;

final class Menu extends Module
{
    /**
     * The unique module id.
     *
     * @var string
     */
    static protected $module = 'menu';

    /**
     * The module name.
     *
     * @var string
     */
    static protected $name = 'Menu';

    /**
     * The module menu priority.
     *
     * @var string
     */
    static protected $priority = 70;
    
    /**
     * @return void
     */
    static public function init()
    {
        parent::init();

        /* Actions */
        add_action('admin_menu', __CLASS__ . '::action_admin_menu');

        /* Filters */
        add_filter('admin_enqueue_scripts', __CLASS__ . '::filter_load_admin_scripts');
    }

    /**
     * Load admin menu.
     *
     * @return void;
     */
    static public function action_admin_menu()
    {
        add_menu_page(
            Branding::get_name(),
            Branding::get_name(),
            'publish_posts',
            'sitepilot-menu',
            __CLASS__ . '::render_info_page',
            false,
            2
        );

        add_submenu_page(
            'sitepilot-menu',
            Branding::get_name() . ' Info',
            'Info',
            'publish_posts',
            'sitepilot-menu',
            __CLASS__ . '::render_info_page'
        );
    }

    /**
     * Load menu stylesheets and scripts.
     *
     * @return void
     */
    public static function filter_load_admin_scripts()
    {
        wp_enqueue_style(
            'sitepilot-admin',
            SITEPILOT_URL . 'assets/dist/css/admin-menu.css',
            array(),
            SITEPILOT_VERSION
        );
    }

    /**
     * Render info page.
     *
     * @return void
     */
    public static function render_info_page()
    {
        global $wp_version;

        echo '<div class="wrap">';
        echo '<h1>' . Branding::get_name() . ' ' . __('Information', 'sitepilot') . '</h1>';

        echo '<p>';
        echo "WordPress: v$wp_version <br />";
        echo 'Server: ' . gethostname() . '<br />';
        echo __('PHP Version', 'sitepilot') . ': v' . phpversion();
        echo '</p>';

        $core_update = get_option('sitepilot_last_update', '-');
        $last_login = get_option('sitepilot_last_login', '-');

        echo '<p>';
        echo __('Last update', 'sitepilot') . ': ' . ($core_update != '-' ? date_i18n(get_option('date_format') .
            ' ' . get_option('time_format'), $core_update) : $core_update) . '<br />';
        echo __('Last login', 'sitepilot') . ': ' . ($last_login != '-' ? date_i18n(get_option('date_format') .
            ' ' . get_option('time_format'), $last_login) : $last_login) . '<br />';
        echo '</p>';

        echo '<h3 style="font-weight: 400;">' . __('Contact', 'sitepilot') . '</h3>';
        echo 'Website: <a href="' . Model::get_branding_website() . '" target="_blank">' . Model::get_branding_website() . '</a><br />';
        echo 'Help: <a href="' . Model::get_branding_support_url() . '" target="_blank">' . Model::get_branding_support_url() . '</a><br />';

        echo '</div>';
    }
}
