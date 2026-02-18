<?php

use App\Http\Controllers\Cms\ContentController;
use App\Http\Controllers\Cms\SiteSettingsController;
use App\Http\Controllers\Settings;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SgeController;




// SGE Prime Contracting (Public)
Route::get('/', [SgeController::class, 'index'])->name('home');
Route::post('/sge/contact', [SgeController::class, 'contact'])->name('sge.contact');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('contacts', [SgeController::class, 'contacts'])->name('contacts.index');
    Route::delete('contacts/{contact}', [SgeController::class, 'destroyContact'])->name('contacts.destroy');

    // CMS Routes
    Route::get('cms/company', [SiteSettingsController::class, 'company'])->name('cms.company');
    Route::put('cms/company', [SiteSettingsController::class, 'updateCompany'])->name('cms.company.update');
    Route::get('cms/hero', [SiteSettingsController::class, 'hero'])->name('cms.hero');
    Route::put('cms/hero', [SiteSettingsController::class, 'updateHero'])->name('cms.hero.update');

    Route::get('cms/{type}', [ContentController::class, 'index'])
        ->where('type', 'stats|services|sectors|projects|leaders|differentiators|credentials')
        ->name('cms.content.index');
    Route::post('cms/{type}', [ContentController::class, 'store'])
        ->where('type', 'stats|services|sectors|projects|leaders|differentiators|credentials')
        ->name('cms.content.store');
    Route::post('cms/{type}/reorder', [ContentController::class, 'reorder'])
        ->where('type', 'stats|services|sectors|projects|leaders|differentiators|credentials')
        ->name('cms.content.reorder');
    Route::put('cms/{type}/{id}', [ContentController::class, 'update'])
        ->where('type', 'stats|services|sectors|projects|leaders|differentiators|credentials')
        ->name('cms.content.update');
    Route::delete('cms/{type}/{id}', [ContentController::class, 'destroy'])
        ->where('type', 'stats|services|sectors|projects|leaders|differentiators|credentials')
        ->name('cms.content.destroy');

    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', [Settings\ProfileController::class, 'edit'])->name('settings.profile.edit');
    Route::put('settings/profile', [Settings\ProfileController::class, 'update'])->name('settings.profile.update');
    Route::delete('settings/profile', [Settings\ProfileController::class, 'destroy'])->name('settings.profile.destroy');
    Route::get('settings/password', [Settings\PasswordController::class, 'edit'])->name('settings.password.edit');
    Route::put('settings/password', [Settings\PasswordController::class, 'update'])->name('settings.password.update');
    Route::get('settings/appearance', [Settings\AppearanceController::class, 'edit'])->name('settings.appearance.edit');
});

require __DIR__.'/auth.php';
