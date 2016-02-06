<?php

namespace App\Providers;


use App\Article;
use Illuminate\Support\ServiceProvider;

/**
 * Class ViewComposerServiceProvider
 * @package App\Providers
 */
class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeNavigation();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }


    /**
     *
     */
    private function composeNavigation()
    {
        $var = array();
        view()->composer('partials.nav', function ($view) {
            $view->with('latest', Article::latest()->first());
        }
        );
    }
}
