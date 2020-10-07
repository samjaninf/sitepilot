<?php

namespace Sitepilot\Support\BeaverBuilder\Modules\V1\FeaturesModX1;

use FLBuilder;
use Sitepilot\Support\BeaverBuilder\Module;
use Sitepilot\Support\BeaverBuilder\ModuleProperties;

class SPFeaturesModX1 extends Module
{
    /**
     * Construct module.
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct(array(
            'name' => __('Features X1', 'sitepilot'),
            'category' => __('Features', 'sitepilot'),
            'description' => __('Sitepilot features module.', 'sitepilot'),
            'group' => 'Sitepilot',
            'icon' => 'star-filled.svg',
            'editor_export' => true,
            'enabled' => true,
        ));
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
                            'title_1' => array(
                                'type' => 'text',
                                'label' => __('Title 1', 'sitepilot'),
                                'default' => 'Lorem Ipsum'
                            ),
                            'title_2' => array(
                                'type' => 'text',
                                'label' => __('Title 2', 'sitepilot'),
                                'default' => 'Integer faucibus cursus vulputate'
                            ),
                            'description' => array(
                                'type' => 'textarea',
                                'label' => __('Description', 'sitepilot'),
                                'default' => 'Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.'
                            ),
                        )
                    ),
                    'features' => array(
                        'title' => __('Features', 'sitepilot'),
                        'fields' => array(
                            'features' => array(
                                'type' => 'form',
                                'label' => __('Feature', 'sitepilot'),
                                'form' => 'sp_features_mod_v1_features_form',
                                'preview_text' => 'title',
                                'multiple' => true,
                            ),
                        )
                    )
                )
            ),
            'style' => self::sp_style_tab((new self)->sp_style_fields())
        ));

        FLBuilder::register_settings_form('sp_features_mod_v1_features_form', array(
            'title' => __('Add Feature', 'sitepilot'),
            'tabs'  => array(
                'content' => array(
                    'title'    => __('Content', 'sitepilot'),
                    'sections' => array(
                        'content' => array(
                            'title'  => '',
                            'fields' => array(
                                'icon' => array(
                                    'type' => 'icon',
                                    'label' => __('Icon', 'sitepilot'),
                                    'default' => 'fas fa-check'
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
            'title_1' => [
                'title' => 'Title 1',
                'properties' => ModuleProperties::h5([
                    'color' => 'theme_600',
                    'margin_bottom' => 'mb-2'
                ])
            ],
            'title_2' => [
                'title' => 'Title 2',
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
            'feature_icon' => [
                'title' => 'Feature Icon',
                'properties' => [
                    'color' => 'ffffff',
                    'bg_color' => 'theme_600',
                    'hover_bg_color' => 'theme_500',
                    'border_radius' => 'rounded-full',
                    'padding' => 'p-3',
                    'typography' => ''
                ]
            ],
            'feature_title' => [
                'title' => 'Feature Title',
                'properties' => ModuleProperties::h4([
                    'margin_bottom' => 'mb-2'
                ])
            ],
            'feature_description' => [
                'title' => 'Feature Description',
                'properties' => ModuleProperties::text_base([
                    'color' => 'gray_600'
                ])
            ],
        ];
    }
}
