<?php

namespace Sitepilot\Components;

final class Shortcodes
{
    /**
     * Initialize shortcodes module.
     * 
     * @return void
     */
    static public function init()
    {
        /* Shortcodes */
        add_shortcode('sp_powered_by', __CLASS__ . '::shortcode_powered_by');
    }

    /**
     * Powered by shortcode.
     *
     * @return string
     */
    static public function shortcode_powered_by()
    {
        return 'Powered by <a href="https://sitepilot.io" title="Sitepilot - Managed WordPress Hosting & Development" target="_blank">Sitepilot</a>';
    }
}
