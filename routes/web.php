<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\admin\DashboardController;
use App\Http\Controllers\admin\JobController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\ApplicationController;

use App\Http\Controllers\users\HomeController;
use App\Http\Controllers\Auth\users\LoginController;
use App\Http\Controllers\users\JobListController;
use App\Http\Controllers\users\AboutController;
use App\Http\Controllers\users\ContactController;
use App\Http\Controllers\users\ApplyController;
use App\Http\Controllers\users\CvController;





Route::get('/', function () {
    return view('users.login_register.login');
});
// ADMIN:
Route::get('/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'dashboard'])->name('dashboard');
// job:
Route::get('/job', [App\Http\Controllers\admin\JobController::class, 'job'])->name('job');
Route::post('/job/post', [JobController::class, 'postJob'])->name('job.post');
// profile:
Route::get('/profile', [App\Http\Controllers\admin\ProfileController::class, 'profile'])->name('profile');
Route::post('/update_profile', [App\Http\Controllers\admin\ProfileController::class, 'update_profile'])->name('update_profile');
// Manager Job Apply:
// Hiển thị danh sách hồ sơ ứng viên
Route::get('/manager-job-apply', [App\Http\Controllers\admin\ApplicationController::class, 'index'])->name('job.applications');
// Xóa hồ sơ ứng viên
Route::delete('/admin/applications/{id}', [App\Http\Controllers\admin\ApplicationController::class, 'destroy'])->name('application.delete');

// USER:
Route::get('/login_user', [App\Http\Controllers\users\LoginController::class, 'login_user'])->name('login_user');
Route::post('/check_login_user', [App\Http\Controllers\users\LoginController::class, 'check_login_user'])->name('check_login_user');
Route::get('/register_user', [App\Http\Controllers\users\LoginController::class, 'register_user'])->name('register_user');
Route::post('/check_register_user', [App\Http\Controllers\users\LoginController::class, 'check_register_user'])->name('check_register_user');
Route::get('/logout_user', [App\Http\Controllers\users\LoginController::class, 'logout_user'])->name('logout_user');
// Home:
Route::get('/home', [App\Http\Controllers\users\HomeController::class, 'home'])->name('home');
// Job:
Route::get('/job_list', [App\Http\Controllers\users\JobListController::class, 'job_list'])->name('job_list');
Route::get('/job_list/{id}', [App\Http\Controllers\users\JobListController::class, 'job_detail'])->name('job_detail');
Route::get('/jobs', [App\Http\Controllers\users\HomeController::class, 'fetchJobs'])->name('jobs.fetch');
// Apply:
Route::get('/apply/{id}', [App\Http\Controllers\users\ApplyController::class, 'showApplicationForm'])->name('job.apply');
Route::post('/apply/{id}', [App\Http\Controllers\users\ApplyController::class, 'submitApplication']);
// About:
Route::get('/about', [App\Http\Controllers\users\AboutController::class, 'about'])->name('about');
// Contact:
Route::get('/contact', [App\Http\Controllers\users\ContactController::class, 'contact'])->name('contact');
// cv:
Route::get('/create-cv', [App\Http\Controllers\users\CvController::class, 'create'])->name('create_cv');
Route::post('/generate-cv', [App\Http\Controllers\users\CvController::class, 'generate'])->name('generate_cv');
Route::post('/download-cv', [CvController::class, 'downloadCv'])->name('download_cv');
// Blog:
Route::get('/showblog', [App\Http\Controllers\users\BlogController::class, 'showblog'])->name('showblog');


