<?php namespace Malak\NavBar;

use System\Classes\PluginBase;
use Illuminate\Support\Facades\Route;

/**
 * Plugin class
 */
class Plugin extends PluginBase
{
    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {

    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
//            Route::group(['prefix' => 'api'], function () {
//                Route::get('social-links','Malak\NavBar\Controllers\SocialLinksController@index');
//
//            });

    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
