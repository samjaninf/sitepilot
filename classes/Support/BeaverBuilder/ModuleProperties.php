<?php

namespace Sitepilot\Support\BeaverBuilder;

final class ModuleProperties
{
    static private function _section($settings, $margins)
    {
        $settings->margin_unit = '%';
        $settings->margin_medium_unit = '%';
        $settings->margin_responsive_unit = '%';

        $settings->margin_top = $margins[2];
        $settings->margin_bottom = $margins[2];

        if ($margins[1] != $margins[2]) {
            $settings->margin_top_medium = $margins[1];
            $settings->margin_bottom_medium = $margins[1];
        }

        if ($margins[0] != $margins[1] || $margins[0] != $margins[2]) {
            $settings->margin_top_responsive = $margins[0];
            $settings->margin_bottom_responsive = $margins[0];
        }

        return $settings;
    }

    static public function section_xl($settings)
    {
        return self::_section($settings, apply_filters('sp_mod_props_section_xl', [
            20,
            15,
            20
        ]));
    }

    static public function section_lg($settings)
    {
        return self::_section($settings, apply_filters('sp_mod_props_section_lg', [
            15,
            15,
            15
        ]));
    }

    static public function section_md($settings)
    {
        return self::_section($settings, apply_filters('sp_mod_props_section_md', [
            10,
            10,
            10
        ]));
    }

    static public function section_sm($settings)
    {
        return self::_section($settings, apply_filters('sp_mod_props_section_sm', [
            5,
            5,
            5
        ]));
    }

    static public function section_xs($settings)
    {
        return self::_section($settings, apply_filters('sp_mod_props_section_xs', [
            2.5,
            2.5,
            2.5
        ]));
    }

    static public function h1($merge = [])
    {
        return apply_filters('sp_mod_props_h1', array_merge([
            'color' => '',
            'typography' => ''
        ], $merge));
    }

    static public function h2($merge = [])
    {
        return apply_filters('sp_mod_props_h2', array_merge([
            'color' => '',
            'typography' => ''
        ], $merge));
    }

    static public function h3($merge = [])
    {
        return apply_filters('sp_mod_props_h3', array_merge([
            'color' => '',
            'typography' => ''
        ], $merge));
    }

    static public function h4($merge = [])
    {
        return apply_filters('sp_mod_props_h4', array_merge([
            'color' => '',
            'typography' => ''
        ], $merge));
    }

    static public function h5($merge = [])
    {
        return apply_filters('sp_mod_props_h5', array_merge([
            'color' => '',
            'typography' => ''
        ], $merge));
    }

    static public function text_xl($merge = [])
    {
        return apply_filters('sp_mod_props_text_xl', array_merge([
            'color' => '',
            'typography' => ''
        ], $merge));
    }

    static public function text_lg($merge = [])
    {
        return apply_filters('sp_mod_props_text_lg', array_merge([
            'color' => '',
            'typography' => ''
        ], $merge));
    }

    static public function text_base($merge = [])
    {
        return apply_filters('sp_mod_props_text_base', array_merge([
            'color' => '',
            'typography' => ''
        ], $merge));
    }

    static public function grid($merge = [])
    {
        return apply_filters('sp_mod_props_grid', array_merge([
            '_grid' => 'grid',
            'grid_cols' => [
                'grid-cols-1',
                'grid-cols-3',
                'grid-cols-3'
            ],
            'grid_gap_x' => [
                'gap-x-8',
                'gap-x-8',
                'gap-x-10'
            ],
            'grid_gap_y' => [
                'gap-y-8',
                'gap-y-8',
                'gap-y-10'
            ],
        ], $merge));
    }

    static public function card($merge = [])
    {
        return apply_filters('sp_mod_props_card', array_merge([
            'bg_color' => 'ffffff',
            'border_radius' => 'rounded-lg',
            'shadow' => 'shadow-xl'
        ], $merge));
    }

    static public function btn_primary($merge = [])
    {
        return apply_filters('sp_mod_props_button_primary', array_merge([
            'color' => 'ffffff',
            'hover_color' => 'ffffff',
            'bg_color' => 'theme_600',
            'hover_bg_color' => 'theme_500',
            'font_size' => 'text-base',
            'font_weight' => 'font-medium',
            'line_height' => 'leading-6',
            'text_transform' => 'normal-case',
            'border_radius' => 'rounded-md',
            'border_color' => 'border-transparent',
            'focus_outline' => 'focus:outline-none',
            'focus_box_shadow' => 'focus:shadow-outline',
            'transition' => 'transition',
            'transition_duration' => 'duration-150',
            'transition_timing' => 'ease-in-out',
            'shadow' => 'shadow',
            'padding_x' => 'px-6',
            'padding_y' => 'py-3',
            'display' => 'inline-block'
        ], $merge));
    }

    static public function btn_secondary($merge = [])
    {
        return apply_filters('sp_mod_props_button_secondary', array_merge(self::btn_primary(), [
            'color' => 'theme_600',
            'hover_color' => 'theme_500',
            'bg_color' => 'ffffff',
            'hover_bg_color' => 'ffffff'
        ], $merge));
    }
}
