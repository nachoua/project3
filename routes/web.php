<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bank_human;
use App\Http\Controllers\parent_children;
use App\Http\Controllers\worker_society;

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
    return view('welcome');
});


/*start one to many project parent children */
Route::get('/showpc/{id}', [parent_children::class, 'show_pc'])->name('show_pc');
Route::get('/storechildren', function()
{
    return view('onetomany_store_children');
})->name('storechildren');

Route::post('/storec', [parent_children::class, 'store_children'])->name('store_children');
Route::post('/storep/{id}', [parent_children::class, 'store_parent'])->name('store_parent');
Route::get('/index', [parent_children::class, 'index'])->name('index');
Route::delete('/destroy/{id}', [parent_children::class, 'destroy'])->name('destroy');
Route::get('/add_children', [parent_children::class, 'add_children'])->name('add_children');
Route::get('/add_parent', [parent_children::class, 'add_parent'])->name('add_parent');
Route::get('/update_c/{id}/edit_c', [parent_children::class, 'edit_c'])
                ->name('edit_c');
Route::put('/update_c/{id}', [parent_children::class, 'update_c'])
                ->name('update_c');

 Route::get('/update_p/{id}/edit_p', [parent_children::class, 'edit_p'])
                ->name('edit_p');
Route::put('/update_p/{id}', [parent_children::class, 'update_p'])
                ->name('update_p');
/*end one to many parent children */


/*one to many start worker society*/



Route::post('/store1', [worker_society::class, 'store1'])->name('storep1');
Route::post('/store2/{id}', [worker_society::class, 'store2'])->name('storep2');
Route::get('/showsw/{id}', [worker_society::class, 'show_sw'])->name('show_sw');
Route::get('/storepage1', function()
{
    return view('onetomany_store');
});

Route::get('/showall', [worker_society::class, 'show_all'])->name('show_all');



/*one to many end*/




/*start one to one project bank human */

Route::get('/storepage2', function()
{
    return view('onetoone_store1');
});
Route::get('/show/{id}', [bank_human::class, 'show'])->name('show_hb');
Route::post('/store1', [bank_human::class, 'storehuman'])->name('storehuman');
Route::post('/store2/{id}', [bank_human::class, 'storebank'])->name('storebank');
Route::get('/show_bank_human', [bank_human::class, 'show_bank_human'])->name('show_bank_human');
/*end one to one project bank human */
