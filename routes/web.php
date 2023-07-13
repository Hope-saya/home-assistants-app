<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardJobPostingsController;
use App\Http\Controllers\DashboardJobApplicationsController;
use App\Http\Controllers\DashboardReviewsController;
use App\Http\Controllers\DashboardUsersController;
use App\Http\Controllers\DashboardRolesController;

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


    //Job Postings
    Route::get('/jobPostings', [DashboardJobPostingsController::class, 'index'])->name('jobPostings.list');
    Route::get('/jobPostings/create', [DashboardJobPostingsController::class, 'create'])->name('jobPostings.add');
    Route::post('/jobPostings/create', [DashboardJobPostingsController::class, 'store'])->name('jobPostings.store');
    Route::get('/jobPostings/{id}/edit', [DashboardJobPostingsController::class, 'edit'])->name('jobPostings.edit');
    Route::patch('/jobPostings/{id}/edit', [DashboardJobPostingsController::class, 'update'])->name('jobPostings.update');
    Route::delete('/jobPostings/{id}/edit', [DashboardJobPostingsController::class, 'destroy'])->name('jobPostings.delete');

    //Job Applications
    Route::get('/jobApplications', [DashboardJobApplicationsController::class, 'index'])->name('jobApplications.list');
    Route::get('/jobApplications/create', [DashboardJobApplicationsController::class, 'create'])->name('jobApplications.add');
    Route::post('/jobApplications/create', [DashboardJobApplicationsController::class, 'store'])->name('jobApplications.store');
    Route::get('/jobApplications/{id}/edit', [DashboardJobApplicationsController::class, 'edit'])->name('jobApplications.edit');
    Route::patch('/jobApplications/{id}/edit', [DashboardJobApplicationsController::class, 'update'])->name('jobApplications.update');
    Route::delete('/jobApplications/{id}/edit', [DashboardJobApplicationsController::class, 'destroy'])->name('jobApplications.delete');

    //reviews
    Route::get('/reviews', [DashboardReviewsController::class, 'index'])->name('reviews.list');
    Route::get('/reviews/create', [DashboardReviewsController::class, 'create'])->name('reviews.add');
    Route::post('/reviews/create', [DashboardReviewsController::class, 'store'])->name('reviews.store');
    Route::get('/reviews/{id}/edit', [DashboardReviewsController::class, 'edit'])->name('reviews.edit');
    Route::patch('/reviews/{id}/edit', [DashboardReviewsController::class, 'update'])->name('reviews.update');
    Route::delete('/reviews/{id}/edit', [DashboardReviewsController::class, 'destroy'])->name('reviews.delete');

    //users
    Route::get('/users', [DashboardUsersController::class, 'index'])->name('users.list');
    Route::get('/users/create', [DashboardUsersController::class, 'create'])->name('users.add');
    Route::post('/users/create', [DashboardUsersController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [DashboardUsersController::class, 'edit'])->name('users.edit');
    Route::patch('/users/{id}/edit', [DashboardUsersController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}/edit', [DashboardUsersController::class, 'destroy'])->name('users.delete');



    //roles
    Route::get('/roles', [DashboardRolesController::class, 'index'])->name('roles.list');
    Route::get('/roles/create', [DashboardRolesController::class, 'create'])->name('roles.add');
    Route::post('/roles/create', [DashboardRolesController::class, 'store'])->name('roles.store');
    Route::get('/roles/{id}/edit', [DashboardRolesController::class, 'edit'])->name('roles.edit');
    Route::patch('/roles/{id}/edit', [DashboardRolesController::class, 'update'])->name('roles.update');
    Route::delete('/roles/{id}/edit', [DashboardRolesController::class, 'destroy'])->name('roles.delete');
});
require __DIR__ . '/auth.php';
