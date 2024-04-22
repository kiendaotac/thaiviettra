<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', \App\Livewire\HomePage::class)->name('home-page');
Route::get('/', function () {
    return redirect('home');
})->name('home');
Route::group(['namespace' => 'App\Livewire'], function () {
    Route::get('thuong-hieu', 'Brand')->name('brand');
    Route::get('thuong-hieu/{slug}', 'BrandDetail')->name('brand.detail');
    Route::get('bao-tra', 'Products')->name('products');
    Route::get('san-pham/{slug}', 'ProductDetail')->name('products.detail');
    Route::get('khuyen-mai/{slug}', 'Discount')->name('discount');
    Route::get('blog', 'Blog')->name('blog');
    Route::get('contact', 'Contact')->name('contact');
    Route::get('checkout', 'Checkout')->name('checkout');
    Route::get('cart', 'Cart')->name('cart');
});

Route::get('language/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'vi'])) {
        session()->put('locale', 'vi');
    } else {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('language.locale');