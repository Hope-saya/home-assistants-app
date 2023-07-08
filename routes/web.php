<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardControllerJobPostings;
use App\Http\Controllers\DashboardControllerJobApplications;
use App\Http\Controllers\DashboardControllerReviews;
use App\Http\Controllers\DashboardControllerUsers;
use App\Http\Controllers\DashboardControllerRoles;

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

Route::get('/', [FrontendController::class, 'homePage'])->name('home');


//Dashboard
Route::prefix('/dashboards')->middleware(['auth', 'verified'])->group(function () {
    //Grouped routes
    Route::get('/', [DashboardController::class, 'mainDashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    /*
    //Job Postings

    Route::get('/jobPostings', [DashboardControllerJobPostings::class, 'index'])->name('jobPostings.list');
    Route::get('/jobPostings/create', [DashboardControllerJobPostings::class, 'create'])->name('jobPostings.add');
    Route::post('/jobPostings/create', [DashboardControllerJobPostings::class, 'store'])->name('jobPostings.store');
    Route::get('/jobPostings/{id}/edit', [DashboardControllerJobPostings::class, 'edit'])->name('jobPostings.edit');
    Route::patch('/jobPostings/{id}/edit', [DashboardControllerJobPostings::class, 'update'])->name('jobPostings.update');
    Route::delete('/jobPostings/{id}/edit', [DashboardControllerJobPostings::class, 'destroy'])->name('jobPostings.delete');


    //Job Applications
    Route::get('/jobApplications', [DashboardControllerJobApplications::class, 'index'])->name('jobApplications.list');
    Route::get('/jobApplications/create', [DashboardControllerJobApplications::class, 'create'])->name('jobApplications.add');
    Route::post('/jobApplications/create', [DashboardControllerJobApplications::class, 'store'])->name('jobApplications.store');
    Route::get('/jobApplications/{id}/edit', [DashboardControllerJobApplications::class, 'edit'])->name('jobApplications.edit');
    Route::patch('/jobApplications/{id}/edit', [DashboardControllerJobApplications::class, 'update'])->name('jobApplications.update');
    Route::delete('/jobApplications/{id}/edit', [DashboardControllerJobApplications::class, 'destroy'])->name('jobApplications.delete');



    //reviews
    Route::get('/reviews', [DashboardControllerReviews::class, 'index'])->name('reviews.list');
    Route::get('/reviews/create', [DashboardControllerReviews::class, 'create'])->name('reviews.add');
    Route::post('/reviews/create', [DashboardControllerReviews::class, 'store'])->name('reviews.store');
    Route::get('/reviews/{id}/edit', [DashboardControllerReviews::class, 'edit'])->name('reviews.edit');
    Route::patch('/reviews/{id}/edit', [DashboardControllerReviews::class, 'update'])->name('reviews.update');
    Route::delete('/reviews/{id}/edit', [DashboardControllerReviews::class, 'destroy'])->name('reviews.delete');


    //users
    Route::get('/users', [DashboardControllerUsers::class, 'index'])->name('users.list');
    Route::get('/users/create', [DashboardControllerUsers::class, 'create'])->name('users.add');
    Route::post('/users/create', [DashboardControllerUsers::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [DashboardControllerUsers::class, 'edit'])->name('users.edit');
    Route::patch('/users/{id}/edit', [DashboardControllerUsers::class, 'update'])->name('users.update');
    Route::delete('/users/{id}/edit', [DashboardControllerUsers::class, 'destroy'])->name('users.delete');



    //roles
    Route::get('/roles', [DashboardControllerRoles::class, 'index'])->name('roles.list');
    Route::get('/roles/create', [DashboardControllerRoles::class, 'create'])->name('roles.add');
    Route::post('/roles/create', [DashboardControllerRoles::class, 'store'])->name('roles.store');
    Route::get('/roles/{id}/edit', [DashboardControllerRoles::class, 'edit'])->name('roles.edit');
    Route::patch('/roles/{id}/edit', [DashboardControllerRoles::class, 'update'])->name('roles.update');
    Route::delete('/roles/{id}/edit', [DashboardControllerRoles::class, 'destroy'])->name('roles.delete');*/
});
require __DIR__ . '/auth.php';
