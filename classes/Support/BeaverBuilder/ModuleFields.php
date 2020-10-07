<?php

namespace Sitepilot\Support\BeaverBuilder;

class ModuleFields
{
    static public function default_value($default)
    {
        return (is_array($default) ? end($default) : $default);
    }

    static public function color()
    {
        return [
            'type' => 'color',
            'label' => __('Color', 'sitepilot'),
            'show_reset' => true
        ];
    }

    static public function hover_color()
    {
        return [
            'type' => 'color',
            'label' => __('Hover Color', 'sitepilot'),
            'show_reset' => true
        ];
    }

    static public function bg_color()
    {
        return [
            'type' => 'color',
            'label' => __('Background Color', 'sitepilot'),
            'show_reset' => true
        ];
    }

    static public function hover_bg_color()
    {
        return [
            'type' => 'color',
            'label' => __('Hover Background Color', 'sitepilot'),
            'show_reset' => true
        ];
    }

    static public function typography()
    {
        return [
            'type' => 'typography',
            'label' => 'Typography',
            'responsive' => true
        ];
    }

    static public function font_size($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Font Size', 'sitepilot'),
            'options' => [
                'text-xs' => 'Extra Small',
                'text-sm' => 'Small',
                'text-base' => 'Normal',
                'text-lg' => 'Large',
                'text-xl' => 'Extra Large',
                'text-2xl' => 'Extra Large X2',
                'text-3xl' => 'Extra Large X3',
                'text-4xl' => 'Extra Large X4',
                'text-5xl' => 'Extra Large X5',
                'text-6xl' => 'Extra Large X6'
            ],
            'option_classes' => [
                'md' => [
                    'text-xs' => 'md:text-xs',
                    'text-sm' => 'md:text-sm',
                    'text-base' => 'md:text-base',
                    'text-lg' => 'md:text-lg',
                    'text-xl' => 'md:text-xl',
                    'text-2xl' => 'md:text-2xl',
                    'text-3xl' => 'md:text-3xl',
                    'text-4xl' => 'md:text-4xl',
                    'text-5xl' => 'md:text-5xl',
                    'text-6xl' => 'md:text-6xl'
                ],
                'lg' => [
                    'text-xs' => 'lg:text-xs',
                    'text-sm' => 'lg:text-sm',
                    'text-base' => 'lg:text-base',
                    'text-lg' => 'lg:text-lg',
                    'text-xl' => 'lg:text-xl',
                    'text-2xl' => 'lg:text-2xl',
                    'text-3xl' => 'lg:text-3xl',
                    'text-4xl' => 'lg:text-4xl',
                    'text-5xl' => 'lg:text-5xl',
                    'text-6xl' => 'lg:text-6xl'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function height($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Height', 'sitepilot'),
            'options' => [
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
            'default' => self::default_value($default)
        ];
    }

    static public function width($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Width', 'sitepilot'),
            'options' => [
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
            'default' => self::default_value($default)
        ];
    }

    static public function border_radius($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Border Radius', 'sitepilot'),
            'options' => [
                'rounded-none' => 'None',
                'rounded-sm' => 'Small',
                'rounded' => 'Normal',
                'rounded-md' => 'Medium',
                'rounded-lg' => 'Large',
                'rounded-full' => 'Full',
                'rounded-t' => 'Top Normal',
                'rounded-t-md' => 'Top Medium',
                'rounded-t-lg' => 'Top Large',
                'rounded-t-full' => 'Top Full',
                'rounded-b' => 'Bottom Normal',
                'rounded-b-md' => 'Bottom Medium',
                'rounded-b-lg' => 'Bottom Large',
                'rounded-b-full' => 'Bottom Full'
            ],
            'option_classes' => [
                'md' => [
                    'rounded-none' => 'md:rounded-none',
                    'rounded-sm' => 'md:rounded-sm',
                    'rounded' => 'md:rounded',
                    'rounded-md' => 'md:rounded-md',
                    'rounded-lg' => 'md:rounded-lg',
                    'rounded-full' => 'md:rounded-full',
                    'rounded-t' => 'md:rounded-t',
                    'rounded-t-md' => 'md:rounded-t-md',
                    'rounded-t-lg' => 'md:rounded-t-lg',
                    'rounded-t-full' => 'md:rounded-t-full',
                    'rounded-b' => 'md:rounded-b',
                    'rounded-b-md' => 'md:rounded-b-md',
                    'rounded-b-lg' => 'md:rounded-b-lg',
                    'rounded-b-full' => 'md:rounded-b-full'
                ],
                'lg' => [
                    'rounded-none' => 'lg:rounded-none',
                    'rounded-sm' => 'lg:rounded-sm',
                    'rounded' => 'lg:rounded',
                    'rounded-md' => 'lg:rounded-md',
                    'rounded-lg' => 'lg:rounded-lg',
                    'rounded-full' => 'lg:rounded-full',
                    'rounded-t' => 'lg:rounded-t',
                    'rounded-t-md' => 'lg:rounded-t-md',
                    'rounded-t-lg' => 'lg:rounded-t-lg',
                    'rounded-t-full' => 'lg:rounded-t-full',
                    'rounded-b' => 'lg:rounded-b',
                    'rounded-b-md' => 'lg:rounded-b-md',
                    'rounded-b-lg' => 'lg:rounded-b-lg',
                    'rounded-b-full' => 'lg:rounded-b-full'
                ],
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function shadow($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Shadow', 'sitepilot'),
            'options' => [
                'shadow-xs' => 'Extra Small',
                'shadow-sm' => 'Small',
                'shadow-md' => 'Medium',
                'shadow-lg' => 'Large',
                'shadow-xl' => 'Extra Large',
                'shadow-2xl' => 'Extra Large X2'
            ],
            'option_classes' => [
                'md' => [
                    'shadow-xs' => 'md:shadow-xs',
                    'shadow-sm' => 'md:shadow-sm',
                    'shadow-md' => 'md:shadow-md',
                    'shadow-lg' => 'md:shadow-lg',
                    'shadow-xl' => 'md:shadow-xl',
                    'shadow-2xl' => 'md:shadow-2xl'
                ],
                'lg' => [
                    'shadow-xs' => 'lg:shadow-xs',
                    'shadow-sm' => 'lg:shadow-sm',
                    'shadow-md' => 'lg:shadow-md',
                    'shadow-lg' => 'lg:shadow-lg',
                    'shadow-xl' => 'lg:shadow-xl',
                    'shadow-2xl' => 'lg:shadow-2xl'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function grid_cols($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Columns', 'sitepilot'),
            'options' => [
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
            'default' => self::default_value($default)
        ];
    }

    static public function font_weight($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Font Weight', 'sitepilot'),
            'options' => [
                'font-hairline' => 'Hairline',
                'font-thin' => 'Thin',
                'font-light' => 'Light',
                'font-normal' => 'Normal',
                'font-medium' => 'Medium',
                'font-semibold' => 'Semi Bold',
                'font-bold' => 'Bold',
                'font-extrabold' => 'Extra Bold',
                'font-black' => 'Black'
            ],
            'option_classes' => [
                'md' => [
                    'font-hairline' => 'md:font-hairline',
                    'font-thin' => 'md:font-thin',
                    'font-light' => 'md:font-light',
                    'font-normal' => 'md:font-normal',
                    'font-medium' => 'md:font-medium',
                    'font-semibold' => 'md:font-semibold',
                    'font-bold' => 'md:font-bold',
                    'font-extrabold' => 'md:font-extrabold',
                    'font-black' => 'md:font-black'
                ],
                'lg' => [
                    'font-hairline' => 'lg:font-hairline',
                    'font-thin' => 'lg:font-thin',
                    'font-light' => 'lg:font-light',
                    'font-normal' => 'lg:font-normal',
                    'font-medium' => 'lg:font-medium',
                    'font-semibold' => 'lg:font-semibold',
                    'font-bold' => 'lg:font-bold',
                    'font-extrabold' => 'lg:font-extrabold',
                    'font-black' => 'lg:font-black'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function text_transform($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Text Transform', 'sitepilot'),
            'options' => [
                'uppercase' => 'Uppercase',
                'lowercase' => 'Lowercase',
                'capitalize' => 'Capitalize',
                'normal-case' => 'Normal'
            ],
            'option_classes' => [
                'md' => [
                    'uppercase' => 'md:uppercase',
                    'lowercase' => 'md:lowercase',
                    'capitalize' => 'md:capitalize',
                    'normal-case' => 'md:normal-case'
                ],
                'lg' => [
                    'uppercase' => 'lg:uppercase',
                    'lowercase' => 'lg:lowercase',
                    'capitalize' => 'lg:capitalize',
                    'normal-case' => 'lg:normal-case'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function text_alignment($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Text Alignment', 'sitepilot'),
            'options' => [
                'text-left' => 'Left',
                'text-center' => 'Center',
                'text-right' => 'Right',
                'text-justify' => 'Justify'
            ],
            'option_classes' => [
                'md' => [
                    'text-left' => 'md:text-left',
                    'text-center' => 'md:text-center',
                    'text-right' => 'md:text-right',
                    'text-justify' => 'md:text-justify'
                ],
                'lg' => [
                    'text-left' => 'lg:text-left',
                    'text-center' => 'lg:text-center',
                    'text-right' => 'lg:text-right',
                    'text-justify' => 'lg:text-justify'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function line_height($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Line Height', 'sitepilot'),
            'options' => [
                'leading-none' => 'None',
                'leading-3' => '3',
                'leading-4' => '4',
                'leading-5' => '5',
                'leading-6' => '6',
                'leading-7' => '7',
                'leading-8' => '8',
                'leading-9' => '9',
                'leading-10' => '10'
            ],
            'option_classes' => [
                'md' => [
                    'leading-none' => 'md:leading-none',
                    'leading-3' => 'md:leading-3',
                    'leading-4' => 'md:leading-4',
                    'leading-5' => 'md:leading-5',
                    'leading-6' => 'md:leading-6',
                    'leading-7' => 'md:leading-7',
                    'leading-8' => 'md:leading-8',
                    'leading-9' => 'md:leading-9',
                    'leading-10' => 'md:leading-10'
                ],
                'lg' => [
                    'leading-none' => 'lg:leading-none',
                    'leading-3' => 'lg:leading-3',
                    'leading-4' => 'lg:leading-4',
                    'leading-5' => 'lg:leading-5',
                    'leading-6' => 'lg:leading-6',
                    'leading-7' => 'lg:leading-7',
                    'leading-8' => 'lg:leading-8',
                    'leading-9' => 'lg:leading-9',
                    'leading-10' => 'lg:leading-10'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function grid_gap_x($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Gap X', 'sitepilot'),
            'options' => [
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
            'default' => self::default_value($default)
        ];
    }

    static public function grid_gap_y($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Gap Y', 'sitepilot'),
            'options' => [
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
            'default' => self::default_value($default)
        ];
    }

    static public function margin_left($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Margin Left', 'sitepilot'),
            'options' => [
                'ml-0' => '0',
                'ml-1' => '1',
                'ml-2' => '2',
                'ml-3' => '3',
                'ml-4' => '4',
                'ml-5' => '5',
                'ml-6' => '6',
                'ml-8' => '8',
                'ml-10' => '10',
                'ml-11' => '11',
                'ml-12' => '12',
                'ml-16' => '16',
                'ml-20' => '20',
                'ml-24' => '24',
                'ml-32' => '32',
                'ml-40' => '40',
                'ml-48' => '48',
                'ml-56' => '56',
                'ml-64' => '64'
            ],
            'option_classes' => [
                'md' => [
                    'ml-0' => 'md:ml-0',
                    'ml-1' => 'md:ml-1',
                    'ml-2' => 'md:ml-2',
                    'ml-3' => 'md:ml-3',
                    'ml-4' => 'md:ml-4',
                    'ml-5' => 'md:ml-5',
                    'ml-6' => 'md:ml-6',
                    'ml-8' => 'md:ml-8',
                    'ml-10' => 'md:ml-10',
                    'ml-11' => 'md:ml-11',
                    'ml-12' => 'md:ml-12',
                    'ml-16' => 'md:ml-16',
                    'ml-20' => 'md:ml-20',
                    'ml-24' => 'md:ml-24',
                    'ml-32' => 'md:ml-32',
                    'ml-40' => 'md:ml-40',
                    'ml-48' => 'md:ml-48',
                    'ml-56' => 'md:ml-56',
                    'ml-64' => 'md:ml-64'
                ],
                'lg' => [
                    'ml-0' => 'lg:ml-0',
                    'ml-1' => 'lg:ml-1',
                    'ml-2' => 'lg:ml-2',
                    'ml-3' => 'lg:ml-3',
                    'ml-4' => 'lg:ml-4',
                    'ml-5' => 'lg:ml-5',
                    'ml-6' => 'lg:ml-6',
                    'ml-8' => 'lg:ml-8',
                    'ml-10' => 'lg:ml-10',
                    'ml-11' => 'lg:ml-11',
                    'ml-12' => 'lg:ml-12',
                    'ml-16' => 'lg:ml-16',
                    'ml-20' => 'lg:ml-20',
                    'ml-24' => 'lg:ml-24',
                    'ml-32' => 'lg:ml-32',
                    'ml-40' => 'lg:ml-40',
                    'ml-48' => 'lg:ml-48',
                    'ml-56' => 'lg:ml-56',
                    'ml-64' => 'lg:ml-64'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function margin_top($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Margin Top', 'sitepilot'),
            'options' => [
                'mt-0' => '0',
                'mt-1' => '1',
                'mt-2' => '2',
                'mt-3' => '3',
                'mt-4' => '4',
                'mt-5' => '5',
                'mt-6' => '6',
                'mt-8' => '8',
                'mt-10' => '10',
                'mt-11' => '11',
                'mt-12' => '12',
                'mt-16' => '16',
                'mt-20' => '20',
                'mt-24' => '24',
                'mt-32' => '32',
                'mt-40' => '40',
                'mt-48' => '48',
                'mt-56' => '56',
                'mt-64' => '64'
            ],
            'option_classes' => [
                'md' => [
                    'mt-0' => 'md:mt-0',
                    'mt-1' => 'md:mt-1',
                    'mt-2' => 'md:mt-2',
                    'mt-3' => 'md:mt-3',
                    'mt-4' => 'md:mt-4',
                    'mt-5' => 'md:mt-5',
                    'mt-6' => 'md:mt-6',
                    'mt-8' => 'md:mt-8',
                    'mt-10' => 'md:mt-10',
                    'mt-11' => 'md:mt-11',
                    'mt-12' => 'md:mt-12',
                    'mt-16' => 'md:mt-16',
                    'mt-20' => 'md:mt-20',
                    'mt-24' => 'md:mt-24',
                    'mt-32' => 'md:mt-32',
                    'mt-40' => 'md:mt-40',
                    'mt-48' => 'md:mt-48',
                    'mt-56' => 'md:mt-56',
                    'mt-64' => 'md:mt-64'
                ],
                'lg' => [
                    'mt-0' => 'lg:mt-0',
                    'mt-1' => 'lg:mt-1',
                    'mt-2' => 'lg:mt-2',
                    'mt-3' => 'lg:mt-3',
                    'mt-4' => 'lg:mt-4',
                    'mt-5' => 'lg:mt-5',
                    'mt-6' => 'lg:mt-6',
                    'mt-8' => 'lg:mt-8',
                    'mt-10' => 'lg:mt-10',
                    'mt-11' => 'lg:mt-11',
                    'mt-12' => 'lg:mt-12',
                    'mt-16' => 'lg:mt-16',
                    'mt-20' => 'lg:mt-20',
                    'mt-24' => 'lg:mt-24',
                    'mt-32' => 'lg:mt-32',
                    'mt-40' => 'lg:mt-40',
                    'mt-48' => 'lg:mt-48',
                    'mt-56' => 'lg:mt-56',
                    'mt-64' => 'lg:mt-64'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function margin_right($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Margin Right', 'sitepilot'),
            'options' => [
                'mr-0' => '0',
                'mr-1' => '1',
                'mr-2' => '2',
                'mr-3' => '3',
                'mr-4' => '4',
                'mr-5' => '5',
                'mr-6' => '6',
                'mr-8' => '8',
                'mr-10' => '10',
                'mr-11' => '11',
                'mr-12' => '12',
                'mr-16' => '16',
                'mr-20' => '20',
                'mr-24' => '24',
                'mr-32' => '32',
                'mr-40' => '40',
                'mr-48' => '48',
                'mr-56' => '56',
                'mr-64' => '64'
            ],
            'option_classes' => [
                'md' => [
                    'mr-0' => 'md:mr-0',
                    'mr-1' => 'md:mr-1',
                    'mr-2' => 'md:mr-2',
                    'mr-3' => 'md:mr-3',
                    'mr-4' => 'md:mr-4',
                    'mr-5' => 'md:mr-5',
                    'mr-6' => 'md:mr-6',
                    'mr-8' => 'md:mr-8',
                    'mr-10' => 'md:mr-10',
                    'mr-11' => 'md:mr-11',
                    'mr-12' => 'md:mr-12',
                    'mr-16' => 'md:mr-16',
                    'mr-20' => 'md:mr-20',
                    'mr-24' => 'md:mr-24',
                    'mr-32' => 'md:mr-32',
                    'mr-40' => 'md:mr-40',
                    'mr-48' => 'md:mr-48',
                    'mr-56' => 'md:mr-56',
                    'mr-64' => 'md:mr-64'
                ],
                'lg' => [
                    'mr-0' => 'lg:mr-0',
                    'mr-1' => 'lg:mr-1',
                    'mr-2' => 'lg:mr-2',
                    'mr-3' => 'lg:mr-3',
                    'mr-4' => 'lg:mr-4',
                    'mr-5' => 'lg:mr-5',
                    'mr-6' => 'lg:mr-6',
                    'mr-8' => 'lg:mr-8',
                    'mr-10' => 'lg:mr-10',
                    'mr-11' => 'lg:mr-11',
                    'mr-12' => 'lg:mr-12',
                    'mr-16' => 'lg:mr-16',
                    'mr-20' => 'lg:mr-20',
                    'mr-24' => 'lg:mr-24',
                    'mr-32' => 'lg:mr-32',
                    'mr-40' => 'lg:mr-40',
                    'mr-48' => 'lg:mr-48',
                    'mr-56' => 'lg:mr-56',
                    'mr-64' => 'lg:mr-64'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function margin_bottom($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Margin Bottom', 'sitepilot'),
            'options' => [
                'mb-0' => '0',
                'mb-1' => '1',
                'mb-2' => '2',
                'mb-3' => '3',
                'mb-4' => '4',
                'mb-5' => '5',
                'mb-6' => '6',
                'mb-8' => '8',
                'mb-10' => '10',
                'mb-11' => '11',
                'mb-12' => '12',
                'mb-16' => '16',
                'mb-20' => '20',
                'mb-24' => '24',
                'mb-32' => '32',
                'mb-40' => '40',
                'mb-48' => '48',
                'mb-56' => '56',
                'mb-64' => '64'
            ],
            'option_classes' => [
                'md' => [
                    'mb-0' => 'md:mb-0',
                    'mb-1' => 'md:mb-1',
                    'mb-2' => 'md:mb-2',
                    'mb-3' => 'md:mb-3',
                    'mb-4' => 'md:mb-4',
                    'mb-5' => 'md:mb-5',
                    'mb-6' => 'md:mb-6',
                    'mb-8' => 'md:mb-8',
                    'mb-10' => 'md:mb-10',
                    'mb-11' => 'md:mb-11',
                    'mb-12' => 'md:mb-12',
                    'mb-16' => 'md:mb-16',
                    'mb-20' => 'md:mb-20',
                    'mb-24' => 'md:mb-24',
                    'mb-32' => 'md:mb-32',
                    'mb-40' => 'md:mb-40',
                    'mb-48' => 'md:mb-48',
                    'mb-56' => 'md:mb-56',
                    'mb-64' => 'md:mb-64'
                ],
                'lg' => [
                    'mb-0' => 'lg:mb-0',
                    'mb-1' => 'lg:mb-1',
                    'mb-2' => 'lg:mb-2',
                    'mb-3' => 'lg:mb-3',
                    'mb-4' => 'lg:mb-4',
                    'mb-5' => 'lg:mb-5',
                    'mb-6' => 'lg:mb-6',
                    'mb-8' => 'lg:mb-8',
                    'mb-10' => 'lg:mb-10',
                    'mb-11' => 'lg:mb-11',
                    'mb-12' => 'lg:mb-12',
                    'mb-16' => 'lg:mb-16',
                    'mb-20' => 'lg:mb-20',
                    'mb-24' => 'lg:mb-24',
                    'mb-32' => 'lg:mb-32',
                    'mb-40' => 'lg:mb-40',
                    'mb-48' => 'lg:mb-48',
                    'mb-56' => 'lg:mb-56',
                    'mb-64' => 'lg:mb-64'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function padding($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Padding', 'sitepilot'),
            'options' => [
                'p-0' => '0',
                'p-1' => '1',
                'p-2' => '2',
                'p-3' => '3',
                'p-4' => '4',
                'p-5' => '5',
                'p-6' => '6',
                'p-8' => '8',
                'p-10' => '10',
                'p-11' => '11',
                'p-12' => '12',
                'p-16' => '16',
                'p-20' => '20',
                'p-24' => '24',
                'p-32' => '32',
                'p-40' => '40',
                'p-48' => '48',
                'p-56' => '56',
                'p-64' => '64'
            ],
            'option_classes' => [
                'md' => [
                    'p-0' => 'md:p-0',
                    'p-1' => 'md:p-1',
                    'p-2' => 'md:p-2',
                    'p-3' => 'md:p-3',
                    'p-4' => 'md:p-4',
                    'p-5' => 'md:p-5',
                    'p-6' => 'md:p-6',
                    'p-8' => 'md:p-8',
                    'p-10' => 'md:p-10',
                    'p-11' => 'md:p-11',
                    'p-12' => 'md:p-12',
                    'p-16' => 'md:p-16',
                    'p-20' => 'md:p-20',
                    'p-24' => 'md:p-24',
                    'p-32' => 'md:p-32',
                    'p-40' => 'md:p-40',
                    'p-48' => 'md:p-48',
                    'p-56' => 'md:p-56',
                    'p-64' => 'md:p-64'
                ],
                'lg' => [
                    'p-0' => 'lg:p-0',
                    'p-1' => 'lg:p-1',
                    'p-2' => 'lg:p-2',
                    'p-3' => 'lg:p-3',
                    'p-4' => 'lg:p-4',
                    'p-5' => 'lg:p-5',
                    'p-6' => 'lg:p-6',
                    'p-8' => 'lg:p-8',
                    'p-10' => 'lg:p-10',
                    'p-11' => 'lg:p-11',
                    'p-12' => 'lg:p-12',
                    'p-16' => 'lg:p-16',
                    'p-20' => 'lg:p-20',
                    'p-24' => 'lg:p-24',
                    'p-32' => 'lg:p-32',
                    'p-40' => 'lg:p-40',
                    'p-48' => 'lg:p-48',
                    'p-56' => 'lg:p-56',
                    'p-64' => 'lg:p-64'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function padding_y($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Padding Y', 'sitepilot'),
            'options' => [
                'py-0' => '0',
                'py-1' => '1',
                'py-2' => '2',
                'py-3' => '3',
                'py-4' => '4',
                'py-5' => '5',
                'py-6' => '6',
                'py-8' => '8',
                'py-10' => '10',
                'py-11' => '11',
                'py-12' => '12',
                'py-16' => '16',
                'py-20' => '20',
                'py-24' => '24',
                'py-32' => '32',
                'py-40' => '40',
                'py-48' => '48',
                'py-56' => '56',
                'py-64' => '64'
            ],
            'option_classes' => [
                'md' => [
                    'py-0' => 'md:py-0',
                    'py-1' => 'md:py-1',
                    'py-2' => 'md:py-2',
                    'py-3' => 'md:py-3',
                    'py-4' => 'md:py-4',
                    'py-5' => 'md:py-5',
                    'py-6' => 'md:py-6',
                    'py-8' => 'md:py-8',
                    'py-10' => 'md:py-10',
                    'py-11' => 'md:py-11',
                    'py-12' => 'md:py-12',
                    'py-16' => 'md:py-16',
                    'py-20' => 'md:py-20',
                    'py-24' => 'md:py-24',
                    'py-32' => 'md:py-32',
                    'py-40' => 'md:py-40',
                    'py-48' => 'md:py-48',
                    'py-56' => 'md:py-56',
                    'py-64' => 'md:py-64'
                ],
                'lg' => [
                    'py-0' => 'lg:py-0',
                    'py-1' => 'lg:py-1',
                    'py-2' => 'lg:py-2',
                    'py-3' => 'lg:py-3',
                    'py-4' => 'lg:py-4',
                    'py-5' => 'lg:py-5',
                    'py-6' => 'lg:py-6',
                    'py-8' => 'lg:py-8',
                    'py-10' => 'lg:py-10',
                    'py-11' => 'lg:py-11',
                    'py-12' => 'lg:py-12',
                    'py-16' => 'lg:py-16',
                    'py-20' => 'lg:py-20',
                    'py-24' => 'lg:py-24',
                    'py-32' => 'lg:py-32',
                    'py-40' => 'lg:py-40',
                    'py-48' => 'lg:py-48',
                    'py-56' => 'lg:py-56',
                    'py-64' => 'lg:py-64'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function padding_top($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Padding Top', 'sitepilot'),
            'options' => [
                'pt-0' => '0',
                'pt-1' => '1',
                'pt-2' => '2',
                'pt-3' => '3',
                'pt-4' => '4',
                'pt-5' => '5',
                'pt-6' => '6',
                'pt-8' => '8',
                'pt-10' => '10',
                'pt-11' => '11',
                'pt-12' => '12',
                'pt-16' => '16',
                'pt-20' => '20',
                'pt-24' => '24',
                'pt-32' => '32',
                'pt-40' => '40',
                'pt-48' => '48',
                'pt-56' => '56',
                'pt-64' => '64'
            ],
            'option_classes' => [
                'md' => [
                    'pt-0' => 'md:pt-0',
                    'pt-1' => 'md:pt-1',
                    'pt-2' => 'md:pt-2',
                    'pt-3' => 'md:pt-3',
                    'pt-4' => 'md:pt-4',
                    'pt-5' => 'md:pt-5',
                    'pt-6' => 'md:pt-6',
                    'pt-8' => 'md:pt-8',
                    'pt-10' => 'md:pt-10',
                    'pt-11' => 'md:pt-11',
                    'pt-12' => 'md:pt-12',
                    'pt-16' => 'md:pt-16',
                    'pt-20' => 'md:pt-20',
                    'pt-24' => 'md:pt-24',
                    'pt-32' => 'md:pt-32',
                    'pt-40' => 'md:pt-40',
                    'pt-48' => 'md:pt-48',
                    'pt-56' => 'md:pt-56',
                    'pt-64' => 'md:pt-64'
                ],
                'lg' => [
                    'pt-0' => 'lg:pt-0',
                    'pt-1' => 'lg:pt-1',
                    'pt-2' => 'lg:pt-2',
                    'pt-3' => 'lg:pt-3',
                    'pt-4' => 'lg:pt-4',
                    'pt-5' => 'lg:pt-5',
                    'pt-6' => 'lg:pt-6',
                    'pt-8' => 'lg:pt-8',
                    'pt-10' => 'lg:pt-10',
                    'pt-11' => 'lg:pt-11',
                    'pt-12' => 'lg:pt-12',
                    'pt-16' => 'lg:pt-16',
                    'pt-20' => 'lg:pt-20',
                    'pt-24' => 'lg:pt-24',
                    'pt-32' => 'lg:pt-32',
                    'pt-40' => 'lg:pt-40',
                    'pt-48' => 'lg:pt-48',
                    'pt-56' => 'lg:pt-56',
                    'pt-64' => 'lg:pt-64'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function padding_bottom($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Padding Bottom', 'sitepilot'),
            'options' => [
                'pb-0' => '0',
                'pb-1' => '1',
                'pb-2' => '2',
                'pb-3' => '3',
                'pb-4' => '4',
                'pb-5' => '5',
                'pb-6' => '6',
                'pb-8' => '8',
                'pb-10' => '10',
                'pb-11' => '11',
                'pb-12' => '12',
                'pb-16' => '16',
                'pb-20' => '20',
                'pb-24' => '24',
                'pb-32' => '32',
                'pb-40' => '40',
                'pb-48' => '48',
                'pb-56' => '56',
                'pb-64' => '64'
            ],
            'option_classes' => [
                'md' => [
                    'pb-0' => 'md:pb-0',
                    'pb-1' => 'md:pb-1',
                    'pb-2' => 'md:pb-2',
                    'pb-3' => 'md:pb-3',
                    'pb-4' => 'md:pb-4',
                    'pb-5' => 'md:pb-5',
                    'pb-6' => 'md:pb-6',
                    'pb-8' => 'md:pb-8',
                    'pb-10' => 'md:pb-10',
                    'pb-11' => 'md:pb-11',
                    'pb-12' => 'md:pb-12',
                    'pb-16' => 'md:pb-16',
                    'pb-20' => 'md:pb-20',
                    'pb-24' => 'md:pb-24',
                    'pb-32' => 'md:pb-32',
                    'pb-40' => 'md:pb-40',
                    'pb-48' => 'md:pb-48',
                    'pb-56' => 'md:pb-56',
                    'pb-64' => 'md:pb-64'
                ],
                'lg' => [
                    'pb-0' => 'lg:pb-0',
                    'pb-1' => 'lg:pb-1',
                    'pb-2' => 'lg:pb-2',
                    'pb-3' => 'lg:pb-3',
                    'pb-4' => 'lg:pb-4',
                    'pb-5' => 'lg:pb-5',
                    'pb-6' => 'lg:pb-6',
                    'pb-8' => 'lg:pb-8',
                    'pb-10' => 'lg:pb-10',
                    'pb-11' => 'lg:pb-11',
                    'pb-12' => 'lg:pb-12',
                    'pb-16' => 'lg:pb-16',
                    'pb-20' => 'lg:pb-20',
                    'pb-24' => 'lg:pb-24',
                    'pb-32' => 'lg:pb-32',
                    'pb-40' => 'lg:pb-40',
                    'pb-48' => 'lg:pb-48',
                    'pb-56' => 'lg:pb-56',
                    'pb-64' => 'lg:pb-64'
                ]
            ],
            'responsive'  => true,
            'partial_refresh' => true,
            'default' => self::default_value($default)
        ];
    }

    static public function scale($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Scale', 'sitepilot'),
            'options' => [
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
            'default' => self::default_value($default)
        ];
    }

    static public function hover_scale($default = '')
    {
        return [
            'type' => 'select',
            'label' => __('Hover Scale', 'sitepilot'),
            'options' => [
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
            'default' => self::default_value($default)
        ];
    }
}
