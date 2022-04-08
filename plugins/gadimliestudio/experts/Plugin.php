<?php namespace Gadimliestudio\Experts;

use Backend;
use System\Classes\PluginBase;

/**
 * experts Plugin Information File
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
            'name'        => 'experts',
            'description' => '...',
            'author'      => 'gadimliestudio',
            'icon'        => 'icon-users'
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
            'Gadimliestudio\Experts\Components\Expert' => 'experts',
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
            'gadimliestudio.experts.some_permission' => [
                'tab' => 'experts',
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
        return [
            'experts' => [
                'label'       => 'Ekspertlər',
                'url'         => Backend::url('gadimliestudio/experts/experts'),
                'icon'        => 'icon-users',
                'permissions' => ['gadimliestudio.experts.*'],
                'order'       => 500,

            ],
        ];
    }
}
