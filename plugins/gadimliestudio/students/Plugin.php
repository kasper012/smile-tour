<?php namespace Gadimliestudio\Students;

use Backend;
use System\Classes\PluginBase;

/**
 * students Plugin Information File
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
            'name'        => 'students',
            'description' => '...',
            'author'      => 'gadimliestudio',
            'icon'        => 'icon-student'
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
            'Gadimliestudio\Students\Components\Student' => 'students',
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
            'gadimliestudio.students.some_permission' => [
                'tab' => 'students',
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
            'students' => [
                'label'       => 'Tələbələlər',
                'url'         => Backend::url('gadimliestudio/students/students'),
                'icon'        => 'icon-graduation-cap',
                'permissions' => ['gadimliestudio.students.*'],
                'order'       => 500,

            ],
        ];
    }
}
