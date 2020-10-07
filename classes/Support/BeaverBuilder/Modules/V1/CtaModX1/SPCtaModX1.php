<?php

namespace Sitepilot\Support\BeaverBuilder\Modules\V1\CtaModX1;

use FLBuilder;
use Sitepilot\Support\BeaverBuilder\Module;
use Sitepilot\Support\BeaverBuilder\ModuleProperties;

class SPCtaModX1 extends Module
{
    /**
     * Construct module.
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct([
            'name' => __('CTA X1', 'sitepilot'),
            'category' => __('Call To Action', 'sitepilot'),
            'group' => 'Sitepilot',
            'icon' => 'button.svg',
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
                $defaults = ModuleProperties::section_sm($defaults);
            }

            return $defaults;
        }, 10, 2);
        
        FLBuilder::register_module(__CLASS__, array(
            'content' => array(
                'title' => __('Content', 'sitepilot'),
                'sections' => array(
                    'content' => array(
                        'title' => __('Content', 'sitepilot'),
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
                    'btn_1' => array(
                        'title' => __('Button 1', 'sitepilot'),
                        'fields' => array(
                            'btn_1' => array(
                                'type' => 'text',
                                'label' => __('Button Text', 'sitepilot'),
                                'default' => 'Get started'
                            ),
                            'btn_1_link' => array(
                                'type' => 'link',
                                'label' => __('Button Link', 'sitepilot'),
                                'default' => '#'
                            ),
                        )
                    ),
                    'btn_2' => array(
                        'title' => __('Button 2', 'sitepilot'),
                        'fields' => array(
                            'btn_2' => array(
                                'type' => 'text',
                                'label' => __('Button Text', 'sitepilot'),
                                'default' => 'Learn more'
                            ),
                            'btn_2_link' => array(
                                'type' => 'link',
                                'label' => __('Button Link', 'sitepilot'),
                                'default' => '#'
                            ),
                        )
                    )
                )
            ),
            'style' => self::sp_style_tab((new self)->sp_style_fields())
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
                'properties' => ModuleProperties::h2()
            ],
            'title_2' => [
                'title' => 'Title 2',
                'properties' => [
                    'color' => 'theme_600'
                ]
            ],
            'btn_1' => [
                'title' => 'Button 1',
                'properties' => ModuleProperties::btn_primary()
            ],
            'btn_2' => [
                'title' => 'Button 2',
                'properties' => ModuleProperties::btn_secondary()
            ]
        ];
    }
}
