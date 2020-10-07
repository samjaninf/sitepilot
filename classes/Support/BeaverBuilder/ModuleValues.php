<?php

namespace Sitepilot\Support\BeaverBuilder;

class ModuleValues
{
    static public function gray_200()
    {
        return apply_filters('sp_color_gray_200', 'EDF2F7');
    }

    static public function gray_500()
    {
        return apply_filters('sp_color_gray_500', 'A0AEC0');
    }

    static public function gray_600()
    {
        return apply_filters('sp_color_gray_600', '718096');
    }

    static public function gray_900()
    {
        return apply_filters('sp_color_gray_900', '1A202C');
    }

    static public function theme_500()
    {
        return apply_filters('sp_color_theme_500', '667EEA');
    }

    static public function theme_600()
    {
        return apply_filters('sp_color_theme_600', '5A67D8');
    }
}