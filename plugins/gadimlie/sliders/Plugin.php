<?php namespace Gadimlie\Sliders;
use Backend;
use System\Classes\PluginBase;

/**
 * sliders Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Home page sliders',
            'description' => 'Sliders',
            'author' => 'gadimlie',
            'icon' => 'icon-image',
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Gadimlie\Sliders\Components\Sliders' => 'Sliders',
            // 'Gadimlie\Sliders\Components\SubmitContactForm' => 'SubmitContactForm',
        ];
    }

    public function registerSettings()
    {
        return [
            'sliders' => [
                'label' => 'Slider',
                'description' => '',
                'category' => 'Gadimlie Studio',
                'class' => 'Gadimlie\Sliders\Models\Sliders',
                'order' => 100,
                'icon' => 'icon-image',
            ],
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'gadimlie.sliders.some_permission' => [
                'tab' => 'sliders',
                'label' => 'Some permission',
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [

        ];
    }
}
