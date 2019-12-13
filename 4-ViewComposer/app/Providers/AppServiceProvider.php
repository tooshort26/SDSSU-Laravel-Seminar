<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
        $users = [
            [
                'name' => 'Foo bar From AppServiceProvider'
            ],
            [
                'name' => 'John Doe AppServiceProvider'
            ],
        ];

        View::composer('*', function ($view) use($users) {
            $view->with('users', $users);
        });
    }
}
