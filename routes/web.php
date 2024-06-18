<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::post('order/confirmation', [FrontendController::class, 'orderConfirm'])->name('order.confirm');
Route::get('/order/success/{abc}',[FrontendController::class,'orderSuccess'])->name('order.success');
Route::post('/review/store',[FrontendController::class,'reviewStore'])->name('review.store');

Route::get('/email-sms',[FrontendController::class,'emailSms'])->name('emailsms');




Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    //order
    Route::get('/orders',[OrderController::class,'orders'])->name('orders');
    Route::post('/order/status',[OrderController::class,'orderStatus'])->name('order.status');
    //profile-setting
    Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
    Route::post('/profile-baicInfo-change', [ProfileController::class, 'infoUpdate'])->name('info.update');
    Route::post('/profile-password-update', [ProfileController::class, 'passwordUpdate'])->name('profile.password.update');


});

require __DIR__.'/auth.php';
