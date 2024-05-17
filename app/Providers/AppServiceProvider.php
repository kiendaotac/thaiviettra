<?php

namespace App\Providers;

use Illuminate\Support\HtmlString;
use Illuminate\Support\ServiceProvider;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FilamentFabricator::favicon(asset('assets/image/logo.png'));
        FilamentFabricator::pushMeta([
            new HtmlString('<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="robots" content="index, follow">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="title" content="Trà Thái Việt">
            <meta name="description" content="Trà Thái Việt, tinh hoa trà Việt">
            <meta name="keywords" content="trà, thái việt, trà xanh, trà cụ, trà đinh, trà nõn">
            <meta name="language" content="Vietnamese">'),
        ]);
    }
}
