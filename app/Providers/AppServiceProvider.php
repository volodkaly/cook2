<?php

namespace App\Providers;

use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('update-bb', function ($user, $bb) {
            return $user->id == $bb->user_id;
        });

        Gate::define('delete-bb', [App\Gates\BbGate::class, 'deleteBb']);
    }
}
