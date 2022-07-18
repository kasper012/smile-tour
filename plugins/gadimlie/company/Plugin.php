<?php namespace Gadimlie\Company;
use Backend;
use System\Classes\PluginBase;

/**
 * company Plugin Information File
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
            'name' => 'Company',
            'description' => 'About company',
            'author' => 'gadimlie',
            'icon' => 'icon-building',
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
            'Gadimlie\Company\Components\Company' => 'Company',
            // 'Gadimlie\Company\Components\SubmitContactForm' => 'SubmitContactForm',
        ];
    }

    public function registerSettings()
    {
        return [
            'company' => [
                'label' => 'Company',
                'description' => '',
                'category' => 'Gadimlie Studio',
                'class' => 'Gadimlie\Company\Models\Company',
                'order' => 100,
                'icon' => 'icon-building-o',
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
            'gadimlie.company.some_permission' => [
                'tab' => 'company',
                'label' => 'Some permission',
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */

}
