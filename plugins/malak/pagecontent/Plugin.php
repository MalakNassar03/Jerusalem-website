<?php namespace Malak\PageContent;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'PageContent',
            'description' => 'No description provided yet...',
            'author' => 'Malak',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Malak\PageContent\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'malak.pagecontent.some_permission' => [
                'tab' => 'PageContent',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
                'pagecontent' => [
                    'label'       => 'Pages',
                    'url'         => Backend::url('malak/pagecontent/page'),
                    'icon'        => 'icon-file-text',
                    'permissions' => ['malak.pagecontent.*'],
                    'order'       => 500,
                    'sideMenu'    => [
                        'page' => [
                            'label'       => 'Pages',
                            'icon'        => 'icon-file-text-o',
                            'url'         => Backend::url('malak/pagecontent/page'),
                            'permissions' => ['malak.pagecontent.*'],
                        ]
                    ]
                ],
            ];
    }
}
