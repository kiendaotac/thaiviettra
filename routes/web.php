<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\HomePage::class)->name('home-page');
Route::get('thuong-hieu', \App\Livewire\Brand::class)->name('brand');
Route::get('thuong-hieu/{slug}', \App\Livewire\BrandDetail::class)->name('brand.detail');
Route::get('bao-tra', \App\Livewire\Products::class)->name('products');
Route::get('san-pham/{slug}', \App\Livewire\ProductDetail::class)->name('products.detail');
Route::get('language/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'vi'])) {
        session()->put('locale', 'vi');
    } else {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('language.locale');