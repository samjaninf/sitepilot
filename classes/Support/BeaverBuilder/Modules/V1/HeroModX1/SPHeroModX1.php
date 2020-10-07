<?php

namespace Sitepilot\Support\BeaverBuilder\Modules\V1\HeroModX1;

use FLBuilder;
use Sitepilot\Support\BeaverBuilder\Module;
use Sitepilot\Support\BeaverBuilder\ModuleProperties;

class SPHeroModX1 extends Module
{
    /**
     * Construct module.
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct([
            'name' => __('Hero X1', 'sitepilot'),
            'category' => __('Hero', 'sitepilot'),
            'description' => __('Sitepilot hero module.', 'sitepilot'),
            'group' => 'Sitepilot',
            'icon' => 'megaphone.svg',
            'editor_export' => true,
            'enabled' => true,
        ]);
    }

    /**
     * Initialize module.
     * 
     * @return void
     */
    public static function init()
    {
        add_filter('fl_builder_settings_form_defaults', function ($defaults, $form_type = null) {
            $class = substr(strrchr(__CLASS__, "\\"), 1);
            if ($form_type == $class . '-module') {
                $defaults = ModuleProperties::section_xl($defaults);
            }

            return $defaults;
        }, 10, 2);

        FLBuilder::register_module(__CLASS__, [
            'content' => array(
                'title' => __('Content', 'sitepilot'),
                'sections' => array(
                    'left' => array(
                        'title' => __('Left', 'sitepilot'),
                        'fields' => array(
                            'title_1' => array(
                                'type' => 'text',
                                'label' => __('Title 1', 'sitepilot'),
                                'default' => 'Ready to dive in?'
                            ),
                            'title_2' => array(
                                'type' => 'text',
                                'label' => __('Title 2', 'sitepilot'),
                                'default' => 'Start your free trial today.'
                            ),
                        )
                    ),
                    'right' => array(
                        'title' => __('Right', 'sitepilot'),
                        'fields' => array(
                            'card_title' => array(
                                'type' => 'text',
                                'label' => __('Card Title', 'sitepilot'),
                                'default' => 'Lorem ipsum dolor?'
                            ),
                            'card_content' => array(
                                'type' => 'textarea',
                                'label' => __('Card Content', 'sitepilot'),
                                'default' => 'Pellentesque egestas blandit laoreet. Aenean sit amet luctus elit, quis vulputate felis. Duis eget tellus eu turpis elementum blandit. Donec vestibulum, tortor sit amet efficitur gravida, elit elit gravida neque, vehicula elementum ipsum sapien sed ante. Fusce aliquam ex ut urna pretium aliquet eu in velit.'
                            ),
                        )
                    ),
                )
            ),
            'style' => self::sp_style_tab((new self)->sp_style_fields())
        ]);
    }

    /**
     * Enqueue required scripts and styles.
     * 
     * @return void
     */
    public function enqueue_scripts()
    {
        $this->add_css('sitepilot-modules-v1');
    }

    /**
     * Returns style fields.
     *
     * @return array
     */
    public function sp_style_fields()
    {
        return [
            'title_1' => [
                'title' => 'Title 1',
                'properties' => ModuleProperties::h5([
                    'color' => 'theme_600',
                    'margin_bottom' => 'mb-2'
                ])
            ],
            'title_2' => [
                'title' => 'Title 2',
                'properties' => ModuleProperties::h1()
            ],
            'card' => [
                'title' => 'Card',
                'properties' => ModuleProperties::card()
            ],
            'card_title' => [
                'title' => 'Card Title',
                'properties' => ModuleProperties::h3([
                    'color' => 'ffffff',
                    'bg_color' => 'theme_600',
                    'border_radius' => 'rounded-t-lg',
                    'padding' => 'p-4',
                ])
            ],
            'card_content' => [
                'title' => 'Card Content',
                'properties' => ModuleProperties::text_base([
                    'color' => 'gray_600',
                    'padding' => 'p-6'
                ])
            ]
        ];
    }
}
