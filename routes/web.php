<?php
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, "home"])->name('homepage');
Route::get('/Products', [PublicController::class, "products"])->name('products');
Route::get('/Products/Detail/{id}', [PublicController::class,"detail"])->name('detail-product');
Route::get('/Contact-Us', [PublicController::class, "contact_us"])->name('contact-us');
Route::post('/send' , [PublicController::class, 'send'])->name('send');