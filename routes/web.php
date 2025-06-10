<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index')->name('home');

Route::prefix('hosting')->group(function () {
    Route::view('vps', 'pages.hosting-vps')->name('hosting.vps');
    Route::view('shared', 'pages.hosting-shared')->name('hosting.shared');
    Route::view('wordpress', 'pages.hosting-wordpress')->name('hosting.wordpress');
    Route::view('cloud', 'pages.hosting-cloud')->name('hosting.cloud');
    Route::view('dedicated', 'pages.hosting-dedicated')->name('hosting.dedicated');
    Route::view('ecommerce', 'pages.hosting-ecommerce')->name('hosting.ecommerce');
    Route::view('email', 'pages.hosting-email')->name('hosting.email');
    Route::view('reseller', 'pages.hosting-reseller')->name('hosting.reseller');
});

Route::view('domain-transfer', 'pages.domain-transfer')->name('domain.transfer');
Route::view('domain-checker', 'pages.domain-checker')->name('domain.checker');
Route::view('data-center', 'pages.data-center')->name('data.center');


