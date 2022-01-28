<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DonationController;

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


Route::get('/', [HomeController::class, 'index']);


Route::prefix('admin')->group(function () {

    Route::get('login', [AuthController::class, 'index']);
    Route::post('login', [AuthController::class, 'auth']);

    Route::group(['middleware' => 'authAdmin'], function () {

        Route::get('', [AdminController::class, 'index']);

        Route::get('users', [UserController::class, 'index']);
        Route::post('users', [UserController::class, 'store']);
        Route::get('users/{id}/update', [UserController::class, 'edit']);
        Route::post('users/{id}/update', [UserController::class, 'update']);
        Route::get('users/{id}/delete', [UserController::class, 'delete']);

        Route::get('campaign', [CampaignController::class, 'index']);
        Route::post('campaign', [CampaignController::class, 'store']);
        Route::get('campaign/{id}/update', [CampaignController::class, 'edit']);
        Route::post('campaign/{id}/update', [CampaignController::class, 'update']);
        Route::get('campaign/{id}/donation', [CampaignController::class, 'log']);

        Route::get('logout', function () {
            session()->forget('admin');
            return redirect('admin/login');
        });

        Route::get('blogs', [BlogController::class, 'index']);
        Route::post('blogs', [BlogController::class, 'store']);
        Route::get('blogs/{id}/update', [BlogController::class, 'edit']);
        Route::post('blogs/{id}/update', [BlogController::class, 'update']);
        Route::get('blogs/{id}/delete', [BlogController::class, 'delete']);
    });
});


Route::group(['middleware' => 'authClient'], function () {
    Route::get('profile', [UserController::class, 'history']);

    Route::get('logout', function () {
        session()->forget('client');
        return redirect('/');
    });
});

Route::get('lang/{locale}', [HomeController::class, 'lang']);

Route::get('login', [AuthController::class, 'loginClient']);
Route::post('login', [AuthController::class, 'authClient']);


Route::get('register', [UserController::class, 'register']);
Route::post('register', [UserController::class, 'store']);

Route::get('campaigns/{id}', [CampaignController::class, 'show']);
Route::get('campaigns', [CampaignController::class, 'all']);

Route::get('post-stories', [BlogController::class, 'all']);
Route::get('stories/{url}', [BlogController::class, 'single']);

Route::post('donate', [DonationController::class, 'donate'])->name('donation.make');
Route::get('success/{id}/{donationID}', [DonationController::class, 'checkSuccess']);
Route::get('canceled', [DonationController::class, 'failed']);

