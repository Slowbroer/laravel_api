<?php

namespace App\Blog;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouterProvider extends ServiceProvider
{
    protected $namespace = 'App\Blog\Controllers';
    public function boot()
    {
        //

        parent::boot();
    }

    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::prefix('blog')->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/blog/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('blog/api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/blog/api.php'));
    }
}
