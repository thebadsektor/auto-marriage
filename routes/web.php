<?php

use App\Http\Controllers\Account\SettingsController;
use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\Documentation\ReferencesController;
use App\Http\Controllers\Logs\AuditLogsController;
use App\Http\Controllers\Logs\SystemLogsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ActualUseController;
use App\Http\Controllers\AdditionalItemController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\ParentalForm1Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return redirect('index');
// });

$menu = theme()->getMenu();
array_walk($menu, function ($val) {
    if (isset($val['path'])) {
        $route = Route::get($val['path'], [PagesController::class, 'index']);

        // Exclude documentation from auth middleware
        if (!Str::contains($val['path'], 'documentation')) {
            $route->middleware('auth');
        }
    }
});

// Documentations pages
Route::prefix('documentation')->group(function () {
    Route::get('getting-started/references', [ReferencesController::class, 'index']);
    Route::get('getting-started/changelog', [PagesController::class, 'index']);
});

Route::middleware('auth')->group(function () {
    // Account pages
    Route::prefix('account')->group(function () {
        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');
        Route::put('settings/email', [SettingsController::class, 'changeEmail'])->name('settings.changeEmail');
        Route::put('settings/password', [SettingsController::class, 'changePassword'])->name('settings.changePassword');
    });

    // Logs pages
    Route::prefix('log')->name('log.')->group(function () {
        Route::resource('system', SystemLogsController::class)->only(['index', 'destroy']);
        Route::resource('audit', AuditLogsController::class)->only(['index', 'destroy']);
    });
});

Route::resource('users', UsersController::class);

//Actual Use
Route::get('/actual-uses', [ActualUseController::class, 'index'])->name('actual-uses');
Route::get('/actual-use/create', [ActualUseController::class, 'create'])->name('create-actual-use');
Route::post('/actual-use/store', [ActualUseController::class, 'store'])->name('store-actual-use');
Route::get('/actual-use/show/{actual_use}', [ActualUseController::class, 'show'])->name('show-actual-use');
Route::get('/actual-use/edit/{actual_use}', [ActualUseController::class, 'edit'])->name('edit-actual-use');
Route::put('/actual-use/update/{actual_use}', [ActualUseController::class, 'update'])->name('update-actual-use');
Route::delete('/actual-use/destroy/{actual_use}', [ActualUseController::class, 'destroy'])->name('destroy-actual-use');
Route::post('/actual-uses/batch-destroy', [ActualUseController::class, 'batchDestroy'])->name('batch-destroy-actual-uses');

//Additional Item
Route::get('/items', [AdditionalItemController::class, 'index'])->name('items');
Route::get('/item/create', [AdditionalItemController::class, 'create'])->name('create-item');
Route::post('item/store', [AdditionalItemController::class, 'store'])->name('store-item');
Route::get('/item/show/{item}', [AdditionalItemController::class, 'show'])->name('show-item');
Route::get('/item/edit/{item}', [AdditionalItemController::class, 'edit'])->name('edit-item');
Route::put('/item/update/{item}', [AdditionalItemController::class, 'update'])->name('update-item');
Route::delete('/item/destroy/{item}', [AdditionalItemController::class, 'destroy'])->name('destroy-item');
Route::post('/item/batch-destroy', [AdditionalItemController::class, 'batchDestroy'])->name('batch-destroy-items');

//Applicant
Route::get('/applicants', [ApplicantController::class, 'index'])->name('applicants');
Route::get('/applicant/create', [ApplicantController::class, 'create'])->name('create-applicant');
Route::post('/applicant/store', [ApplicantController::class, 'store'])->name('store-applicant');
Route::get('/applicant/show/{applicant}', [ApplicantController::class, 'show'])->name('show-applicant');
Route::get('/applicant/edit/{applicant}', [ApplicantController::class, 'edit'])->name('edit-applicant');
Route::put('/applicant/update/{applicant}', [ApplicantController::class, 'update'])->name('update-applicant');
Route::delete('/applicant/destroy/{applicant}', [ApplicantController::class, 'destroy'])->name('destroy-applicant');
Route::post('/applicants/batch-destroy', [ApplicantController::class, 'batchDestroy'])->name('batch-destroy-applicants');

//Application
Route::get('/applications', [ApplicationController::class, 'index'])->name('applications');
Route::get('/application/create', [ApplicationController::class, 'create'])->name('create-application');
Route::post('/application/store', [ApplicationController::class, 'store'])->name('store-application');
Route::get('/application/show/{application}', [ApplicationController::class, 'show'])->name('show-application');
Route::get('/application/edit/{application}', [ApplicationController::class, 'edit'])->name('edit-application');
Route::put('/application/update/{application}', [ApplicationController::class, 'update'])->name('update-application');
Route::delete('/application/destroy/{application}', [ApplicationController::class, 'destroy'])->name('destroy-application');
Route::post('/applications/batch-destroy', [ApplicationController::class, 'batchDestroy'])->name('batch-destroy-applications');

Route::get('/application/show-form/{application}', [ApplicationController::class, 'show_form'])->name('show-application-form');
Route::get('/table', [ApplicationController::class, 'table']);
Route::get('/docu-auto', [ApplicationController::class, 'docu_auto']);
Route::get('/calendar', [AppointmentController::class, 'index']);

Route::get('/forms/parental-advice', [FormsController::class, 'parentalAdvice']);
Route::post('/parental-form/process', [ParentalForm1Controller::class, 'process'])->name('process-parental-advice');
Route::get('/forms/parental-advice2', [FormsController::class, 'parentalAdvice2']);
Route::get('/forms/parental-consent', [FormsController::class, 'parentalConsent']);
/**
 * Socialite login using Google service
 * https://laravel.com/docs/8.x/socialite
 */
Route::get('/auth/redirect/{provider}', [SocialiteLoginController::class, 'redirect']);

require __DIR__.'/auth.php';
