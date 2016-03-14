<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //once laravel app is bootstrap then do anything

        parent::boot($router);

        //enable route table binding
       // $router->model('articles', 'App\Article');//for small projects oly has one wildcard

        $router->bind('articles', function($id){
            return \App\Article::published()->findOrFail($id);
        });

        //$router->model('tags', 'App\Tag');

        $router->bind('tags', function($name){
            return \App\Tag::where('name', $name)->firstOrFail();
        });

        $router->bind('jaagirs', function($id){
            return \App\Jaagir::published()->findOrFail($id);
        });

        $router->bind('companies', function($id){
            return \App\Company::latest()->findOrFail($id);
        });
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
