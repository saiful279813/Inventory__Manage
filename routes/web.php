<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Finance\IncomeTypeController;
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

Route::get('/', [DashboardController::class, 'root']);

Route::group(['middleware' => 'auth' ], function () {

    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    /* ==================== Finance ==================== */
    Route::prefix('finace')->group(function () {
        Route::resource('income-type', IncomeTypeController::class);
    });;
    /* ==================== Finance ==================== */

});




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
