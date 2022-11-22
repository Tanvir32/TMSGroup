<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminGalaryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\HeroBannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalaryController;
use App\Http\Controllers\HomeController;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
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

Route::get('/test', function () {
  $data['projects'] = Project::all();
  return view('test', $data);
});

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about',[HomeController::class, 'about'])->name('about');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::post('/send',[ContactController::class, 'send'])->name('mail.send');

Route::get('/galary/{id}', [GalaryController::class, 'galaryByProject'])->name('galaryByProject');

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
  Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
  Route::match(['get', 'post'], '/clients', [AboutController::class, 'clients'])->name('clients');
  Route::match(['get', 'post'], '/companies', [CompanyController::class, 'create'])->name('company.create');

  Route::match(['get','post'], '/banners', [HeroBannerController::class, 'create'])->name('banner.create');
  Route::get('/banners/delete/{id}', [HeroBannerController::class, 'delete'])->name('banner.delete');

  Route::get('/clients/delete/{id}', [AboutController::class, 'delete'])->name('clients.delete');
  Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
  Route::get('/projects/galary/{id}',[AdminGalaryController::class,'show'])->name('galary');
  Route::post('/projects/galary/{id}', [AdminGalaryController::class, 'add'])->name('galary.add');
  Route::post('/projects/galary/{pID}/{id}', [AdminGalaryController::class, 'update'])->name('galary.image');
  Route::get('/projects/galary/{pID}/{id}', [AdminGalaryController::class, 'delete'])->name('galary.image');
  Route::get('/projects/add', [ProjectController::class, 'add'])->name('projects.add');
  Route::post('/projects/save', [ProjectController::class, 'save'])->name('projects.save');
  Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
  Route::post('/projects/edit/{id}', [ProjectController::class, 'update'])->name('projects.edit');
  Route::get('/projects/delete/{id}', [ProjectController::class, 'delete'])->name('projects.delete');
});
