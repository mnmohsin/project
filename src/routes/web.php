<?php

use centosquare\mohsinmemon\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::controller(StudentController::class)
->group(function(){
    Route::get('index','index')->name('index');
    Route::get('create','create')->name('create');
    Route::post('store','store')->name('store');
    Route::get('delete/{student}','destroy')->name('destroy');
    Route::get('edit/{id}','edit')->name('edit');
    Route::post('update/{student}','update')->name('update');
});
