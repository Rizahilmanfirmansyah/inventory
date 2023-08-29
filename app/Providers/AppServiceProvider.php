<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View::composer('layouts.e_user', function ($view) {
        //     $count_order = m_order::where('id_user', Auth::user()->id)->where('status','ordered')->count();
        //     return $view->with('count_order', $count_order);
        // });
    }
}
