<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('home.index');
});
Route::prefix('about')->group(function (){
    Route::get("/rahimafrooz", function(){
        return view("about.index");
    });
    Route::get('/management', function (){
        return view('about.management');
    });
    Route::get('/manufacturing', function (){
        return view('about.manufacturing');
    });
    Route::get('/special-awards-achivement', function (){
        return view('about.special-awards-achivement');
    });
    Route::get('/rahimafrooz-batteries', function (){
        return view('about.rahimafrooz-batteries');
    });
});
Route::get("/contact-us", function(){
    return view("contact.index");
});
Route::get("/become-a-dealer", function(){
    return view("dealer.become-a-dealer");
});
Route::get("/find-dealer", function(){
    return view("dealer.find-dealer");
});
Route::get("/battery-manage", function(){
    return view("dealer.battery-manage");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
