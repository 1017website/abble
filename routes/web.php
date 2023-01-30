<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\SpecializationsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'index']);
Route::get('/ourvalues', [HomeController::class, 'ourvalues']);
Route::get('/people', [PeopleController::class, 'index']);
Route::get('/ourdirectors', [PeopleController::class, 'ourdirectors']);
Route::get('/consultants', [PeopleController::class, 'consultants']);
Route::get('/specializations', [SpecializationsController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/community', [CommunityController::class, 'index']);
Route::get('/partnership', [CommunityController::class, 'partnership']);
Route::get('/volunteering', [CommunityController::class, 'volunteering']);
Route::get('/diversityandinclusion', [CommunityController::class, 'diversityandinclusion']);
Route::get('/latestjob', [JobsController::class, 'index']);
Route::get('/joinabblesearch', [JobsController::class, 'joinabblesearch']);
Route::get('/news', [KnowledgeController::class, 'news']);
Route::get('/salarysurveys', [KnowledgeController::class, 'salarysurveys']);
Route::get('/thoughtleadership', [KnowledgeController::class, 'thoughtleadership']);
Route::get('/contact', [ContactController::class, 'index']);
