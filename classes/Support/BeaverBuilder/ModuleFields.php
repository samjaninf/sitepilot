<?php

namespace Sitepilot\Support\BeaverBuilder;

class ModuleFields
{
    static public function color($key = '')
    {
        return [
            'type' => 'color',
            'label' => __('Color', 'sitepilot'),
            'show_reset' => true,
            'show_alpha' => true,
            'preview'    => array(
                'type'     => 'css',
                'selector' => '.' . $key,
                'property' => 'color',
                'important' => true
            )
        ];
    }

    static public function hover_color($key = '')
    {
        return [
            'type' => 'color',
            'label' => __('Hover Color', 'sitepilot'),
            'show_reset' => true,
            'show_alpha' => true,
            'preview'    => array(
                'type'     => 'css',
                'selector' => '.' . $key . ':hover',
                'property' => 'color',
                'important' => true
            )
        ];
    }

    static public function bg_color($key = '')
    {
        return [
            'type' => 'color',
            'label' => __('Background Color', 'sitepilot'),
            'show_reset' => true,
            'show_alpha' => true,
            'preview'    => array(
                'type'     => 'css',
                'selector' => '.' . $key,
                'property' => 'background-color',
                'important' => true
            )
        ];
    }

    static public function hover_bg_color($key = '')
    {
        return [
            'type' => 'color',
            'label' => __('Hover Background Color', 'sitepilot'),
            'show_reset' => true,
            'show_alpha' => true,
            'preview'    => array(
                'type'     => 'css',
                'selector' => '.' . $key . ':hover',
                'property' => 'background-color',
                'important' => true
            )
        ];
    }

    static public function typography($key = '')
    {
        return [
            'type' => 'typography',
            'label' => 'Typography',
            'responsive' => true,
            'preview'    => array(
                'type'     => 'css',
                'selector' => '.' . $key,
            )
        ];
    }

    static public function border($key = '')
    {
        return [
            'type'       => 'border',
            'label'      => __('Border', 'sitepilot'),
            'responsive' => true,
            'preview'    => array(
                'type'     => 'css',
                'selector' => '.' . $key,
            )
        ];
    }

    static public function margin($key = '')
    {
        return [
            'type'       => 'dimension',
            'label'      => __('Margin', 'sitepilot'),
            'responsive' => true,
            'units'      => array('rem', 'px'),
            'preview'    => array(
                'type'     => 'css',
                'selector' => '.' . $key,
                'property' => 'margin'
            )
        ];
    }

    static public function padding($key = '')
    {
        return [
            'type'       => 'dimension',
            'label'      => __('Padding', 'sitepilot'),
            'responsive' => true,
            'units'      => array('rem', 'px'),
            'preview'    => array(
                'type'     => 'css',
                'selector' => '.' . $key,
                'property' => 'padding'
            )
        ];
    }

