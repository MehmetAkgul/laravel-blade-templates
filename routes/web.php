<?php

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

Route::get('/', function () { return view('welcome'); });
Route::get('/ifendif', function () { return view('ifendif'); })->name("ifendif");
Route::get('/unlessendunless', function () { return view('unlessendunless'); })->name("unlessendunless");
Route::get('/isset', function () { return view('isset'); })->name("isset");
Route::get('/empty', function () { return view('empty'); })->name("empty");
Route::get('/production', function () { return view('production'); })->name("production");
Route::get('/switch', function () { return view('switch'); })->name("switch");
Route::get('/loops', function () { return view('loops'); })->name("loops");
Route::get('/style', function () { return view('style'); })->name("style");
Route::get('/attribute', function () { return view('attribute'); })->name("attribute");
Route::get('/include', function () { return view('include'); })->name("include");
Route::get('/each', function () { return view('each'); })->name("each");
Route::get('/once', function () { return view('once'); })->name("once");
Route::get('/components', function () { return view('components'); })->name("components");
Route::get('/components-alert', function () { return view('components-alert'); })->name("components-alert");
Route::get('/components-button', function () { return view('components-button'); })->name("components-button");
