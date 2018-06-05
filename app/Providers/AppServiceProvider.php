<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\RedirectResponse;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        RedirectResponse::macro('withFlash', function ($message, $level = 'success', $important = true) {
            $flash = app('flash')->message($message, $level);

            if ($important) {
                $flash->important();
            }

            return $this;
        });
    }

}
