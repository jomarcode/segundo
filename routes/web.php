<?php


use Illuminate\Support\Facades\Route;


Route::view('/','home')->name('home');
Route::view('/servicios','servicios')->name('servicios');
Route::view('/contact','contact')->name('contact');
Route::view('/nosotros','nosotros')->name('nosotros');


