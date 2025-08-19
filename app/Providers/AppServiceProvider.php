<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Admin\Settings;
use Illuminate\Pagination\Paginator;


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
        $locales = [
            'tr' => 'Türkçe',
            'en' => 'English',
            'ar' => 'عربي',
            'de' => 'Deutsch',
            'ru' => 'Русский',
        ];
        Paginator::useBootstrap();

        $settings = Settings::first();
        view()->share(['locales'=>$locales,'settings'=>$settings]);

        view()->share([
            'locales' => $locales,
            'settings' => $settings
        ]);
    }
}
