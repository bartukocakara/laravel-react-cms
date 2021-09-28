<?php

use Illuminate\Support\Facades\Route;


Route::prefix("player")->namespace('Player')->group(function(){
    Route::get('/test', 'PlayerController@index');

 });