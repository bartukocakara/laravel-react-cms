<?php

use Illuminate\Support\Facades\Route;


Route::prefix("manager")->group(function(){
    Route::get("/", function() {
        dd("manager");
    });
 });