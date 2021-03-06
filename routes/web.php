<?php

use App\Events\PostCreated;
use App\Http\Controllers\SiteController;
use App\Models\User;
use Illuminate\Support\Str;
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


Route::get('/create-post', function () {
    $user = User::first();

    $post = $user->post()->create([
        'title' => Str::random(10),
        'body' => Str::random(10),
    ]);
    return 'ok';
});

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/create-post', [SiteController::class, 'create'])->name('create');
Route::post('/salvar-post', [SiteController::class, 'store'])->name('create.store');
