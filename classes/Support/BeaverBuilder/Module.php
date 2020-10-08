<?php

namespace Sitepilot\Support\BeaverBuilder;

use FLBuilderCSS;
use FLBuilderColor;
use FLBuilderModule;

class Module extends FLBuilderModule
{
    /**
     * Returns module setting value.
     *
     * @param string $key
     * @param string $default
     * @return mixed
     */
    public function sp_setting($key, $default = null)
    {
        if (!empty($this->settings->$key) && $this->settings->$key != 'default') {
            return $this->settings->$key;
        }

        if ($default) {
            if (method_exists(ModuleValues::class, $default)) {
                return ModuleValues::$default();
            }

            return $default;
        }

        return null;
    }

    /**
     * Returns module classes.
     *
     * @param string $field
     * @return string
     */
    function sp_class($field)
    {
        $fields = $this->sp_style_fields();

        if (!isset($fields[$field]['properties'])) {
            return;
        }

        $classes = [];

        foreach ($fields[$field]['properties'] as $property => $default) {
            if (strpos($property, 'color') !== false || $property  == 'typography' || $property  == 'padding' || $property  == 'margin' || $property == 'border') {
                continue;
            }

            $responsive = false;
            $option_classes = ['md' => [], 'lg' => []];

            if (method_exists(ModuleFields::class, $property)) {
                $responsive = ModuleFields::$property()['responsive'] ?? false;
                $option_classes = array_merge($option_classes, ModuleFields::$property()['option_classes'] ?? []);
            }

            $lg_key = $field . '_' . $property; # desktop
            $md_key = $lg_key . '_medium'; # tablet
            $key = $lg_key . '_responsive'; # mobile

            $default_value = is_array($default) && isset($default[0]) ? $default[0] : $default;
            $md_default_value = $md_default_value_orig = is_array($default) && isset($default[1]) ? $default[1] : $default;
            $lg_default_value = is_array($default) && isset($default[2]) ? $default[2] : $default;

            $lg_class = $this->sp_setting($lg_key, $lg_default_value);

            if (isset($this->settings->$lg_key) && $lg_class != $lg_default_value && (!isset($this->settings->$md_key) || empty($this->settings->$md_key))) {
                $md_default_value = $lg_class;
            }

            $md_class = $this->sp_setting($md_key, $md_default_value);

            if (isset($this->settings->$md_key) && $md_class != $md_default_value_orig && (!isset($this->settings->$key) || empty($this->settings->$key))) {
                $default_value = $md_class;
            }

            $class = $this->sp_setting($key, $default_value);

            if (!$responsive) {
                $class = $lg_class;
            }

            $classes[] = $class;
            if (isset($option_classes['md'][$md_class])) $classes[] = $option_classes['md'][$md_class];
            if (isset($option_classes['lg'][$lg_class])) $classes[] = $option_classes['lg'][$lg_class];
        }

        return implode(' ', $classes);
    }

    /**
     * Returns module css.
     *
     * @return string $css
     */
    function sp_css()
    {
        $id = $this->node;
        $fields = $this->sp_style_fields();

        if (!is_array($fields)) {
            return;
        }

        foreach ($fields as $key => $field) {
            if (isset($field['properties']['color'])) {
                $color = $this->sp_setting($key . '_color', $field['properties']['color']);

                if (!empty($color)) {
                    echo "#sp-mod-$id .$key { color: " . FLBuilderColor::hex_or_rgb($color) . "; }\n";
                }
            }

            if (isset($field['properties']['hover_color'])) {
                $color = $this->sp_setting($key . '_hover_color', $field['properties']['hover_color']);

                if (!empty($color)) {
                    echo "#sp-mod-$id .$key:hover, #sp-mod-$id .group:hover .$key { color: " . FLBuilderColor::hex_or_rgb($color) . "; }\n";
                }
            }

            if (isset($field['properties']['bg_color'])) {
                $color = $this->sp_setting($key . '_bg_color', $field['properties']['bg_color']);

                if (!empty($color)) {
                    echo "#sp-mod-$id .$key { background-color: " . FLBuilderColor::hex_or_rgb($color) . "; }\n";
                }
            }

            if (isset($field['properties']['hover_bg_color'])) {
                $color = $this->sp_setting($key . '_hover_bg_color', $field['properties']['hover_bg_color']);

                if (!empty($color)) {
                    echo "#sp-mod-$id .$key:hover, #sp-mod-$id .group:hover .$key { background-color: " . FLBuilderColor::hex_or_rgb($color) . "; }\n";
                }
            }

            if (isset($field['properties']['typography'])) {
                FLBuilderCSS::typography_field_rule(array(
                    'settings' => $this->settings,
                    'setting_name' => $key . '_typography',
                    'selector' => "#sp-mod-$id .$key",
                ));
            }

            if (isset($field['properties']['border'])) {
                FLBuilderCSS::border_field_rule(array(
                    'settings' => $this->settings,
                    'setting_name' =>  $key . '_border',
                    'selector' => "#sp-mod-$id .$key",
                ));
            }

            if (isset($field['properties']['padding'])) {
                $property_key = $key . '_padding';
                FLBuilderCSS::dimension_field_rule(array(
                    'settings'     => $this->settings,
                    'setting_name' => $property_key,
                    'selector'     => "#sp-mod-$id .$key",
                    'props'        => array(
                        'padding-top'    => $property_key . '_top',
                        'padding-right'  => $property_key . '_right',
                        'padding-bottom' => $property_key . '_bottom',
                        'padding-left'   => $property_key . '_left',
                    ),
                ));
            }

            if (isset($field['properties']['margin'])) {
                $property_key = $key . '_margin';
                FLBuilderCSS::dimension_field_rule(array(
                    'settings'     => $this->settings,
                    'setting_name' => $property_key,
                    'selector'     => "#sp-mod-$id .$key",
                    'props'        => array(
                        'margin-top'    => $property_key . '_top',
                        'margin-right'  => $property_key . '_right',
                        'margin-bottom' => $property_key . '_bottom',
                        'margin-left'   => $property_key . '_left',
                    ),
                ));
            }
        }
    }

    /**
     * Return module style fields.
     *
     * @return array
     */
    function sp_style_fields()
    {
        return [];
    }

    /**
     * Returns the module style settings tab.
     *
     * @param array $items
     * @return array
     */
    static public function sp_style_tab($items)
    {
        $sections = [];
        foreach ($items as $key => $styles) {
            $fields = [];
            foreach ($styles['properties'] as $property => $default) {
                $function = $property;
                $field_key = $key . '_' . $property;
                if (method_exists(ModuleFields::class, $function)) {
                    $fields[$field_key] = ModuleFields::$function($key);
                }
            }

            $sections[$key] = [
                'title'  => $styles['title'],
                'fields' => $fields
            ];
        }

        return [
            'title' => __('Style', 'sitepilot'),
            'sections' => $sections
        ];
    }
}
