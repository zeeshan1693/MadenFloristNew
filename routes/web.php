<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MadenFlorist\ColorController;
use App\Http\Controllers\MadenFlorist\CategoryController;
use App\Http\Controllers\MadenFlorist\TypeController;
use App\Http\Controllers\MadenFlorist\TemplateSlotController;
use App\Http\Controllers\MadenFlorist\TimeSlotController;
use App\Http\Controllers\MadenFlorist\DateSlotController;
use App\Http\Controllers\MadenFlorist\ProductFilterController;
use App\Http\Controllers\MadenFlorist\AddonCategoriesController;
use App\Http\Controllers\MadenFlorist\TimeSlotsGapController;
use App\Http\Controllers\MadenFlorist\DiscountCodeController;
use App\Http\Controllers\MadenFlorist\BannerController;
use App\Http\Controllers\MadenFlorist\CollaborationController;
use App\Http\Controllers\MadenFlorist\ProductController;
use App\Http\Controllers\MadenFlorist\AddonProductController;
use App\Http\Controllers\MadenFlorist\WarehouseController;
use App\Http\Controllers\MadenFlorist\OrderController;
use App\Http\Controllers\MadenFlorist\CustomerController;
use App\Http\Controllers\MadenFlorist\AdminUserController;
use App\Http\Controllers\MadenFlorist\AdminRoleController;
use App\Http\Controllers\MadenFlorist\CountryController;
use App\Http\Controllers\MadenFlorist\CurrencyController;
use App\Http\Controllers\MadenFlorist\OccasionController;
use App\Http\Controllers\MadenFlorist\LanguageController;
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

Route::get('/', function () {
    return redirect()->route('dashboard');
    //return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    
    Route::prefix('product-setup')->group(function () {
        Route::resource('categories', CategoryController::class);
        Route::resource('colors', ColorController::class);
        Route::resource('types', TypeController::class);
        Route::resource('template-slots', TemplateSlotController::class);
        Route::resource('time-slots', TimeSlotController::class);
        Route::resource('date-slots', DateSlotController::class);
        Route::resource('product-filters', ProductFilterController::class);
        Route::resource('addon-categories', AddonCategoriesController::class);
        Route::resource('time-slots-gaps', TimeSlotsGapController::class);
    });

    Route::resource('discount-codes', DiscountCodeController::class);
    Route::resource('banners', BannerController::class);
    Route::resource('collaborations', CollaborationController::class);
    Route::resource('products', ProductController::class);
    Route::resource('addon-products', AddonProductController::class);
    Route::resource('warehouses', WarehouseController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('customers', CustomerController::class);

    Route::prefix('admins')->group(function () {
        Route::resource('admin-users', AdminUserController::class);
        Route::resource('admin-roles', AdminRoleController::class);
    });

    Route::prefix('settings')->group(function () {
        Route::resource('countries', CountryController::class);
        Route::resource('currencies', CurrencyController::class);
        Route::resource('occasions', OccasionController::class);
        Route::resource('languages', LanguageController::class);
    });
    
    Route::get('/dashboard', function () {
        return view('madenflorist.dashboard.index');
    })->name('dashboard');

    //Route::get('/dashboard', 'HomeController@index')->name('dashboard');
});
