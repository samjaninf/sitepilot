<?php

namespace Sitepilot\Support\BeaverBuilder\Modules\V1\FeaturesModX2;

use FLBuilder;
use Sitepilot\Support\BeaverBuilder\Module;
use Sitepilot\Support\BeaverBuilder\ModuleProperties;

class SPFeaturesModX2 extends Module
{
    /**
     * Construct module.
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct(array(
            'name' => __('Features X2', 'sitepilot'),
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
                $defaults = ModuleProperties::section_sm($defaults);
            }

            return $defaults;
        }, 10, 2);

        FLBuilder::register_module(__CLASS__, [
            'content' => array(
                'title' => __('Content', 'sitepilot'),
                'sections' => array(
                    'features' => array(
                        'title' => __('Features', 'sitepilot'),
                        'fields' => array(
                            'features' => array(
                                'type' => 'form',
                                'label' => __('Feature', 'sitepilot'),
                                'form' => 'sp_features_mod_v2_features_form',
                                'preview_text' => 'title',
                                'multiple' => true,
                            ),
                        )
                    )
                )
            ),
            'style' => self::sp_style_tab((new self)->sp_style_fields())
        ]);

        FLBuilder::register_settings_form('sp_features_mod_v2_features_form', array(
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
            'grid' => [
                'title' => 'Grid',
                'properties' => ModuleProperties::grid(),
            ],
            'icon' => [
                'title' => 'Icon',
                'properties' => [
                    'color' => 'theme_600',
                    'typography' => '',
                    'margin_right' => [
                        'mr-6',
                        'mr-8',
                        'mr-10'
                    ],
                ]
            ],
            'title' => [
                'title' => 'Title',
                'properties' => ModuleProperties::h3()
            ]
        ];
    }
}
