<?php

use Illuminate\Support\Facades\Route;


Route::prefix("manager")->namespace('Manager')->group(function(){
    Route::get('/test', 'ManagerController@index');

 });