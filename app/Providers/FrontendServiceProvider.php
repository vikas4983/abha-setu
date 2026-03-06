<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class FrontendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void {}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // $setting = Cache::remember('web_setting', 1, function () {
        //     return SiteSetting::first();
        // });
        // $headers = Cache::remember('headers', 1, function () {
        //     return Menu::header()->get();
        // });
        // $footers = Cache::remember('menu', 1, function () {
        //     return Menu::footer()->get();
        // });
        $setting = SiteSetting::first();
        $headers = Menu::header()->get();
        $footers = Menu::footer()->get();
        View::share([
            'setting' => $setting,
            'headers' => $headers,
            'footers' => $footers,
        ]);
    }
}
