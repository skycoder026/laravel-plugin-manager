<?php

use Illuminate\Support\Facades\Route;
use Skycoder\LravelPluginManager\Controllers\PluginManagerController;


Route::group(['middleware' => ['web'], 'prefix' => 'plugin-manager', 'as' => 'plugin-manager.plugins.'], function () {

    Route::get('plugins', [PluginManagerController::class, 'index'])->name('index');


    Route::get('plugin-install/{id}',       [PluginManagerController::class, 'installPlugin'])->name('install');

    Route::get('plugin-uninstall/{id}',     [PluginManagerController::class, 'uninstallPlugin'])->name('uninstall');

});
