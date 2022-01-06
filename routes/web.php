<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ProjectController;
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

Route::get('/', function () {
  $data['projects'] = Project::where('projects.status','!=','Disabled')->get();

    return view('frontend.home',$data);
});

Route::get('/about', function () {
  return view('frontend.about');
});

Route::get('/contact', function () {
  return view('frontend.contact');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
    Route::match(['get', 'post'], '/clients', [AboutController::class, 'clients'])->name('clients');
    Route::get('/projects',[ProjectController::class,'index'])->name('projects');
    Route::get('/projects/add', [ProjectController::class, 'add'])->name('projects.add');
    Route::post('/projects/save', [ProjectController::class, 'save'])->name('projects.save');
    Route::get('/projects/edit/{id}',[ProjectController::class,'edit'])->name('projects.edit');
});
