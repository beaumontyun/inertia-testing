<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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
    // move the logic to a controller for cleaner codes
    $user = [
        'name' => 'Beaumont'
    ];
    return Inertia::render('Home', [
        'title' => "Hi {$user['name']}",
    ]);
});

Route::get('/blog', [BlogController::class, 'index']);

Route::post('/blog', [BlogController::class, 'store']);

// Route::get('/test', function() {
//     return Inertia::render('Blog/Index');
// });