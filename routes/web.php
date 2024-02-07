<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
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

Route::get('/', [PublicController::class , 'home'])->name('home');
Route::get('/category/{category}' , [PublicController::class , 'categoryShow'])->name('categoryShow');

Route::get('/announcements/create' , [AnnouncementController::class , 'create'])->middleware('auth')->name('announcements.create');
Route::get('/announcements/show/{announcement}' ,[AnnouncementController::class , 'show'])->name('announcements.show');
Route::get('/announcements/index' , [AnnouncementController::class , 'index'])->name('announcements.index');
Route::get('/announcements/personal' , [AnnouncementController::class , 'personal'])->middleware('auth')->name('announcements.personal');

// Revisor
Route::get('/revisor/index' , [RevisorController::class , 'index'])->middleware('isRevisor')->name('revisor.index');
Route::get('/revisor/show/{announcement_to_check}' , [RevisorController::class , 'show'])->middleware('isRevisor')->name('revisor.show');
Route::patch('/accept/announcement/{announcement}' , [RevisorController::class , 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');
Route::patch('/reject/announcement/{announcement}' , [RevisorController::class , 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');
Route::patch('/backReview/announcement/{announcement}', [RevisorController::class , 'backInReview'])->middleware('isRevisor')->name('revisor.backInReview');

Route::get('/become/revisor' , [RevisorController::class , 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/make/revisor/{user}' , [RevisorController::class , 'makeRevisor'])->name('make.revisor');

//cerca annuncio
Route::get('/ricerca/annuncio', [PublicController::class , 'searchAnnouncements'])->name('announcements.search');

//cambio lingua
Route::post('/lingua/{lang}', [PublicController::class , 'setLanguage'])->name('setLocale');

//invio Cv
Route::get('/contattaci', [PublicController::class , 'formCv'])->name('formCv');
Route::post('/lavoraConNoi', [PublicController::class , 'sendCv'])->name('sendCv');

//FAQ
Route::get('/FAQ', [PublicController::class , 'faq'])->name('faq');







