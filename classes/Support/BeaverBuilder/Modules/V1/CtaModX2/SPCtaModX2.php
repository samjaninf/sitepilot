<?php

namespace Sitepilot\Support\BeaverBuilder\Modules\V1\CtaModX2;

use FLBuilder;
use Sitepilot\Support\BeaverBuilder\Module;
use Sitepilot\Support\BeaverBuilder\ModuleProperties;

class SPCtaModX2 extends Module
{
    /**
     * Construct module.
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct([
            'name' => __('CTA X2', 'sitepilot'),
            'category' => __('Call To Action', 'sitepilot'),
            'description' => __('Sitepilot call to action module.', 'sitepilot'),
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
                $defaults = ModuleProperties::section_md($defaults);
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
                                'default' => 'Lorem ipsum dolor?'
                            ),
                            'title_2' => array(
                                'type' => 'text',
                                'label' => __('Title 2', 'sitepilot'),
                                'default' => 'Donec eget metus fringilla, fermentum dolor.'
                            ),
                        )
                    ),
                    'btn_1' => array(
                        'title' => __('Button', 'sitepilot'),
                        'fields' => array(
                            'btn_1' => array(
                                'type' => 'text',
                                'label' => __('Button Text', 'sitepilot'),
                                'default' => 'Lorem ipsum'
                            ),
                            'btn_1_icon' => array(
                                'type' => 'icon',
                                'label' => __('Button Icon', 'sitepilot'),
                            ),
                            'btn_1_link' => array(
                                'type' => 'link',
                                'label' => __('Button Link', 'sitepilot'),
                            )
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
                'properties' => ModuleProperties::h2([
                    'margin_bottom' => 'mb-8'
                ])
            ],
            'title_2' => [
                'title' => 'Title 2',
                'properties' => ModuleProperties::h1()
            ],
            'btn_1' => [
                'title' => 'Button',
                'properties' => ModuleProperties::btn_primary([
                    'margin_top' => 'mt-8'
                ])
            ],
            'btn_1_icon' => [
                'title' => 'Button Icon',
                'properties' => [
                    'margin_left' => 'ml-2'
                ]
            ]
        ];
    }
}
