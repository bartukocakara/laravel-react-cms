<?php

use Illuminate\Support\Facades\Route;


Route::prefix("player")->group(function(){
    Route::get("/", function() {
        dd("player");
    });
 });