    static public function height()
    {
        return [
            'type' => 'select',
            'label' => __('Height', 'sitepilot'),
            'options' => [
                'default' => 'Default',
                'h-0' => '0',
                'h-1' => '1',
                'h-2' => '2',
                'h-3' => '3',
                'h-4' => '4',
                'h-5' => '5',
                'h-6' => '6',
                'h-8' => '7',
                'h-10' => '10',
                'h-12' => '12',
                'h-16' => '16',
                'h-20' => '20',
                'h-24' => '24',
                'h-32' => '32',
                'h-40' => '40',
                'h-48' => '48',
                'h-56' => '56',
                'h-64' => '64'
            ],
            'option_classes' => [
                'md' => [
                    'h-0' => 'md:h-0',
                    'h-1' => 'md:h-1',
                    'h-2' => 'md:h-2',
                    'h-3' => 'md:h-3',
                    'h-4' => 'md:h-4',
                    'h-5' => 'md:h-5',
                    'h-6' => 'md:h-6',
                    'h-8' => 'md:h-7',
                    'h-10' => 'md:h-10',
                    'h-12' => 'md:h-12',
                    'h-16' => 'md:h-16',
                    'h-20' => 'md:h-20',
                    'h-24' => 'md:h-24',
                    'h-32' => 'md:h-32',
                    'h-40' => 'md:h-40',
                    'h-48' => 'md:h-48',
                    'h-56' => 'md:h-56',
                    'h-64' => 'md:h-64'
                ],
                'lg' => [
                    'h-0' => 'lg:h-0',
                    'h-1' => 'lg:h-1',
                    'h-2' => 'lg:h-2',
                    'h-3' => 'lg:h-3',
                    'h-4' => 'lg:h-4',
                    'h-5' => 'lg:h-5',
                    'h-6' => 'lg:h-6',
                    'h-8' => 'lg:h-7',
                    'h-10' => 'lg:h-10',
                    'h-12' => 'lg:h-12',
                    'h-16' => 'lg:h-16',
                    'h-20' => 'lg:h-20',
                    'h-24' => 'lg:h-24',
                    'h-32' => 'lg:h-32',
                    'h-40' => 'lg:h-40',
                    'h-48' => 'lg:h-48',
                    'h-56' => 'lg:h-56',
                    'h-64' => 'lg:h-64'
                ],
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => 'default'
        ];
    }

    static public function width()
    {
        return [
            'type' => 'select',
            'label' => __('Width', 'sitepilot'),
            'options' => [
                'default' => 'Default',
                'w-0' => '0',
                'w-1' => '1',
                'w-2' => '2',
                'w-3' => '3',
                'w-4' => '4',
                'w-5' => '5',
                'w-6' => '6',
                'w-8' => '8',
                'w-10' => '10',
                'w-12' => '12',
                'w-16' => '16',
                'w-20' => '20',
                'w-24' => '24',
                'w-32' => '32',
                'w-40' => '40',
                'w-48' => '48',
                'w-56' => '56',
                'w-64' => '64'
            ],
            'option_classes' => [
                'md' => [
                    'w-0' => 'md:w-0',
                    'w-1' => 'md:w-1',
                    'w-2' => 'md:w-2',
                    'w-3' => 'md:w-3',
                    'w-4' => 'md:w-4',
                    'w-5' => 'md:w-5',
                    'w-6' => 'md:w-6',
                    'w-8' => 'md:w-8',
                    'w-10' => 'md:w-10',
                    'w-12' => 'md:w-12',
                    'w-16' => 'md:w-16',
                    'w-20' => 'md:w-20',
                    'w-24' => 'md:w-24',
                    'w-32' => 'md:w-32',
                    'w-40' => 'md:w-40',
                    'w-48' => 'md:w-48',
                    'w-56' => 'md:w-56',
                    'w-64' => 'md:w-64'
                ],
                'lg' => [
                    'w-0' => 'lg:w-0',
                    'w-1' => 'lg:w-1',
                    'w-2' => 'lg:w-2',
                    'w-3' => 'lg:w-3',
                    'w-4' => 'lg:w-4',
                    'w-5' => 'lg:w-5',
                    'w-6' => 'lg:w-6',
                    'w-8' => 'lg:w-8',
                    'w-10' => 'lg:w-10',
                    'w-12' => 'lg:w-12',
                    'w-16' => 'lg:w-16',
                    'w-20' => 'lg:w-20',
                    'w-24' => 'lg:w-24',
                    'w-32' => 'lg:w-32',
                    'w-40' => 'lg:w-40',
                    'w-48' => 'lg:w-48',
                    'w-56' => 'lg:w-56',
                    'w-64' => 'lg:w-64'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => 'default'
        ];
    }

    static public function grid_cols()
    {
        return [
            'type' => 'select',
            'label' => __('Columns', 'sitepilot'),
            'options' => [
                'default' => 'Default',
                'grid-cols-1' => '1 Column',
                'grid-cols-2' => '2 Columns',
                'grid-cols-3' => '3 Columns',
                'grid-cols-4' => '4 Columns',
                'grid-cols-5' => '5 Columns',
                'grid-cols-6' => '6 Columns',
                'grid-cols-7' => '7 Columns',
                'grid-cols-8' => '8 Columns',
                'grid-cols-10' => '10 Columns',
                'grid-cols-11' => '11 Columns',
                'grid-cols-12' => '12 Columns'
            ],
            'option_classes' => [
                'md' => [
                    'grid-cols-1' => 'md:grid-cols-1',
                    'grid-cols-2' => 'md:grid-cols-2',
                    'grid-cols-3' => 'md:grid-cols-3',
                    'grid-cols-4' => 'md:grid-cols-4',
                    'grid-cols-5' => 'md:grid-cols-5',
                    'grid-cols-6' => 'md:grid-cols-6',
                    'grid-cols-7' => 'md:grid-cols-7',
                    'grid-cols-8' => 'md:grid-cols-8',
                    'grid-cols-9' => 'md:grid-cols-9',
                    'grid-cols-10' => 'md:grid-cols-10',
                    'grid-cols-11' => 'md:grid-cols-11',
                    'grid-cols-12' => 'md:grid-cols-12'
                ],
                'lg' => [
                    'grid-cols-1' => 'lg:grid-cols-1',
                    'grid-cols-2' => 'lg:grid-cols-2',
                    'grid-cols-3' => 'lg:grid-cols-3',
                    'grid-cols-4' => 'lg:grid-cols-4',
                    'grid-cols-5' => 'lg:grid-cols-5',
                    'grid-cols-6' => 'lg:grid-cols-6',
                    'grid-cols-7' => 'lg:grid-cols-7',
                    'grid-cols-8' => 'lg:grid-cols-8',
                    'grid-cols-9' => 'lg:grid-cols-9',
                    'grid-cols-10' => 'lg:grid-cols-10',
                    'grid-cols-11' => 'lg:grid-cols-11',
                    'grid-cols-12' => 'lg:grid-cols-12'
                ]
            ],
            'responsive' => true,
            'partial_refresh' => true,
            'default' => 'default'
        ];
    }

    static public function grid_gap_x()
    {
        return [
            'type' => 'select',
            'label' => __('Gap X', 'sitepilot'),
            'options' => [
                'default' => 'Default',
                'gap-x-0' => '0',
                'gap-x-1' => '1',
                'gap-x-2' => '2',
                'gap-x-3' => '3',
                'gap-x-4' => '4',
                'gap-x-5' => '5',
                'gap-x-6' => '6',
                'gap-x-8' => '8',
                'gap-x-10' => '10',
                'gap-x-11' => '11',
                'gap-x-12' => '12',
                'gap-x-16' => '16',
                'gap-x-20' => '20',
                'gap-x-24' => '24',
                'gap-x-32' => '32',
                'gap-x-40' => '40',
                'gap-x-48' => '48',
                'gap-x-56' => '56',
                'gap-x-64' => '64'
            ],
            'option_classes' => [
                'md' => [
                    'gap-x-0' => 'md:gap-x-0',
                    'gap-x-1' => 'md:gap-x-1',
                    'gap-x-2' => 'md:gap-x-2',
                    'gap-x-3' => 'md:gap-x-3',
                    'gap-x-4' => 'md:gap-x-4',
                    'gap-x-5' => 'md:gap-x-5',
                    'gap-x-6' => 'md:gap-x-6',
                    'gap-x-8' => 'md:gap-x-8',
                    'gap-x-10' => 'md:gap-x-10',
                    'gap-x-11' => 'md:gap-x-11',
                    'gap-x-12' => 'md:gap-x-12',
                    'gap-x-16' => 'md:gap-x-16',
                    'gap-x-20' => 'md:gap-x-20',
                    'gap-x-24' => 'md:gap-x-24',
                    'gap-x-32' => 'md:gap-x-32',
                    'gap-x-40' => 'md:gap-x-40',
                    'gap-x-48' => 'md:gap-x-48',
                    'gap-x-56' => 'md:gap-x-56',
                    'gap-x-64' => 'md:gap-x-64'
                ],
                'lg' => [
                    'gap-x-0' => 'lg:gap-x-0',
                    'gap-x-1' => 'lg:gap-x-1',
                    'gap-x-2' => 'lg:gap-x-2',
                    'gap-x-3' => 'lg:gap-x-3',
                    'gap-x-4' => 'lg:gap-x-4',
                    'gap-x-5' => 'lg:gap-x-5',
                    'gap-x-6' => 'lg:gap-x-6',
                    'gap-x-8' => 'lg:gap-x-8',
                    'gap-x-10' => 'lg:gap-x-10',
                    'gap-x-11' => 'lg:gap-x-11',
                    'gap-x-12' => 'lg:gap-x-12',
                    'gap-x-16' => 'lg:gap-x-16',
                    'gap-x-20' => 'lg:gap-x-20',
                    'gap-x-24' => 'lg:gap-x-24',
                    'gap-x-32' => 'lg:gap-x-32',
                    'gap-x-40' => 'lg:gap-x-40',
                    'gap-x-48' => 'lg:gap-x-48',
                    'gap-x-56' => 'lg:gap-x-56',
                    'gap-x-64' => 'lg:gap-x-64'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => 'default'
        ];
    }

    static public function grid_gap_y()
    {
        return [
            'type' => 'select',
            'label' => __('Gap Y', 'sitepilot'),
            'options' => [
                'default' => 'Default',
                'gap-y-0' => '0',
                'gap-y-1' => '1',
                'gap-y-2' => '2',
                'gap-y-3' => '3',
                'gap-y-4' => '4',
                'gap-y-5' => '5',
                'gap-y-6' => '6',
                'gap-y-8' => '8',
                'gap-y-10' => '10',
                'gap-y-11' => '11',
                'gap-y-12' => '12',
                'gap-y-16' => '16',
                'gap-y-20' => '20',
                'gap-y-24' => '24',
                'gap-y-32' => '32',
                'gap-y-40' => '40',
                'gap-y-48' => '48',
                'gap-y-56' => '56',
                'gap-y-64' => '64'
            ],
            'option_classes' => [
                'md' => [
                    'gap-y-0' => 'md:gap-y-0',
                    'gap-y-1' => 'md:gap-y-1',
                    'gap-y-2' => 'md:gap-y-2',
                    'gap-y-3' => 'md:gap-y-3',
                    'gap-y-4' => 'md:gap-y-4',
                    'gap-y-5' => 'md:gap-y-5',
                    'gap-y-6' => 'md:gap-y-6',
                    'gap-y-8' => 'md:gap-y-8',
                    'gap-y-10' => 'md:gap-y-10',
                    'gap-y-11' => 'md:gap-y-11',
                    'gap-y-12' => 'md:gap-y-12',
                    'gap-y-16' => 'md:gap-y-16',
                    'gap-y-20' => 'md:gap-y-20',
                    'gap-y-24' => 'md:gap-y-24',
                    'gap-y-32' => 'md:gap-y-32',
                    'gap-y-40' => 'md:gap-y-40',
                    'gap-y-48' => 'md:gap-y-48',
                    'gap-y-56' => 'md:gap-y-56',
                    'gap-y-64' => 'md:gap-y-64'
                ],
                'lg' => [
                    'gap-y-0' => 'lg:gap-y-0',
                    'gap-y-1' => 'lg:gap-y-1',
                    'gap-y-2' => 'lg:gap-y-2',
                    'gap-y-3' => 'lg:gap-y-3',
                    'gap-y-4' => 'lg:gap-y-4',
                    'gap-y-5' => 'lg:gap-y-5',
                    'gap-y-6' => 'lg:gap-y-6',
                    'gap-y-8' => 'lg:gap-y-8',
                    'gap-y-10' => 'lg:gap-y-10',
                    'gap-y-11' => 'lg:gap-y-11',
                    'gap-y-12' => 'lg:gap-y-12',
                    'gap-y-16' => 'lg:gap-y-16',
                    'gap-y-20' => 'lg:gap-y-20',
                    'gap-y-24' => 'lg:gap-y-24',
                    'gap-y-32' => 'lg:gap-y-32',
                    'gap-y-40' => 'lg:gap-y-40',
                    'gap-y-48' => 'lg:gap-y-48',
                    'gap-y-56' => 'lg:gap-y-56',
                    'gap-y-64' => 'lg:gap-y-64'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => 'default'
        ];
    }

    static public function scale()
    {
        return [
            'type' => 'select',
            'label' => __('Scale', 'sitepilot'),
            'options' => [
                'default' => 'Default',
                'scale-0' => '0%',
                'scale-50' => '50%',
                'scale-75' => '75%',
                'scale-100' => '100%',
                'scale-105' => '105%',
                'scale-110' => '110%',
                'scale-125' => '125%',
                'scale-150' => '150%'
            ],
            'option_classes' => [
                'md' => [
                    'scale-0' => 'md:scale-0',
                    'scale-50' => 'md:scale-50',
                    'scale-75' => 'md:scale-75',
                    'scale-100' => 'md:scale-100',
                    'scale-105' => 'md:scale-105',
                    'scale-110' => 'md:scale-110',
                    'scale-125' => 'md:scale-125',
                    'scale-150' => 'md:scale-150'
                ],
                'lg' => [
                    'scale-0' => 'lg:scale-0',
                    'scale-50' => 'lg:scale-50',
                    'scale-75' => 'lg:scale-75',
                    'scale-100' => 'lg:scale-100',
                    'scale-105' => 'lg:scale-105',
                    'scale-110' => 'lg:scale-110',
                    'scale-125' => 'lg:scale-125',
                    'scale-150' => 'lg:scale-150'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => 'default'
        ];
    }

    static public function hover_scale()
    {
        return [
            'type' => 'select',
            'label' => __('Hover Scale', 'sitepilot'),
            'options' => [
                'default' => 'Default',
                'hover:scale-0' => '0%',
                'hover:scale-50' => '50%',
                'hover:scale-75' => '75%',
                'hover:scale-100' => '100%',
                'hover:scale-105' => '105%',
                'hover:scale-110' => '110%',
                'hover:scale-125' => '125%',
                'hover:scale-150' => '150%'
            ],
            'responsive'  => false,
            'partial_refresh' => true,
            'default' => 'default'
        ];
    }
}
