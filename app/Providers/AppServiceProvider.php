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
        if(file_exists(__DIR__ . '/migrations.json'))
            $this->loadMigrationsFrom(json_decode(file_get_contents(__DIR__ . '/migrations.json'),true));
    }
}
