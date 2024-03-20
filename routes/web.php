<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Backend\AwardController;
use App\Http\Controllers\Backend\ManagementController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SpecialController;
use App\Http\Controllers\Backend\SystemController;
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
Route::get("/battery-details", function(){
    return view("battery-page.details");
});
Route::get("/battery-matching", function(){
    return view("battery-page.matching");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

    //=========================== Menus ==========================
    Route::get('/menus',function(){return view('backend.menus.index');});
    
    // ========================== System =========================
    Route::get("system", [SystemController::class, 'edit'])->name('system.edit');
    Route::put("system/{id}", [SystemController::class, 'update'])->name('system.update');

    // ========================== Slider =========================
    Route::get("slider", [SliderController::class,'index'])->name('slider');
    Route::post("slider/create", [SliderController::class,'store'])->name('slider.create');
    Route::get("slider/edit/{id}", [SliderController::class,'edit'])->name('slider.edit');
    Route::put("slider/edit/{id}", [SliderController::class,'update'])->name('slider.update');
    Route::get("slider/delete/{id}", [SliderController::class,'destroy'])->name('slider.delete');


    // ======================== Management =======================
    Route::get("management", [ManagementController::class,'index'])->name('management');
    Route::post("management/create", [ManagementController::class,'store'])->name('management.create');
    Route::get("management/edit/{id}", [ManagementController::class,'edit'])->name('management.edit');
    Route::put("management/edit/{id}", [ManagementController::class,'update'])->name('management.update');
    Route::get("management/delete/{id}", [ManagementController::class,'destroy'])->name('management.delete');
    
    
    // ==================== Special Awards ===================
    Route::get("special", [SpecialController::class,'index'])->name('special');
    Route::post("special/create", [SpecialController::class,'store'])->name('special.create');
    Route::get("special/edit/{id}", [SpecialController::class,'edit'])->name('special.edit');
    Route::put("special/edit/{id}", [SpecialController::class,'update'])->name('special.update');
    Route::get("special/delete/{id}", [SpecialController::class,'destroy'])->name('special.delete');
    
    // ==================== Special Awards ===================
    Route::get("award", [AwardController::class,'index'])->name('award');
    Route::post("award/create", [AwardController::class,'store'])->name('award.create');
    Route::get("award/edit/{id}", [AwardController::class,'edit'])->name('award.edit');
    Route::put("award/edit/{id}", [AwardController::class,'update'])->name('award.update');
    Route::get("award/delete/{id}", [AwardController::class,'destroy'])->name('award.delete');

    
});
Route::middleware(['auth', 'role:manager'])->prefix('manager')->name('manager.')->group(function () {
    Route::get('/dashboard',[ManagerController::class,'index'])->name('dashboard');
});
Route::middleware(['auth', 'role:customer'])->prefix('customer')->name('customer.')->group(function () {
    Route::get('/dashboard',[CustomerController::class,'index'])->name('dashboard');
});

require __DIR__.'/auth.php';
