<?php namespace Gadimliestudio\Forms;

use Backend;
use System\Classes\PluginBase;

/**
 * forms Plugin Information File
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
            'name'        => 'forms',
            'description' => 'No description provided yet...',
            'author'      => 'Gadimlie Studio',
            'icon'        => 'icon-leaf'
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
            'Gadimliestudio\Forms\Components\MainContactForm' => 'mainContactForm',
            'Gadimliestudio\Forms\Components\Subscriptionform' => 'Subscriptionform',
            'Gadimliestudio\Forms\Components\Eventregform' => 'Eventregform',


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
            'gadimliestudio.forms.some_permission' => [
                'tab' => 'forms',
                'label' => 'Some permission'
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
        return []; // Remove this line to activate
        return [
            'forms' => [
                'label'       => 'forms',
                'url'         => Backend::url('gadimliestudio/forms/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['gadimliestudio.forms.*'],
                'order'       => 500,
            ],
        ];
    }
}
