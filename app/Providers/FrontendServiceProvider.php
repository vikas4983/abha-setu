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
        $setting = Cache::remember('web_setting', 60, function () {
            return SiteSetting::first();
        });
        $headers = Cache::remember('headers', 60, function () {
            return Menu::header()->where('status',1)->get();
        });
        $footers = Cache::remember('footers', 60, function () {
            return Menu::footer()->where('status',1)->get();
        });
        View::share([
            'setting' => $setting,
            'headers' => $headers,
            'footers' => $footers,
        ]);
    }
}
