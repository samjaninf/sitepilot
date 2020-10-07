<?php

namespace Sitepilot\Support\BeaverBuilder\Modules\V1\CardsModX1;

use FLBuilder;
use Sitepilot\Support\BeaverBuilder\Module;
use Sitepilot\Support\BeaverBuilder\ModuleProperties;

class SPCardsModX1 extends Module
{
    /**
     * Construct module.
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct([
            'name' => __('Cards X1', 'sitepilot'),
            'category' => __('Cards', 'sitepilot'),
            'description' => __('Sitepilot cards module.', 'sitepilot'),
            'group' => 'Sitepilot',
            'icon' => 'slides.svg',
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
                $defaults = ModuleProperties::section_md($defaults);
            }

            return $defaults;
        }, 10, 2);

        FLBuilder::register_module(__CLASS__, array(
            'content' => array(
                'title' => __('Content', 'sitepilot'),
                'sections' => array(
                    'intro' => array(
                        'title' => __('Intro', 'sitepilot'),
                        'fields' => array(
                            'title' => array(
                                'type' => 'text',
                                'label' => __('Title', 'sitepilot'),
                                'default' => 'Lorem ipsum dolor'
                            ),
                            'description' => array(
                                'type' => 'textarea',
                                'label' => __('Description', 'sitepilot'),
                                'default' => 'Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.'
                            ),
                        )
                    ),
                    'cards' => array(
                        'title' => __('Cards', 'sitepilot'),
                        'fields' => array(
                            'cards' => array(
                                'type' => 'form',
                                'label' => __('Card', 'sitepilot'),
                                'form' => 'sp_cards_mod_x1_cards_form',
                                'preview_text' => 'title',
                                'multiple' => true,
                            ),
                        )
                    )
                )
            ),
            'style' => self::sp_style_tab((new self)->sp_style_fields())
        ));

        FLBuilder::register_settings_form('sp_cards_mod_x1_cards_form', array(
            'title' => __('Add Card', 'sitepilot'),
            'tabs'  => array(
                'content' => array(
                    'title'    => __('Content', 'sitepilot'),
                    'sections' => array(
                        'content' => array(
                            'title'  => '',
                            'fields' => array(
                                'image' => array(
                                    'type' => 'photo',
                                    'label' => __('Image', 'sitepilot')
                                ),
                                'title' => array(
                                    'type' => 'text',
                                    'label' => __('Title', 'sitepilot'),
                                    'default' => 'Lorem ipsum dolor'
                                ),
                                'description' => array(
                                    'type' => 'textarea',
                                    'label' => __('Description', 'sitepilot'),
                                    'default' => 'Donec tincidunt justo non eros sagittis euismod. Praesent id gravida sem. Duis lobortis velit ac pulvinar tristique.'
                                ),
                                'link' => array(
                                    'type' => 'link',
                                    'label' => __('Link', 'sitepilot'),
                                    'default' => ''
                                )
                            ),
                        ),
                    ),
                ),
            ),
        ));
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
            'title' => [
                'title' => 'Title',
                'properties' => ModuleProperties::h2([
                    'margin_bottom' => 'mb-4'
                ])
            ],
            'description' => [
                'title' => 'Description',
                'properties' => ModuleProperties::text_xl([
                    'color' => 'gray_600'
                ])
            ],
            'grid' => [
                'title' => 'Grid',
                'properties' => ModuleProperties::grid([
                    'margin_top' => 'mt-12'
                ])
            ],
            'card' => [
                'title' => 'Card',
                'properties' => ModuleProperties::card([
                    'hover_bg_color' => 'theme_600',
                    'hover_scale' => 'hover:scale-105',
                    'transition_duration' => 'duration-500'
                ])
            ],
            'card_image' => [
                'title' => 'Card Image',
                'properties' => [
                    'bg_color' => 'gray_200',
                    'border_radius' => 'rounded-t-lg',
                    'height' => [
                        'h-48',
                        'h-40',
                        'h-48'
                    ]
                ]
            ],
            'card_content' => [
                'title' => 'Card Content',
                'properties' => [
                    'padding' => 'p-6'
                ]
            ],
            'card_title' => [
                'title' => 'Card Title',
                'properties' => ModuleProperties::h4([
                    'hover_color' => 'ffffff',
                    'padding_bottom' => 'pb-2'
                ])
            ],
            'card_description' => [
                'title' => 'Card Description',
                'properties' => ModuleProperties::text_base([
                    'color' => 'gray_600',
                    'hover_color' => 'ffffff'
                ])
            ],
        ];
    }
}
